@extends('frontend.layout.master')
@section('container')

<div class="container-fluid mt-5 mb-5 beyondcont">
    <h2 class="text-center mb-4 beyond">🌟 Beyond Academics</h2>
    <p class="text-center mb-5 beyondp1">We believe in the holistic development of students. Explore our various non-academic activities that inspire, engage, and empower!</p>

    <!-- Activity: Sports Week -->
    <div class="card mb-4 shadow-sm p-4 beyondcard1">
        <h4>🏅 Sports Week</h4>
        <p class="beyondp1">Our annual sports week brings energy and excitement to the campus with events like races, tug of war, football, and fun games!</p>
        <div class="row">
            <div class="col-md-6 mb-3"><img src="{{ asset('assets/images/whole7.jpg') }}" class="img-fluid" alt="Sports Week 1"></div>
            <div class="col-md-6 mb-3"><img src="{{ asset('assets/images/whole7.jpg') }}" class="img-fluid" alt="Sports Week 2"></div>
            <div class="col-md-6 mb-3"><img src="{{ asset('assets/images/whole7.jpg') }}" class="img-fluid" alt="Sports Week 3"></div>
            <div class="col-md-6 mb-3"><img src="{{ asset('assets/images/whole7.jpg') }}" class="img-fluid" alt="Sports Week 4"></div>
        </div>
    </div>

    <!-- Activity: Field Visit -->
    <div class="card mb-4 shadow-sm p-4 beyondcard1">
        <h4>🌿 Field Visits</h4>
        <p class="beyondp1">Students get real-world exposure through educational field visits to farms, museums, and local industries.</p>
        <div class="row">
            <div class="col-md-6 mb-3"><img src="{{ asset('assets/images/sci.jpg') }}" class="img-fluid" alt="Field Visit 1"></div>
            <div class="col-md-6 mb-3"><img src="{{ asset('assets/images/sci.jpg') }}" class="img-fluid" alt="Field Visit 2"></div>
            <div class="col-md-6 mb-3"><img src="{{ asset('assets/images/sci.jpg') }}" class="img-fluid" alt="Field Visit 3"></div>
            <div class="col-md-6 mb-3"><img src="{{ asset('assets/images/sci.jpg') }}" class="img-fluid" alt="Field Visit 4"></div>
        </div>
    </div>

    <!-- Activity: Rally -->
    <div class="card mb-4 shadow-sm p-4 beyondcard1">
        <h4>🚶 Rallies</h4>
        <p class="beyondp1">We actively engage in community awareness rallies focused on environmental conservation, education, and health awareness.</p>
        <div class="row">
            <div class="col-md-6 mb-3"><img src="{{ asset('assets/images/assembly.jpg') }}" class="img-fluid" alt="Rally 1"></div>
            <div class="col-md-6 mb-3"><img src="{{ asset('assets/images/assembly.jpg') }}" class="img-fluid" alt="Rally 2"></div>
            <div class="col-md-6 mb-3"><img src="{{ asset('assets/images/assembly.jpg') }}" class="img-fluid" alt="Rally 3"></div>
            <div class="col-md-6 mb-3"><img src="{{ asset('assets/images/assembly.jpg') }}" class="img-fluid" alt="Rally 4"></div>
        </div>
    </div>

    <!-- Activity: Puja Celebration -->
    <div class="card mb-4 shadow-sm p-4 beyondcard1">
        <h4>🪔 Saraswati Pooja</h4>
        <p class="beyondp1">Festivals like Saraswati Puja are celebrated with devotion and unity, bringing together students, teachers, and parents.</p>
        <div class="row">
            <div class="col-md-6 mb-3"><img src="{{ asset('assets/images/saras2.jpg') }}" class="img-fluid" alt="Puja 1"></div>
            <div class="col-md-6 mb-3"><img src="{{ asset('assets/images/saras2.jpg') }}" class="img-fluid" alt="Puja 2"></div>
            <div class="col-md-6 mb-3"><img src="{{ asset('assets/images/saras2.jpg') }}" class="img-fluid" alt="Puja 3"></div>
            <div class="col-md-6 mb-3"><img src="{{ asset('assets/images/saras2.jpg') }}" class="img-fluid" alt="Puja 4"></div>
        </div>
    </div>

    <!-- Activity: Food Festival -->
    <div class="card mb-4 shadow-sm p-4 beyondcard1">
        <h4>🍽️ Food Festival</h4>
        <p class="beyondp1">A vibrant day filled with delicious homemade dishes, snacks, and student-run stalls showcasing cultural variety.</p>
        <div class="row">
            <div class="col-md-6 mb-3"><img src="{{ asset('assets/images/foodfeast2.jpg') }}" class="img-fluid" alt="Food Fest 1"></div>
            <div class="col-md-6 mb-3"><img src="{{ asset('assets/images/foodfeast2.jpg') }}" class="img-fluid" alt="Food Fest 2"></div>
            <div class="col-md-6 mb-3"><img src="{{ asset('assets/images/foodfeast2.jpg') }}" class="img-fluid" alt="Food Fest 3"></div>
            <div class="col-md-6 mb-3"><img src="{{ asset('assets/images/foodfeast2.jpg') }}" class="img-fluid" alt="Food Fest 4"></div>
        </div>
    </div>

    <!-- Activity: Activation -->
    <div class="card mb-4 shadow-sm p-4 beyondcard1">
        <h4>🔬 Science Activation</h4>
        <p class="beyondp1">Students showcased science models, participated in quizzes, and explored innovative ideas during our science week activation.</p>
        <div class="row">
            <div class="col-md-6 mb-3"><img src="{{ asset('assets/images/whole1.jpg') }}" class="img-fluid" alt="Activation 1"></div>
            <div class="col-md-6 mb-3"><img src="{{ asset('assets/images/whole1.jpg') }}" class="img-fluid" alt="Activation 2"></div>
            <div class="col-md-6 mb-3"><img src="{{ asset('assets/images/whole1.jpg') }}" class="img-fluid" alt="Activation 3"></div>
            <div class="col-md-6 mb-3"><img src="{{ asset('assets/images/whole1.jpg') }}" class="img-fluid" alt="Activation 4"></div>
        </div>
    </div>

</div>

@endsection
