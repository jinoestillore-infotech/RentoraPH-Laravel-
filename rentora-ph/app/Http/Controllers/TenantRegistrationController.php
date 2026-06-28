<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenant;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class TenantRegistrationController extends Controller
{
    public function showForm()
    {
        return view('register.tenant.index');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:100',
            'middle_name' => 'nullable|string|max:100',
            'last_name' => 'required|string|max:100',
            'age' => 'required|integer|min:15|max:100',
            'address' => 'required|string',
            'email' => 'required|email|max:150|unique:tenants,email',
            'contact_number' => 'required|string|max:20',
            'password' => 'required|string|min:8|confirmed',
            'valid_id' => 'required|image|mimes:jpeg,png,jpg|max:5120',
            'emergency_contact_name' => 'required|string|max:150',
            'emergency_contact_number' => 'required|string|max:20',
            'emergency_contact_id' => 'required|image|mimes:jpeg,png,jpg|max:5120',
        ]);

        $validIdPath = null;
        $emergencyIdPath = null;

        if ($request->hasFile('valid_id')) {
            $file = $request->file('valid_id');
            $filename = 'tenant_id_' . time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/tenants'), $filename);
            $validIdPath = 'uploads/tenants/' . $filename;
        }

        if ($request->hasFile('emergency_contact_id')) {
            $file = $request->file('emergency_contact_id');
            $filename = 'emergency_id_' . time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/tenants'), $filename);
            $emergencyIdPath = 'uploads/tenants/' . $filename;
        }

        $tenant = Tenant::create([
            'first_name' => $validated['first_name'],
            'middle_name' => $validated['middle_name'],
            'last_name' => $validated['last_name'],
            'age' => $validated['age'],
            'address' => $validated['address'],
            'email' => $validated['email'],
            'contact_number' => $validated['contact_number'],
            'password' => Hash::make($validated['password']),
            'valid_id_path' => $validIdPath,
            'emergency_contact_name' => $validated['emergency_contact_name'],
            'emergency_contact_number' => $validated['emergency_contact_number'],
            'emergency_contact_id_path' => $emergencyIdPath,
        ]);

        // Immediate Login
        Auth::guard('web')->login($tenant);

        return redirect('/')->with('tenant_registered', 'Welcome to Rentora PH! Your account has been successfully created and you are now logged in.');
    }
}