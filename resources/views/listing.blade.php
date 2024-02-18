@extends('layouts.pages')

@section('title')
Listing
@endsection

      
<div class="hero inner-page" style="background-image: url('{{ asset('assets/images/hero_1_a.jpg') }}');">
        
        <div class="container">
          <div class="row align-items-end ">
            <div class="col-lg-5">

              <div class="intro">
                <h1><strong>Listing</strong></h1>
                <div class="custom-breadcrumbs"><a href="index.html">Home</a> <span class="mx-2">/</span> <strong>listing</strong></div>
              </div>

            </div>
          </div>
        </div>
</div>

@section('content')
<div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <h2 class="section-heading"><strong>Car Listings</strong></h2>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>    
          </div>
        </div>
        

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4">
            @foreach($cars as $car)
            <div class="listing d-block  align-items-stretch">
              <div class="listing-img h-50 mr-4">
                <img src="{{$car->image}}" alt="Image" class="img-fluid">
              </div>
              <div class="listing-contents h-50">
                <h3>Mitsubishi Pajero</h3>
                <div class="rent-price">
                  <strong>$389.00</strong><span class="mx-1">/</span>day
                </div>
                <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                  <div class="listing-feature pr-4">
                    <span class="caption">Luggage:</span>
                    <span class="number">8</span>
                  </div>
                  <div class="listing-feature pr-4">
                    <span class="caption">Doors:</span>
                    <span class="number">4</span>
                  </div>
                  <div class="listing-feature pr-4">
                    <span class="caption">Passenger:</span>
                    <span class="number">4</span>
                  </div>
                </div>
                <div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos eos at eum, voluptatem quibusdam.</p>
                  <p><a href="#" class="btn btn-primary btn-sm">Rent Now</a></p>
                </div>
              </div>

            </div>
          </div>

        </div>


        <div class="row">
          <div class="col-5">
            <div class="custom-pagination">
              <a href="#">1</a>
              <span>2</span>
              <a href="#">3</a>
              <a href="#">4</a>
              <a href="#">5</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <h2 class="section-heading"><strong>Testimonials</strong></h2>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>    
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2">
              <blockquote class="mb-4">
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
              </blockquote>
              <div class="d-flex v-card align-items-center">
                <img src="images/person_1.jpg" alt="Image" class="img-fluid mr-3">
                <div class="author-name">
                  <span class="d-block">Mike Fisher</span>
                  <span>Owner, Ford</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2">
              <blockquote class="mb-4">
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
              </blockquote>
              <div class="d-flex v-card align-items-center">
                <img src="images/person_2.jpg" alt="Image" class="img-fluid mr-3">
                <div class="author-name">
                  <span class="d-block">Jean Stanley</span>
                  <span>Traveler</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2">
              <blockquote class="mb-4">
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
              </blockquote>
              <div class="d-flex v-card align-items-center">
                <img src="images/person_3.jpg" alt="Image" class="img-fluid mr-3">
                <div class="author-name">
                  <span class="d-block">Katie Rose</span>
                  <span >Customer</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>




<!-- <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <h2 class="section-heading"><strong>Car Listings</strong></h2>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>    
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4">

            @foreach($cars as $car)
              <div class="listing d-block  align-items-stretch">
                <div class="listing-img h-20 mr-4">
                  <img src="{{ asset('assets/images/car_6.jpg') }}" alt="Image" class="img-fluid">
                </div>
                <div class="listing-contents h-10">
                  <h3>{{$car->title}}Mitsubishi Pajero</h3>
                  <div class="rent-price">
                    <strong>{{$car->title}} </strong><span class="mx-1">$/</span>day
                  </div>
                  <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                    <div class="listing-feature pr-4">
                      <span class="caption">Luggage:</span>
                      <span class="number">{{$car->luggage}}</span>
                    </div>
                    <div class="listing-feature pr-4">
                      <span class="caption">Doors:</span>
                      <span class="number">{{$car->doors}}</span>
                    </div>
                    <div class="listing-feature pr-4">
                      <span class="caption">Passenger:</span>
                      <span class="number">{{$car->passengers}}</span>
                    </div>
                  </div>
                  <div>
                    <p>{{$car->description}}</p>
                    <p><a href="#" class="btn btn-primary btn-sm">Rent Now</a></p>
                  </div>
              </div>
            @endforeach
          </div>
        </div>
          <div class="row">
            <div class="col-5">
              <div class="custom-pagination">
                <a href="{{ $cars->links() }}">1</a>
                <a href="{{ $cars->links() }}">2</a>
                <a href="{{ $cars->links() }}">3</a>
                <a href="{{ $cars->links() }}">4</a>
                <a href="{{ $cars->links() }}">5</a>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    <div class="site-section">
      <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <h2 class="section-heading"><strong>Testimonials</strong></h2>
          <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>    
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 mb-4 mb-lg-0">
          <div class="testimonial-2">
            <blockquote class="mb-4">
              <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
            </blockquote>
            <div class="d-flex v-card align-items-center">
              <img src="{{ asset('assets/images/person_1.jpg') }}" alt="Image" class="img-fluid mr-3">
              <div class="author-name">
                <span class="d-block">Mike Fisher</span>
                <span>Owner, Ford</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0">
          <div class="testimonial-2">
            <blockquote class="mb-4">
              <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
            </blockquote>
            <div class="d-flex v-card align-items-center">
              <img src="{{ asset('assets/images/person_2.jpg') }}" alt="Image" class="img-fluid mr-3">
              <div class="author-name">
                <span class="d-block">Jean Stanley</span>
                <span>Traveler</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0">
          <div class="testimonial-2">
            <blockquote class="mb-4">
              <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet 
                veniam. Ipsam, nam, voluptatum"</p>
            </blockquote>
            <div class="d-flex v-card align-items-center">
              <img src="{{ asset('assets/images/person_3.jpg')}}" alt="Image" class="img-fluid mr-3">
              <div class="author-name">
                <span class="d-block">Katie Rose</span>
                <span >Customer</span>
              </div>
            </div>
          </div>
        </div>
      </div>
</div> -->
@endsection