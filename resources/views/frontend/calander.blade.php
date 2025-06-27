@extends('frontend.layout.master')

@section('container')
<div class="container my-5">
    <h3 class="mb-3">View PDF Document</h3>

    <iframe src="{{ $calendar->pdf }}" width="100%" height="600px" style="border: 1px solid #ccc;"></iframe>
</div>
@endsection
