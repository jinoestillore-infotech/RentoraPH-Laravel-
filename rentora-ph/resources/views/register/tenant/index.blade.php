@extends('layouts.app')

@section('title', 'Rentora PH | Tenant Registration')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-secondary text-decoration-none small">Home</a></li>
                    <li class="breadcrumb-item active small text-dark" aria-current="page">Tenant Registration</li>
                </ol>
            </nav>

            <div class="card bg-white border border-light-subtle rounded-3 shadow-sm">
                <div class="card-body p-4 p-md-5">
                    
                    <div class="mb-4">
                        <h2 class="fw-bold text-dark tracking-tight mb-2">Find a Room: Register Account</h2>
                        <p class="text-secondary small">
                            Fill out the required information to set up your boarder account. This permits instant access to listings and rental application submissions across Bohol.
                        </p>
                    </div>

                    <form action="{{ route('register.tenant.submit') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- SECTION 1: Personal Information -->
                        <div class="mb-4">
                            <h5 class="fw-bold text-dark border-bottom border-light-subtle pb-2 mb-3">
                                <i class="bi bi-person text-secondary me-2"></i>1. Personal Information
                            </h5>
                            
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label for="first_name" class="form-label small fw-semibold text-dark">First Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control bg-light border-light-subtle @error('first_name') is-invalid @enderror" id="first_name" name="first_name" value="{{ old('first_name') }}" required>
                                    @error('first_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="middle_name" class="form-label small fw-semibold text-dark">Middle Name</label>
                                    <input type="text" class="form-control bg-light border-light-subtle" id="middle_name" name="middle_name" value="{{ old('middle_name') }}">
                                </div>
                                <div class="col-md-4">
                                    <label for="last_name" class="form-label small fw-semibold text-dark">Last Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control bg-light border-light-subtle @error('last_name') is-invalid @enderror" id="last_name" name="last_name" value="{{ old('last_name') }}" required>
                                    @error('last_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="age" class="form-label small fw-semibold text-dark">Age <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control bg-light border-light-subtle @error('age') is-invalid @enderror" id="age" name="age" value="{{ old('age') }}" min="15" max="100" required>
                                    @error('age') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                                <div class="col-md-8">
                                    <label for="contact_number" class="form-label small fw-semibold text-dark">Contact Number <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control bg-light border-light-subtle @error('contact_number') is-invalid @enderror" id="contact_number" name="contact_number" value="{{ old('contact_number') }}" placeholder="e.g., +639123456789" required>
                                    @error('contact_number') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-12">
                                    <label for="address" class="form-label small fw-semibold text-dark">Home Address <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control bg-light border-light-subtle @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address') }}" placeholder="e.g., Tagbilaran City, Bohol" required>
                                    @error('address') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                            </div>
                        </div>

                        <!-- SECTION 2: Security Credentials -->
                        <div class="mb-4">
                            <h5 class="fw-bold text-dark border-bottom border-light-subtle pb-2 mb-3">
                                <i class="bi bi-shield-lock text-secondary me-2"></i>2. Security Credentials
                            </h5>
                            
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="email" class="form-label small fw-semibold text-dark">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control bg-light border-light-subtle @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                                    @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="password" class="form-label small fw-semibold text-dark">Password <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control bg-light border-light-subtle @error('password') is-invalid @enderror" id="password" name="password" required>
                                    @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="password_confirmation" class="form-label small fw-semibold text-dark">Confirm Password <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control bg-light border-light-subtle" id="password_confirmation" name="password_confirmation" required>
                                </div>
                            </div>
                        </div>

                        <!-- SECTION 3: Identity Verification -->
                        <div class="mb-4">
                            <h5 class="fw-bold text-dark border-bottom border-light-subtle pb-2 mb-3">
                                <i class="bi bi-file-earmark-check text-secondary me-2"></i>3. Identity Verification
                            </h5>
                            
                            <div class="mb-3">
                                <label for="valid_id" class="form-label small fw-semibold text-dark">Valid Government-issued ID <span class="text-danger">*</span></label>
                                <input type="file" class="form-control bg-light border-light-subtle @error('valid_id') is-invalid @enderror" id="valid_id" name="valid_id" accept="image/*" required>
                                <div class="form-text text-secondary small">JPEG, PNG, or JPG format (Max 5MB). Photo must be clearly readable.</div>
                                @error('valid_id') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        <!-- SECTION 4: Emergency Contact -->
                        <div class="mb-4">
                            <h5 class="fw-bold text-dark border-bottom border-light-subtle pb-2 mb-3">
                                <i class="bi bi-telephone-outbound text-secondary me-2"></i>4. Emergency Contact
                            </h5>
                            
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="emergency_contact_name" class="form-label small fw-semibold text-dark">Contact Full Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control bg-light border-light-subtle @error('emergency_contact_name') is-invalid @enderror" id="emergency_contact_name" name="emergency_contact_name" value="{{ old('emergency_contact_name') }}" required>
                                    @error('emergency_contact_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="emergency_contact_number" class="form-label small fw-semibold text-dark">Contact Number <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control bg-light border-light-subtle @error('emergency_contact_number') is-invalid @enderror" id="emergency_contact_number" name="emergency_contact_number" value="{{ old('emergency_contact_number') }}" placeholder="e.g., +639123456789" required>
                                    @error('emergency_contact_number') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                                <div class="col-12">
                                    <label for="emergency_contact_id" class="form-label small fw-semibold text-dark">Contact Valid Government ID <span class="text-danger">*</span></label>
                                    <input type="file" class="form-control bg-light border-light-subtle @error('emergency_contact_id') is-invalid @enderror" id="emergency_contact_id" name="emergency_contact_id" accept="image/*" required>
                                    <div class="form-text text-secondary small">Emergency contact government-issued ID image (Max 5MB).</div>
                                    @error('emergency_contact_id') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                                </div>
                            </div>
                        </div>

                        <!-- CTA Controls -->
                        <div class="pt-4 border-top border-light-subtle d-flex justify-content-end gap-2">
                            <a href="{{ url('/') }}" class="btn btn-outline-dark px-4 py-2 small">Cancel</a>
                            <button type="submit" class="btn btn-dark px-5 py-2 small fw-bold">Register & Find a Room</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection