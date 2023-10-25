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
                    <div class="car-section" data-car="kia-section">
                        <div class="row">
                            <div class="col-12 text-center my-5">
                                <img class="w-25 carLogo" src="images_avto/kia.png" alt="">
                            </div>
                        </div>
                        <div class="d-flex align-items-start">
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a href="{{route('car', ['id' => 1])}}" class="nav-link active w-100 mb-2" id="v-pills-cerato-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-cerato" role="tab" aria-controls="v-pills-cerato" aria-selected="true">
                                    <div class="d-flex align-items-center">
                                        <img src="images_avto/kia/cerato.png" alt="" style="width: 220px;" class="me-3 rounded">
                                        <span class="fw-bold fs-2">Cerato</span>
                                    </div>
                                </a>
                                <a href="{{route('car', ['id' => 2])}}" class="nav-link w-100 mb-2" id="v-pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                    <div class="d-flex align-items-center">
                                        <img src="images_avto/kia/k5.png" alt="" style="width: 220px;" class="me-3 rounded">
                                        <span class="fw-bold fs-2">K5</span>
                                    </div>
                                </a>
                                <a  href="{{route('car',3)}}" class="nav-link w-100 mb-2" id="v-pills-bongo-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-bongo" role="tab" aria-controls="v-pills-bongo"
                                    aria-selected="false">
                                    <div class="d-flex align-items-center">
                                        <img src="images_avto/kia/bongo.png" alt="" style="width: 220px;" class="me-3 rounded">
                                        <span class="fw-bold fs-2">Messages</span>
                                    </div>
                                </a>
                                <a  href="{{route('car',4)}}" class="nav-link w-100 mb-2" id="v-pills-k8-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-k8" role="tab" aria-controls="v-pills-k8"
                                    aria-selected="false">
                                    <div class="d-flex align-items-center">
                                        <img src="images_avto/kia/k8.png" alt="" style="width: 220px;" class="me-3 rounded">
                                        <span class="fw-bold fs-2">Settings</span>
                                    </div>
                                </a>
                                <a  href="{{route('car',5)}}" class="nav-link w-100 mb-2" id="v-pills-k9-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-k9" role="tab" aria-controls="v-pills-k9"
                                    aria-selected="false">
                                    <div class="d-flex align-items-center">
                                        <img src="images_avto/kia/k9.png" alt="" style="width: 220px;" class="me-3 rounded">
                                        <span class="fw-bold fs-2">k9</span>
                                    </div>
                                </a>
                                <a  href="{{route('car',6)}}" class="nav-link w-100 mb-2" id="v-pills-ev6-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-ev6" role="tab" aria-controls="v-pills-ev6"
                                    aria-selected="false">
                                    <div class="d-flex align-items-center">
                                        <img src="images_avto/kia/ev6.png" alt="" style="width: 220px;" class="me-3 rounded">
                                        <span class="fw-bold fs-2">ev6</span>
                                    </div>
                                </a>
                            </div>
                            <div class="tab-content w-75 text-center" id="v-pills-tabContent">
                                <h3 class="car_title mb-5">Avtomobil pozitsiyasini tanlang</h3>
                                @if($car_id == 1)
                                <div class="tab-pane fade show active text-center" id="v-pills-cerato" role="tabpanel"
                                    aria-labelledby="v-pills-cerato-tab" tabindex="0">
                                    <img src="images_avto/kia/cerato.png" alt="">
                                    <h2>Cerato</h2>
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            @php
                                                dump($car_id)
                                            @endphp
                                        </tbody>
                                    </table>
                                </div>
                                @endif

                                @if($car_id == 2)
                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"
                                        tabindex="0">
                                        <img src="images_avto/kia/k5.png" alt="">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">First</th>
                                                    <th scope="col">Last</th>
                                                </tr>
                                            </thead>
                                            @foreach ($cardetails as $item)
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>{{$item->position}}</td>
                                                    <td>{{$item->price}}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                </tr>

                                            </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                                @endif

                                <div class="tab-pane fade" id="v-pills-bongo" role="tabpanel" aria-labelledby="v-pills-bongo-tab"
                                    tabindex="0">Content for Messages bongo
                                </div>
                                <div class="tab-pane fade" id="v-pills-k8" role="tabpanel" aria-labelledby="v-pills-k8-tab"
                                    tabindex="0">Content for Settings k8
                                </div>
                                <div class="tab-pane fade" id="v-pills-k9" role="tabpanel" aria-labelledby="v-pills-k9-tab"
                                    tabindex="0">Content for Settings k9
                                </div>
                                <div class="tab-pane fade" id="v-pills-ev6" role="tabpanel" aria-labelledby="v-pills-ev6-tab"
                                    tabindex="0">Content for Settings ev6
                                </div>

                                <div>
                                    <a href="/"><button class="bn30">Boshqa avtomobil tanlash</button></a>
                                    <a href="slider.html"><button class="bn30">Bosh sahifaga</button></a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')
<script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
<script>
    // $(document).ready(function() {
    //     // Hide all car sections initially
    //     $('.car-section').hide();

    //     // Handle click events on car items in the carousel
    //     $('.car-item').on('click', function(e) {
    //         e.preventDefault();

    //         // Hide the carousel
    //         $('.featured-carousel').hide();

    //         // Get the car identifier from the clicked item
    //         var selectedCar = $(this).data('car');

    //         // Show the corresponding car section
    //         $('.car-section[data-car="' + selectedCar + '-section"]').show();
    //     });
    // });
    </script>
@endsection

