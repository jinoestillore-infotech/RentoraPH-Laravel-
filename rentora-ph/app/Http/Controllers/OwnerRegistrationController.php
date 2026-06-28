<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class OwnerRegistrationController extends Controller
{
    /**
     * Display the owner registration form.
     */
    public function showForm()
    {
        return view('register.owner.index');
    }

    /**
     * Process secure owner registration requests.
     */
    public function register(Request $request)
    {
        // 1. Strict Server-Side Validation conforming to Security Guidelines
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:100',
            'middle_name' => 'nullable|string|max:100',
            'last_name' => 'required|string|max:100',
            'age' => 'required|integer|min:18|max:120',
            'address' => 'required|string',
            'email' => 'required|email|max:150|unique:owners,email',
            'contact_number' => 'required|string|max:20',
            'password' => 'required|string|min:8|confirmed',
            'valid_id' => 'required|image|mimes:jpeg,png,jpg|max:5120', // Max 5MB
            'business_permit' => 'required|image|mimes:jpeg,png,jpg|max:5120', // Max 5MB
            'boarding_house_name' => 'required|string|max:200',
            'boarding_house_address' => 'required|string',
        ]);

        try {
            // 2. Safe File Upload execution with customized, non-guessable filenames
            $validIdPath = null;
            $businessPermitPath = null;

            if ($request->hasFile('valid_id')) {
                $file = $request->file('valid_id');
                $filename = 'owner_id_' . time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                // Saved in public folder to ensure local file reference without complex storage setups
                $file->move(public_path('uploads/verification'), $filename);
                $validIdPath = 'uploads/verification/' . $filename;
            }

            if ($request->hasFile('business_permit')) {
                $file = $request->file('business_permit');
                $filename = 'owner_permit_' . time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/verification'), $filename);
                $businessPermitPath = 'uploads/verification/' . $filename;
            }

            // 3. Create database entry with forced 'pending' status and secure password hashing
            Owner::create([
                'first_name' => $validatedData['first_name'],
                'middle_name' => $validatedData['middle_name'],
                'last_name' => $validatedData['last_name'],
                'age' => $validatedData['age'],
                'address' => $validatedData['address'],
                'email' => $validatedData['email'],
                'contact_number' => $validatedData['contact_number'],
                'password' => Hash::make($validatedData['password']), // Secure Hash
                'valid_id_path' => $validIdPath,
                'business_permit_path' => $businessPermitPath,
                'boarding_house_name' => $validatedData['boarding_house_name'],
                'boarding_house_address' => $validatedData['boarding_house_address'],
                'status' => 'pending', // Account restricted until admin review
            ]);

            // Flash successful registration to show success modal
            return redirect()->route('register.owner')->with('registration_success', true);

        } catch (\Exception $e) {
            // Security error tracking without displaying database internals to public
            Log::error('Owner registration failure: ' . $e->getMessage());
            return back()->withInput()->withErrors(['system_error' => 'An unexpected server error occurred. Please try again later.']);
        }
    }
}