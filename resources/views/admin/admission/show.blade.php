@extends('admin.layout.master')

@section('container')

<div class="container mt-5" style="margin-bottom:90px;">
    <h2 class="fw-bold mb-4" style="color: #00440b;">Admission Details</h2>

    <!-- Loop through all Admissions -->
    @foreach($admissions as $admission)
        <div class="card" style="border-color: #00440b;">
            <div class="card-header" style="background-color: #00440b; color: #e7d31f;">
                Admission Information
            </div>
            <div class="card-body p-3">

                <!-- Explanation -->
                <p><strong>Explanation:</strong></p>
                <p>{{ $admission->explanation ?? 'No explanation available.' }}</p>

                <!-- Display Requirements as a List -->
                <p><strong>Requirements:</strong></p>
                @if($admission->requirements)
                    <ul>
                        @foreach(explode("\n", $admission->requirements) as $req)
                            <li>{{ trim($req) }}</li>
                        @endforeach
                    </ul>
                @else
                    <p>No requirements available.</p>
                @endif

                <!-- Display Process as an Ordered List -->
                <p><strong>Process:</strong></p>
                @if($admission->process)
                    <ol>
                        @foreach(explode("\n", $admission->process) as $proc)
                            <li>{{ trim($proc) }}</li>
                        @endforeach
                    </ol>
                @else
                    <p>No process steps available.</p>
                @endif

            </div>
            <div class="card-footer text-end">
                <!-- Back Button -->
                <a href="{{ route('admin.admission.index') }}" class="btn btn-secondary" style="background-color: #00440b; color: #e7d31f;">Back</a>
            </div>
        </div>
    @endforeach
</div>

@endsection
