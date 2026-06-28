<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display the Rentora PH Landing Page with featured rooms.
     */
    public function index()
    {
        // Mock data representing boarding house listings for UI preview purposes
        // Strictly kept in backend PHP logic as per Backend Rules
        $featuredListings = [
            [
                'id' => 1,
                'title' => 'Cozy Study Haven Boarding House',
                'location' => 'Cogon, Tagbilaran City (Near UB)',
                'price' => 1800,
                'type' => 'Bedspace (Male Only)',
                'amenities' => ['Free Wi-Fi', 'Water Included', 'Study Lounge'],
                'image_placeholder' => 'https://images.unsplash.com/photo-1522771739844-6a9f6d5f14af?auto=format&fit=crop&w=600&q=80',
                'available_slots' => 3
            ],
            [
                'id' => 2,
                'title' => 'Greenview Female Residences',
                'location' => 'Dampas, Tagbilaran City (Near HNU)',
                'price' => 3500,
                'type' => 'Private Single Room',
                'amenities' => ['Aircon Available', 'Own Restroom', '24/7 Security'],
                'image_placeholder' => 'https://images.unsplash.com/photo-1598928506311-c55ded91a20c?auto=format&fit=crop&w=600&q=80',
                'available_slots' => 1
            ],
            [
                'id' => 3,
                'title' => 'Panglao Staff & Student Inn',
                'location' => 'Tawala, Panglao, Bohol',
                'price' => 2800,
                'type' => 'Shared Dormitory',
                'amenities' => ['CCTV Monitored', 'Cooking Allowed', 'Laundry Area'],
                'image_placeholder' => 'https://images.unsplash.com/photo-1555854877-bab0e564b8d5?auto=format&fit=crop&w=600&q=80',
                'available_slots' => 5
            ]
        ];

        return view('landing.index', compact('featuredListings'));
    }
}