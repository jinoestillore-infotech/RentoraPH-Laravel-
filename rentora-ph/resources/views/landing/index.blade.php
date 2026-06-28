@extends('layouts.app')

@section('title', 'Rentora PH | Modern Boarding House Finder & Management')

@section('content')
<div class="container">
    @if(session('tenant_registered'))
        <div class="alert alert-success border border-success-subtle rounded-3 my-4 p-3 alert-dismissible fade show" role="alert">
            <div class="d-flex align-items-center gap-2">
                <i class="bi bi-check-circle-fill"></i>
                <div>{{ session('tenant_registered') }}</div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
</div>

<!-- SaaS Hero Section (Off-White Background, Clean Text Contrast, Flat Dual-Tone Search Card) -->
<section class="py-5 pt-0" style="background-color: #fafafa;">
    <div class="container py-5">
        <div class="row align-items-center g-5">
            <!-- Left Hero Content -->
            <div class="col-lg-6 text-center text-lg-start">
                <div class="d-inline-flex align-items-center gap-2 bg-white border border-light-subtle rounded-pill px-3 py-2 mb-4 shadow-sm">
                    <span class="badge bg-dark text-white rounded-pill px-3 py-1 small" style="font-size: 0.75rem;">Announcement</span>
                    <span class="text-secondary small fw-medium" style="font-size: 0.8rem;">Now processing applications in Bohol province.</span>
                </div>
                
                <h1 class="display-5 fw-bold mb-3 text-dark tracking-tight" style="letter-spacing: -1.5px; font-weight: 800;">
                    Modernized Boarding House Living in Bohol.
                </h1>
                
                <p class="text-secondary mb-4 fs-5 lh-base" style="max-width: 520px; font-weight: 400; color: #475569 !important;">
                    A unified directory and secure management platform. Find verified bedspaces near your campus, submit digital applications, and coordinate transactions directly.
                </p>
                
                <!-- Action Buttons: Clear Split Roles (Owner vs Tenant) -->
                <div class="d-flex gap-3 justify-content-center justify-content-lg-start flex-wrap">
                    <a href="{{ url('/register/owner') }}" class="btn btn-dark btn-lg px-4 py-2 rounded-2 shadow-sm fs-6 fw-semibold">
                        Register My Property
                    </a>
                    <a href="{{ url('/register/tenant') }}" class="btn btn-outline-dark btn-lg px-4 py-2 rounded-2 fs-6 fw-semibold">
                        Find a Room
                    </a>
                </div>
            </div>
            
            <!-- Right Hero Card (Clean SaaS Search Card) -->
            <div class="col-lg-6">
                <div class="card bg-white border border-light-subtle shadow-sm rounded-3 p-3">
                    <div class="card-body p-3">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="bg-light text-dark rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
                                <i class="bi bi-search text-dark small"></i>
                            </div>
                            <h5 class="fw-bold text-dark mb-0 tracking-tight">Search Directory</h5>
                        </div>
                        <p class="text-secondary small mb-4">Input location preferences to scan verified rooms.</p>
                        
                        <!-- Search Form (Pure Light Form Aesthetics with Charcoal CTA) -->
                        <form action="#" method="GET">
                            <div class="mb-3">
                                <label for="searchLocation" class="form-label fw-bold text-dark small mb-2">Target Location</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0 text-secondary border-light-subtle"><i class="bi bi-geo-alt"></i></span>
                                    <input type="text" class="form-control border-start-0 bg-light border-light-subtle text-dark" id="searchLocation" name="location" placeholder="e.g., Tagbilaran City, Panglao, Tubigon" required style="font-size: 0.9rem;">
                                </div>
                            </div>
                            
                            <div class="row g-3 mb-4">
                                <div class="col-sm-6">
                                    <label for="roomType" class="form-label fw-bold text-dark small mb-2">Accommodation Style</label>
                                    <select class="form-select bg-light border-light-subtle text-dark" id="roomType" name="type" style="font-size: 0.9rem;">
                                        <option value="" selected>All Styles</option>
                                        <option value="private">Private Single Room</option>
                                        <option value="bedspace_m">Bedspace (Male Only)</option>
                                        <option value="bedspace_f">Bedspace (Female Only)</option>
                                        <option value="dorm">Shared Dormitory</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label for="maxPrice" class="form-label fw-bold text-dark small mb-2">Max Monthly Budget</label>
                                    <select class="form-select bg-light border-light-subtle text-dark" id="maxPrice" name="price_limit" style="font-size: 0.9rem;">
                                        <option value="" selected>No Limit</option>
                                        <option value="2000">Below ₱2,000 / mo</option>
                                        <option value="4000">Below ₱4,000 / mo</option>
                                        <option value="6000">Below ₱6,000 / mo</option>
                                        <option value="8000">Below ₱8,000 / mo</option>
                                    </select>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-dark w-100 py-3 fw-semibold rounded-2 d-flex align-items-center justify-content-center gap-2" style="font-size: 0.95rem;">
                                <i class="bi bi-funnel-fill small"></i> Apply Filter Criteria
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Platform Roles Segment (Pure White Background, Monochromatic Outlines) -->
<section class="py-5 bg-white border-top border-bottom border-light-subtle">
    <div class="container py-4">
        <div class="text-center max-w-xl mx-auto mb-5">
            <span class="text-uppercase tracking-wider fw-bold text-secondary small" style="font-size: 0.75rem; letter-spacing: 1px;">Security & Governance</span>
            <h2 class="fw-bold text-dark tracking-tight mt-1 mb-2">Role-Based Operations</h2>
            <p class="text-secondary col-md-8 mx-auto small" style="color: #64748b !important;">
                Three fully compartmentalized authorization systems engineered to separate oversight, execution, and viewing permissions.
            </p>
        </div>
        
        <div class="row g-4">
            <!-- Role: Tenant -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border border-light-subtle bg-light rounded-3 p-3">
                    <div class="card-body">
                        <div class="bg-white border border-light-subtle rounded-3 d-inline-flex p-2 mb-3">
                            <i class="bi bi-person text-dark fs-5"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-2 tracking-tight">Boarders & Tenants</h5>
                        <p class="text-secondary small lh-lg mb-0" style="color: #64748b !important;">
                            Submit digitized leasing applications, track monthly payments, manage direct communication histories, and store receipt logs instantly from any device.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Role: Owner -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 border border-light-subtle bg-light rounded-3 p-3">
                    <div class="card-body">
                        <div class="bg-white border border-light-subtle rounded-3 d-inline-flex p-2 mb-3">
                            <i class="bi bi-house-gear text-dark fs-5"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-2 tracking-tight">Property Owners</h5>
                        <p class="text-secondary small lh-lg mb-0" style="color: #64748b !important;">
                            List available spaces, review tenant histories, log rent collection dates, generate invoice receipts, and catalog maintenance requests cleanly.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Role: Admin -->
            <div class="col-lg-4 col-md-12">
                <div class="card h-100 border border-light-subtle bg-light rounded-3 p-3">
                    <div class="card-body">
                        <div class="bg-white border border-light-subtle rounded-3 d-inline-flex p-2 mb-3">
                            <i class="bi bi-shield-check text-dark fs-5"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-2 tracking-tight">System Administrators</h5>
                        <p class="text-secondary small lh-lg mb-0" style="color: #64748b !important;">
                            Verify property legal documentation, audit transactions, oversee listing compliance rules, manage master accounts, and maintain system security settings.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modern Accommodation Catalog (Clean Light Grid, Crisp White Cards) -->
<section id="listings" class="py-5" style="background-color: #fafafa;">
    <div class="container py-4">
        <div class="d-flex align-items-end justify-content-between mb-5 flex-wrap gap-3">
            <div>
                <span class="text-uppercase tracking-wider fw-bold text-secondary small" style="font-size: 0.75rem; letter-spacing: 1px;">Live Listings</span>
                <h2 class="fw-bold text-dark tracking-tight mt-1 mb-0">Verified Accommodations</h2>
                <p class="text-secondary small mb-0" style="color: #64748b !important;">Directly published by authenticated boarding house owners.</p>
            </div>
            <a href="#" class="btn btn-outline-dark btn-sm rounded-2 px-3 py-2 fw-semibold">
                View All Boarding Houses <i class="bi bi-arrow-right ms-2"></i>
            </a>
        </div>

        <div class="row g-4 justify-content-center">
            @forelse($featuredListings as $listing)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card h-100 border border-light-subtle bg-white rounded-3 overflow-hidden shadow-sm">
                        <!-- Image Container with Clean Modern Badges -->
                        <div class="position-relative">
                            <img src="{{ $listing['image_placeholder'] }}" class="card-img-top" style="height: 230px; object-fit: cover;" alt="{{ $listing['title'] }}">
                            <!-- Price Tag (Sleek Dark Badge) -->
                            <span class="position-absolute bottom-0 start-0 m-3 badge bg-dark text-white fw-semibold px-3 py-2 fs-6 shadow-sm">
                                ₱{{ number_format($listing['price']) }}<span class="small fw-normal text-light text-opacity-75" style="font-size: 0.75rem;">/mo</span>
                            </span>
                            <!-- Room Type Tag -->
                            <span class="position-absolute top-0 end-0 m-3 badge bg-white text-dark border border-light-subtle fw-bold px-3 py-2 shadow-sm small">
                                {{ $listing['type'] }}
                            </span>
                        </div>
                        
                        <!-- Listing Details -->
                        <div class="card-body p-4 d-flex flex-column">
                            <p class="text-secondary small mb-2 d-flex align-items-center gap-2" style="font-size: 0.8rem; color: #64748b !important;">
                                <i class="bi bi-geo-alt"></i> {{ $listing['location'] }}
                            </p>
                            <h6 class="fw-bold text-dark mb-3 line-clamp-2" style="min-height: 2.5rem; letter-spacing: -0.2px;">{{ $listing['title'] }}</h6>
                            
                            <!-- Key Amenities -->
                            <div class="d-flex flex-wrap gap-2 mb-4">
                                @foreach($listing['amenities'] as $amenity)
                                    <span class="badge bg-light text-dark border border-light-subtle small px-2 py-2" style="font-size: 0.75rem; font-weight: 500;">{{ $amenity }}</span>
                                @endforeach
                            </div>

                            <!-- Card Footer Slot Status & Action -->
                            <div class="mt-auto pt-3 border-top border-light d-flex align-items-center justify-content-between">
                                <span class="badge bg-dark bg-opacity-10 text-dark border border-dark-subtle fw-medium px-2 py-2 rounded-2" style="font-size: 0.75rem;">
                                    <i class="bi bi-person-exclamation me-1"></i> {{ $listing['available_slots'] }} slots left
                                </span>
                                <a href="#" class="btn btn-outline-dark btn-sm px-3 py-2 fw-semibold" style="font-size: 0.8rem;">Select Unit</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <div class="text-secondary mb-3"><i class="bi bi-slash-circle fs-1"></i></div>
                    <p class="text-secondary small">No featured units currently verified in this directory.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Call to Action Section (Elegant Minimal Dark Contrast Box) -->
<section class="py-5 bg-dark text-white border-top border-secondary">
    <div class="container py-5 text-center">
        <div class="col-lg-7 mx-auto">
            <h2 class="fw-bold mb-3 text-white tracking-tight" style="letter-spacing: -1px;">Simplify Your Living Setup Today</h2>
            <p class="text-secondary mb-4 fs-6 lh-lg" style="color: #94a3b8 !important;">
                Rentora PH handles the complexity of local boarding house operations. Secure digital billing logs, instant spot checks, and authenticated identity verifications help protect your tenancy.
            </p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="{{ url('/register/owner') }}" class="btn btn-light btn-lg px-4 py-2 rounded-2 shadow-sm fw-semibold" style="font-size: 0.95rem;">
                    Get Started Free
                </a>
                <a href="#" class="btn btn-outline-secondary btn-lg px-4 py-2 rounded-2 text-white border-secondary" style="font-size: 0.95rem;">
                    Platform Documentation
                </a>
            </div>
        </div>
    </div>
</section>
@endsection