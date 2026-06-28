@extends('layouts.app')

@section('title', 'Rentora PH | Property Owner Registration')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            
            <!-- System Error Indicator -->
            @if($errors->has('system_error'))
                <div class="alert alert-danger border border-danger-subtle rounded-3 mb-4 p-3" role="alert">
                    <div class="d-flex gap-2">
                        <i class="bi bi-exclamation-triangle-fill"></i>
                        <span>{{ $errors->first('system_error') }}</span>
                    </div>
                </div>
            @endif

            <!-- Navigation Breadcrumbs -->
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-secondary text-decoration-none small">Home</a></li>
                    <li class="breadcrumb-item active small text-dark" aria-current="page">Owner Registration</li>
                </ol>
            </nav>

            <!-- Registration Master Card -->
            <div class="card bg-white border border-light-subtle rounded-3 shadow-sm">
                <div class="card-body p-4 p-md-5">
                    
                    <!-- Form Title & Bohol Context Header -->
                    <div class="mb-4">
                        <h2 class="fw-bold text-dark tracking-tight mb-2">Register My Property</h2>
                        <p class="text-secondary small">
                            Fill out the required information below to create your owner account. Our administrators will review your credentials within an hour to verify property details.
                        </p>
                    </div>

                    <!-- Secure Submission Form -->
                    <form action="{{ route('register.owner.submit') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- SECTION 1: Personal Information -->
                        <div class="mb-5">
                            <h5 class="fw-bold text-dark border-bottom border-light-subtle pb-2 mb-3">
                                <i class="bi bi-person text-secondary me-2"></i>1. Personal Information
                            </h5>
                            
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label for="first_name" class="form-label small fw-semibold text-dark">First Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control bg-light border-light-subtle @error('first_name') is-invalid @enderror" id="first_name" name="first_name" value="{{ old('first_name') }}" required>
                                    @error('first_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="middle_name" class="form-label small fw-semibold text-dark">Middle Name</label>
                                    <input type="text" class="form-control bg-light border-light-subtle @error('middle_name') is-invalid @enderror" id="middle_name" name="middle_name" value="{{ old('middle_name') }}">
                                    @error('middle_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="last_name" class="form-label small fw-semibold text-dark">Last Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control bg-light border-light-subtle @error('last_name') is-invalid @enderror" id="last_name" name="last_name" value="{{ old('last_name') }}" required>
                                    @error('last_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="age" class="form-label small fw-semibold text-dark">Age <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control bg-light border-light-subtle @error('age') is-invalid @enderror" id="age" name="age" value="{{ old('age') }}" min="18" max="120" required>
                                    @error('age')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-8">
                                    <label for="contact_number" class="form-label small fw-semibold text-dark">Contact Number <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control bg-light border-light-subtle @error('contact_number') is-invalid @enderror" id="contact_number" name="contact_number" value="{{ old('contact_number') }}" placeholder="e.g., +639123456789" required>
                                    @error('contact_number')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="address" class="form-label small fw-semibold text-dark">Owner Address <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control bg-light border-light-subtle @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address') }}" placeholder="e.g., Cogon District, Tagbilaran City, Bohol" required>
                                    @error('address')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- SECTION 2: Account Login Credentials -->
                        <div class="mb-5">
                            <h5 class="fw-bold text-dark border-bottom border-light-subtle pb-2 mb-3">
                                <i class="bi bi-shield-lock text-secondary me-2"></i>2. Security Credentials
                            </h5>
                            
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="email" class="form-label small fw-semibold text-dark">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control bg-light border-light-subtle @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="password" class="form-label small fw-semibold text-dark">Password <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control bg-light border-light-subtle @error('password') is-invalid @enderror" id="password" name="password" required>
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="password_confirmation" class="form-label small fw-semibold text-dark">Confirm Password <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control bg-light border-light-subtle" id="password_confirmation" name="password_confirmation" required>
                                </div>
                            </div>
                        </div>

                        <!-- SECTION 3: Boarding House Information -->
                        <div class="mb-5">
                            <h5 class="fw-bold text-dark border-bottom border-light-subtle pb-2 mb-3">
                                <i class="bi bi-house-gear text-secondary me-2"></i>3. Boarding House Information
                            </h5>
                            
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="boarding_house_name" class="form-label small fw-semibold text-dark">Boarding House / Establishment Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control bg-light border-light-subtle @error('boarding_house_name') is-invalid @enderror" id="boarding_house_name" name="boarding_house_name" value="{{ old('boarding_house_name') }}" placeholder="e.g., Bohol Highlands Dormitory" required>
                                    @error('boarding_house_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="boarding_house_address" class="form-label small fw-semibold text-dark">Boarding House Complete Address <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control bg-light border-light-subtle @error('boarding_house_address') is-invalid @enderror" id="boarding_house_address" name="boarding_house_address" value="{{ old('boarding_house_address') }}" placeholder="e.g., Dampas District (Near HNU Campus), Tagbilaran City, Bohol" required>
                                    @error('boarding_house_address')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- SECTION 4: Documents Upload & Verification -->
                        <div class="mb-4">
                            <h5 class="fw-bold text-dark border-bottom border-light-subtle pb-2 mb-3">
                                <i class="bi bi-file-earmark-check text-secondary me-2"></i>4. Verification Documents
                            </h5>
                            
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="valid_id" class="form-label small fw-semibold text-dark">Valid Government-issued ID <span class="text-danger">*</span></label>
                                    <input type="file" class="form-control bg-light border-light-subtle @error('valid_id') is-invalid @enderror" id="valid_id" name="valid_id" accept="image/*" required>
                                    <div class="form-text text-secondary small">JPEG, PNG, or JPG format (Max 5MB). Photo must be clearly readable.</div>
                                    @error('valid_id')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="business_permit" class="form-label small fw-semibold text-dark">Boarding House Business / Barangay Permit <span class="text-danger">*</span></label>
                                    <input type="file" class="form-control bg-light border-light-subtle @error('business_permit') is-invalid @enderror" id="business_permit" name="business_permit" accept="image/*" required>
                                    <div class="form-text text-secondary small">Official operating permit or license issued by the municipality in Bohol.</div>
                                    @error('business_permit')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <!-- CTA Submission Controls -->
                        <div class="pt-4 border-top border-light-subtle d-flex flex-wrap gap-2 justify-content-end">
                            <a href="{{ url('/') }}" class="btn btn-outline-dark px-4 py-2 small">Cancel</a>
                            <button type="submit" class="btn btn-dark px-5 py-2 small fw-bold">Submit Registration</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Success Modal for Submitted Registrations (Pending Admin Review) -->
@if(session('registration_success'))
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow rounded-3">
            <div class="modal-header border-0 bg-light p-4">
                <h5 class="modal-title fw-bold text-dark d-flex align-items-center gap-2" id="successModalLabel">
                    <i class="bi bi-clock-history text-dark"></i> Submission Pending Review
                </h5>
            </div>
            <div class="modal-body p-4 text-center">
                <div class="mb-4">
                    <i class="bi bi-shield-check text-dark display-3"></i>
                </div>
                <h4 class="fw-bold text-dark mb-2">Registration Received!</h4>
                <p class="text-secondary small mb-0">
                    Thank you for listing your property on Rentora PH! Your owner registration has been submitted and is currently <strong>pending review</strong>. 
                </p>
                <hr class="my-3 border-light">
                <p class="text-dark small fw-medium">
                    Our system administrators in Bohol will review your uploaded documents and verify your establishment. This approval process typically takes <strong>approximately one (1) hour</strong>.
                </p>
                <p class="text-secondary small mb-0">
                    You will receive an email/text confirmation once approved. Please note that logging into your account is restricted until approval.
                </p>
            </div>
            <div class="modal-footer border-0 p-4 justify-content-center bg-light">
                <a href="{{ url('/') }}" class="btn btn-dark w-100 py-2 small fw-bold">Return to Homepage</a>
            </div>
        </div>
    </div>
</div>
@endif
@endsection

@section('scripts')
@if(session('registration_success'))
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var successModal = new bootstrap.Modal(document.getElementById('successModal'), {
            keyboard: false,
            backdrop: 'static'
        });
        successModal.show();
    });
</script>
@endif
@endsection