@extends('frontend.layout.master')

@section('container')

<style>
    /* Back icon styling */
    a i.bi-arrow-left-circle-fill {
        font-size: 30px;
        color: #00440b;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    a i.bi-arrow-left-circle-fill:hover {
        color: #e7d31f;
        transform: scale(1.1) translateX(-3px);
        cursor: pointer;
    }

    /* Card layout fix */
    .search-card {
        overflow: hidden;
        word-wrap: break-word;
        overflow-wrap: break-word;
    }

    .search-card .col-md-9 {
        text-align: justify;
    }

    .search-description {
        white-space: normal;
        word-break: break-word;
        overflow-wrap: break-word;
        margin-bottom: 0;
    }
</style>

<div class="container" style="margin-top: 200px;">

    <!-- 🔙 Back to Golden Family Page Icon -->
    <div class="mb-4">
        <a href="{{ route('golden_family') }}" class="text-decoration-none text-dark d-flex align-items-center">
            <i class="bi bi-arrow-left-circle-fill"></i>
        </a>
    </div>

    @if (isset($message))
        <p class="text-center text-danger">{{ $message }}</p>
    @else
        <div class="text-center mb-4">
            <h4>{{ $resultsCount }} result(s) found</h4>
        </div>

        @foreach ($results as $result)
            <div class="row mb-4 align-items-center shadow p-3 rounded search-card">
                <div class="col-md-3 text-center">
                    <img src="{{ $result->image }}" alt="{{ $result->name ?? 'Image' }}"
                         class="img-fluid rounded-circle"
                         style="width: 150px; height: 150px; object-fit: cover;">
                </div>
                <div class="col-md-9">
                    <h4 class="fw-bold">{{ $result->name }}</h4>
                    <p class="text-muted mb-1"><strong>Role:</strong> {{ $result->role }}</p>
                    <p class="search-description">{!! $result->description !!}</p>
                </div>
            </div>
        @endforeach
    @endif

</div>
@endsection
