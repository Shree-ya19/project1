@extends('frontend.layout.master')
@section('container')

<div class="container-fluid p-4 mt-5 mb-5 beyondcont">
    <h2 class="text-center mb-4 beyond">🌟 Beyond Academics</h2>
    <p class="text-center mb-5 beyondp1">We believe in the holistic development of students. Explore our engaging co-curricular activities below!</p>

    <div class="accordion" id="activitiesAccordion">

        <!-- Sports Week -->
        <div class="accordion-item mb-3">
            <h2 class="accordion-header " id="headingSports">
                <button class="accordion-button accordion1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSports" aria-expanded="true" aria-controls="collapseSports">
                    🏅 Sports Week
                </button>
            </h2>
            <div id="collapseSports" class="accordion-collapse collapse show" aria-labelledby="headingSports" data-bs-parent="#activitiesAccordion">
                <div class="accordion-body">
                    <p>Our annual sports week brings energy and excitement to the school with events like races, tug of war, football, and fun games!</p>
                    <div class="row">
                        @for($i = 0; $i < 4; $i++)
                            <div class="col-md-6 mb-3">
                                <img src="{{ asset('assets/images/whole7.jpg') }}" class="img-fluid rounded" alt="Sports Week">
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>

        <!-- Field Visit -->
        <div class="accordion-item mb-3">
            <h2 class="accordion-header" id="headingField">
                <button class="accordion-button collapsed accordion1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseField" aria-expanded="false" aria-controls="collapseField">
                    🌿 Field Visits
                </button>
            </h2>
            <div id="collapseField" class="accordion-collapse collapse" aria-labelledby="headingField" data-bs-parent="#activitiesAccordion">
                <div class="accordion-body">
                    <p>Students get real-world exposure through educational field visits to farms, museums, and local industries.</p>
                    <div class="row">
                        @for($i = 0; $i < 4; $i++)
                            <div class="col-md-6 mb-3">
                                <img src="{{ asset('assets/images/sci.jpg') }}" class="img-fluid rounded" alt="Field Visit">
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>

        <!-- Add similar blocks for Rally, Puja, Food Festival, Activation -->

        <!-- Rally -->
        <div class="accordion-item mb-3">
            <h2 class="accordion-header" id="headingRally">
                <button class="accordion-button collapsed accordion1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRally" aria-expanded="false" aria-controls="collapseRally">
                    🚶 Rallies
                </button>
            </h2>
            <div id="collapseRally" class="accordion-collapse collapse" aria-labelledby="headingRally" data-bs-parent="#activitiesAccordion">
                <div class="accordion-body">
                    <p>We actively engage in community awareness rallies focused on environmental conservation, education, and health awareness.</p>
                    <div class="row">
                        @for($i = 0; $i < 4; $i++)
                            <div class="col-md-6 mb-3">
                                <img src="{{ asset('assets/images/assembly.jpg') }}" class="img-fluid rounded" alt="Rally">
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>

        <!-- Saraswati Puja -->
        <div class="accordion-item mb-3">
            <h2 class="accordion-header" id="headingPuja">
                <button class="accordion-button collapsed accordion1" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePuja" aria-expanded="false" aria-controls="collapsePuja">
                    🪔 Saraswati Pooja
                </button>
            </h2>
            <div id="collapsePuja" class="accordion-collapse collapse" aria-labelledby="headingPuja" data-bs-parent="#activitiesAccordion">
                <div class="accordion-body">
                    <p>Festivals like Saraswati Puja are celebrated with devotion and unity, bringing together students, teachers, and parents.</p>
                    <div class="row">
                        @for($i = 0; $i < 4; $i++)
                            <div class="col-md-6 mb-3">
                                <img src="{{ asset('assets/images/saras2.jpg') }}" class="img-fluid rounded" alt="Puja">
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>

        <!-- Food Festival -->
        <div class="accordion-item mb-3">
            <h2 class="accordion-header" id="headingFood">
                <button class="accordion-button collapsed accordion1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFood" aria-expanded="false" aria-controls="collapseFood">
                    🍽️ Food Festival
                </button>
            </h2>
            <div id="collapseFood" class="accordion-collapse collapse" aria-labelledby="headingFood" data-bs-parent="#activitiesAccordion">
                <div class="accordion-body">
                    <p>A vibrant day filled with delicious homemade dishes, snacks, and student-run stalls showcasing cultural variety.</p>
                    <div class="row">
                        @for($i = 0; $i < 4; $i++)
                            <div class="col-md-6 mb-3">
                                <img src="{{ asset('assets/images/foodfeast2.jpg') }}" class="img-fluid rounded" alt="Food Festival">
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>

        <!-- Science Activation -->
        <div class="accordion-item mb-3">
            <h2 class="accordion-header" id="headingScience">
                <button class="accordion-button collapsed accordion1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseScience" aria-expanded="false" aria-controls="collapseScience">
                    🔬 Science Activation
                </button>
            </h2>
            <div id="collapseScience" class="accordion-collapse collapse" aria-labelledby="headingScience" data-bs-parent="#activitiesAccordion">
                <div class="accordion-body">
                    <p>Students showcased science models, participated in quizzes, and explored innovative ideas during our science week activation.</p>
                    <div class="row">
                        @for($i = 0; $i < 4; $i++)
                            <div class="col-md-6 mb-3">
                                <img src="{{ asset('assets/images/whole1.jpg') }}" class="img-fluid rounded" alt="Science Activation">
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
