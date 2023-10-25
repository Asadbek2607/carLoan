@extends('layouts.app')
@section('content')
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
            </div>
            <div class="col-md-12">
                <div id="carSections">
                    <div class="featured-carousel owl-carousel">
                        <div class="item car-item" data-car="byd">
                            <a href="">
                                <div class="work">
                                    <div class="img d-flex align-items-center justify-content-center rounded">
                                            <img src="images_avto/byd.jpg" alt="BYD Image" class="img-fluid">
                                    </div>
                                    <div class="text pt-3 w-100 text-center">
                                        <h3><a href="">BYD</a></h3>
                                        <span>China</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item car-item" data-car="chevrolet">
                            <a href="">
                                <div class="work">
                                    <div class="img d-flex align-items-center justify-content-center rounded">
                                            <img src="images_avto/chevrolet.png" alt="Chevrolet Image" class="img-fluid">
                                    </div>
                                    <div class="text pt-3 w-100 text-center">
                                        <h3><a href="">Chevrolet</a></h3>
                                        <span>Uzbekistan</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item car-item" data-car="kia">
                            <a href="">
                                <div class="work">
                                    <div class="img d-flex align-items-center justify-content-center rounded">
                                            <img src="images_avto/kia.png" alt="Kia Image" class="img-fluid">
                                    </div>
                                    <div class="text pt-3 w-100 text-center">
                                        <h3><a href="">Kia</a></h3>
                                        <span>South Korea</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item car-item" data-car="chery">
                            <a href="">
                                <div class="work">
                                    <div class="img d-flex align-items-center justify-content-center rounded">
                                            <img src="images_avto/chery.png" alt="Chery Image" class="img-fluid">
                                    </div>
                                    <div class="text pt-3 w-100 text-center">
                                        <h3><a href="">Chery</a></h3>
                                        <span>China</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <div class="work car-item" data-car="lada">
                                    <div class="img d-flex align-items-center justify-content-center rounded">
                                            <img src="images_avto/lada.png" alt="Lada Image" class="img-fluid">
                                    </div>
                                    <div class="text pt-3 w-100 text-center">
                                        <h3><a href="">Lada</a></h3>
                                        <span>Russia</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item car-item" data-car="renault">
                            <a href="">
                                <div class="work">
                                    <div class="img d-flex align-items-center justify-content-center rounded">
                                            <img src="images_avto/renault.png" alt="Renault Image" class="img-fluid">
                                    </div>
                                    <div class="text pt-3 w-100 text-center">
                                        <h3><a href="">Renault</a></h3>
                                        <span>France</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @include('services.cars')

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')
<script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
<script>
    $(document).ready(function() {
        // Hide all car sections initially
        $('.car-section').hide();

        // Handle click events on car items in the carousel
        $('.car-item').on('click', function(e) {
            e.preventDefault();

            // Hide the carousel
            $('.featured-carousel').hide();

            // Get the car identifier from the clicked item
            var selectedCar = $(this).data('car');

            // Show the corresponding car section
            $('.car-section[data-car="' + selectedCar + '-section"]').show();
        });
    });
    </script>
@endsection

