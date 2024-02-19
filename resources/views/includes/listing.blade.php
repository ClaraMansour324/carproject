<div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <h2 class="section-heading"><strong>Car Listings</strong></h2>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>    
          </div>
        </div>

        
        @foreach($cars as $car)
        <div class="row">
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="listing d-block  align-items-stretch">
            <div class="listing-img h-50 mr-4">
              <img src="{{ asset('assets/images/car_5.jpg') }}" alt="Image" class="img-fluid">
            </div>
            <div class="listing-contents h-50">
              <h3>Nissan Moco</h3>
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

          <div class="col-md-6 col-lg-4 mb-4">

            <div class="listing d-block  align-items-stretch">
              <div class="listing-img h-50 mr-4">
                <img src="{{ asset('assets/images/car_2.jpg') }}" alt="Image" class="img-fluid">
              </div>
              <div class="listing-contents h-50">
                <h3>Mazda LaPuta</h3>
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
        
          <div class="col-md-6 col-lg-4 mb-4">
              <div class="listing d-block  align-items-stretch">
                <div class="listing-img h-50 mr-4">
                  <img src="{{ asset('assets/images/'. $car->image) }}" alt="Image" class="img-fluid">
                </div>
                <div class="listing-contents h-50">
                  <h3>{{$car->title}}</h3>
                  <div class="rent-price">
                    <strong>{{$car->price}}</strong><span class="mx-1">/</span>day
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
                    <p>{{$car->content}}</p>
                    <p><a href="" class="btn btn-primary btn-sm">Rent Now</a></p>
                  </div>
                </div>

              </div>
            </div>

          </div>
        </div>
        @endforeach


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