@extends('admin.layout.master')

@section('container')
<!-- Dashboard Cards -->
<div class="row g-4 mt-4 "style="margin-bottom:100px";>

    {{-- Subjects --}}
    <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card shadow rounded-4 border-0 h-100">
            <div class="card-body text-center">
                <div class="mb-3 text-primary">
                    <i class="fas fa-book fa-3x"></i>
                </div>
                <h6 class="text-muted">Subjects</h6>
                <h3 class="fw-bold text-primary">{{ $subjectCount }}</h3>
            </div>
        </div>
    </div>

    {{-- Customers --}}
    <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card shadow rounded-4 border-0 h-100">
            <div class="card-body text-center">
                <div class="mb-3 text-success">
                    <i class="fas fa-user-graduate fa-3x"></i>
                </div>
                <h6 class="text-muted">Guest User</h6>
                <h3 class="fw-bold text-success">{{ $customerCount }}</h3>
            </div>
        </div>
    </div>

    {{-- Golden Members --}}
    <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card shadow rounded-4 border-0 h-100">
            <div class="card-body text-center">
                <div class="mb-3 text-warning">
                    <i class="fas fa-crown fa-3x"></i>
                </div>
                <h6 class="text-muted">Golden Members</h6>
                <h3 class="fw-bold text-warning">{{ $goldenMemberCount }}</h3>
            </div>
        </div>
    </div>

    {{-- Reviews --}}
    <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card shadow rounded-4 border-0 h-100">
            <div class="card-body text-center">
                <div class="mb-3 text-danger">
                    <i class="fas fa-comments fa-3x"></i>
                </div>
                <h6 class="text-muted">Reviews</h6>
                <h3 class="fw-bold text-danger">{{ $reviewCount }}</h3>
            </div>
        </div>
    </div>

    {{-- Users --}}
    <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="card shadow rounded-4 border-0 h-100">
            <div class="card-body text-center">
                <div class="mb-3 text-info">
                    <i class="fas fa-user fa-3x"></i>
                </div>
                <h6 class="text-muted">Admin User</h6>
                <h3 class="fw-bold text-info">{{ $userCount }}</h3>
            </div>
        </div>
    </div>

</div>
@endsection
