@extends('layouts.pages')

@section('title')
Testimonials
@endsection

      
<div class="hero inner-page" style="background-image: url('{{ asset('assets/images/hero_1_a.jpg') }}');">
        
        <div class="container">
          <div class="row align-items-end ">
            <div class="col-lg-5">

              <div class="intro">
                <h1><strong>testimonials</strong></h1>
                <div class="custom-breadcrumbs"><a href="index.html">Home</a> <span class="mx-2">/</span> <strong>testimonials</strong></div>
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
            <h2 class="section-heading"><strong>Testimonials</strong></h2>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>    
          </div>
        </div>
        <tbody>
          
          <div class="row">
          @foreach($testimonials as $testimonial)
            <div class="col-lg-4 mb-4">
                <div class="testimonial-2">
                  <blockquote class="mb-4">
                    <p>{{$testimonial->content}}</p>
                  </blockquote>
                  <div class="d-flex v-card align-items-center">
                    <img src="{{ asset('assets/images/'. $testimonial->image)  }}" alt="Image" class="img-fluid mr-3">
                    <div class="author-name">
                      <span class="d-block">{{$testimonial->name}}</span>
                      <span>{{$testimonial->position}}</span>
                    </div>
                  </div>
                </div>
            </div>
            </div>
            @endforeach
          </div>
          
        </tbody>
      </div>
    </div>
@endsection