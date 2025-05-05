@extends('frontend.layout.master')

@section('container')

<style>
    .custom-shadow {
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
        border-radius: 10px;
    }
    .card {
        border: 2px solid #00440b;
    }
    .add {
        color: #00440b;
    }
    .addbtn {
        background-color: #00440b;
        color: #e7d31f;
        border: 2px solid #00440b;
    }
    .addbtn:hover {
        background-color: white;
        color: #00440b;
        border: 2px solid #00440b;
    }
</style>

<div class="container-fluid p-3">
    <h2 class="text-center p-5 add"><i class="bi bi-journal-check"></i> Admission Information</h2>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card p-4 custom-shadow">
                <h4 class="mb-3 add">Welcome to Golden ABC Public School</h4>
                @if($admission)
        <p>{{ $admission->explanation }}</p>
    @else
        <p>No admission information available.</p>
    @endif

                <hr>
                <h5 class="mb-2 add"> Admission Requirements:</h5>
                <ul>
                    @foreach(explode("\n", $admission->requirements) as $req)
                        <li>{{ trim($req) }}</li>
                    @endforeach
                </ul>

                <hr>
                <h5 class="mb-2 add"> Admission Process:</h5>
                <ol>
                    @foreach(explode("\n", $admission->process) as $proc)
                        <li>{{ trim($proc) }}</li>
                    @endforeach
                </ol>

                <hr>
                <div class="text-center mt-4">
                    <p>For any inquiries or assistance, contact us at <strong>{{$systemsetting->phone_number}}</strong> or email <strong>{{$systemsetting->email}}</strong>.</p>
                    <a href="contact.html" class="btn btn-primary addbtn">Contact for Admission</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
