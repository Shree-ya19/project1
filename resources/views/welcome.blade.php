@extends('frontend.layout.master')
@section('container')
<!----SLIDE START---------------------------------------------------------------------------->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('assets\images\golden abc.png') }}" class="d-block w-100" alt="...">
    </div>
    </div>
  </div>

<!----SLIDE END---------------------------------------------------------------------------->

<!----CONTAINER1 START---------------------------------------------------------------------------->
<div class="container container1">
     <h1 class="intro">About Our School</h1>
      <p class="intropara">Golden ABC School is a prestigious institution dedicated to providing quality education and nurturing young minds for a brighter future. With a strong emphasis on academic excellence, the school follows a well-structured curriculum designed to develop critical thinking, problem-solving skills, and creativity.

In addition to academics, Golden ABC School offers a wide range of extracurricular activities, including sports, music, arts, and leadership programs, ensuring the all-round development of students. The school organizes various events such as annual functions, cultural celebrations, and inter-school competitions to encourage talent and teamwork.

The dedicated faculty members focus on personalized learning, ensuring that each student receives the necessary guidance and support. Equipped with modern classrooms, a well-stocked library, and advanced science and computer labs, the school provides a stimulating environment for learning.

Golden ABC School also prioritizes character building, discipline, and moral values, shaping students into responsible global citizens. Through a blend of academics, co-curricular activities, and ethical learning, the school continues to inspire young learners to achieve success in their academic and personal journeys.</p>
<form action="{{ route('about_us') }}" method="GET">
    <button type="submit" class="aboutbtn">
        <span class="learn">Learn More</span>
    </button>
</form>

</div>
  </div>
</div>

<!----CONTAINER1 ENDS---------------------------------------------------------------------------->

<!--SLIDE START------------------------------------------------------------------------------>
<div class="container-fluid slidercont">
  <div class="row justify-content-center sliderrow">
    @foreach($features as $feature)
    <div class="col-md-3 d-flex justify-content-center">
      <div class="card1 sliderc">
        <img src="{{ $feature->image}}" class="card-img-top" alt="..." >
        <div class="card-body text-center">
          <a href="{{ route($feature->route_name) }}" class="arrow"><i class="{{$feature->icon}}  sliderbi"></i></a>
          <span class="foodf">{{$feature->title}}</span>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

<!--SLIDE END-------------------------------------------------------------------------------->

<!--WHY US CONTAINER START------------------------------------------------------------------------->
<div class="container whycontainer">
<div class="card whycard">
  <div class="card-header whyh">
    Why GOLDEN ABC ACADEMY BANKE HIGH SCHOOL?
  </div>
  <div class="card-body">
    <p class="card-text whyp">Golden ABC Academy Banke High School stands out as a premier institution committed to academic excellence, character development, and holistic growth. With a strong emphasis on quality education, experienced faculty, and a student-centered approach, the school nurtures young minds to become confident and responsible individuals. Its well-structured curriculum integrates modern teaching methodologies, extracurricular activities, and values-based learning, ensuring students excel both academically and socially. The school also fosters a supportive and inclusive environment, encouraging creativity, leadership, and innovation. By choosing Golden ABC Academy, students receive not just an education but a foundation for a successful future.</p>
    <!--<a href="#" class="btn btn-primary whybtn"><span class="whyp1">About Us</span></a>-->
  <div class="container subcont">
  <div class="row subrow">
    <div class="col-md-3 subp">
    <i class="bi bi-balloon laptop"></i> <br>
    <span class="laptopp">Spacious Playground </span>
    </div>
    <div class="col-md-3 subp">
    <i class="bi bi-fan laptop"></i><br><span class="laptopp">well-ventilated classrooms</span>
    </div>
    <div class="col-md-3 subp">
    <i class="bi bi-laptop laptop"></i><br><span class="laptopp">
    Excellent well-equipped Labs</span>
    </div>
    <div class="col-md-3 subp">
    <i class="bi bi-people-fill laptop"></i><br><span class="laptopp">Highly Qualified Teachers </span>
    </div>
  </div>
</div>
</div>
</div>
</div>
<!--WHY US CONTAINER ENDS-------------------------------------------------------------------------->
@endsection
