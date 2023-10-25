<style>
    .nav-link {
        color: #C39114;
    }

    .nav-pills .nav-link.active {
        background-color: #54608D;
        color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    .carLogo {
        animation: zoom 1.5s infinite alternate;
    }

    @keyframes zoom {
        0% {
            transform: scale(1);
        }

        100% {
            transform: scale(1.1);
        }
    }

    .car_title {
        color: #0A66C2;
        font-family: 'Trocchi', serif;
        font-size: 75px;
        font-weight: normal;
        line-height: 48px;
        margin: 0;
    }

    .bn30 {
        border: 5em;
        cursor: pointer;
        outline: none;
        font-size: 20px;
        -webkit-transform: translate(0);
        transform: translate(0);
        background-image: linear-gradient(45deg, #4568dc, #b06ab3);
        padding: 0.8em 3em;
        border-radius: 60px;
        box-shadow: 1px 1px 10px rgba(255, 255, 255, 0.438);
        -webkit-transition: box-shadow 0.25s;
        transition: box-shadow 0.25s;
        color: white;
    }

    .bn30 .text {
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-image: linear-gradient(45deg, #4568dc, #b06ab3);
    }

    .bn30:after {
        content: "";
        border-radius: 200px;
        position: absolute;
        margin: 7px;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        z-index: -1;
        background: rgba(0, 0, 0, 0.5);
    }

    .bn30:hover {
        background-image: linear-gradient(-45deg, #4568dc, #b06ab3);
        box-shadow: 0 12px 24px rgba(128, 128, 128, 0.1);
    }

    .bn30:hover .text {
        background-image: linear-gradient(-45deg, #4568dc, #b06ab3);
    }
</style>



{{-- <div class="car-section" data-car="lada-section">
    <div class="row">
        <div class="col-12 text-center my-5">
            <img class="w-25 carLogo" src="images_avto/lada.png" alt="">
        </div>
    </div>
    <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active w-100 mb-2" id="v-pills-largus-tab" data-bs-toggle="pill"
                data-bs-target="#v-pills-largus" role="tab" aria-controls="v-pills-largus" aria-selected="true">
                <div class="d-flex align-items-center">
                    <img src="images_avto/lada/largus.png" alt="" style="width: 220px;" class="me-3 rounded">
                    <span class="fw-bold fs-2">largus</span>
                </div>
            </a>
            <a class="nav-link w-100 mb-2" id="v-pills-largus_7s-tab" data-bs-toggle="pill"
                data-bs-target="#v-pills-largus_7s" role="tab" aria-controls="v-pills-largus_7s" aria-selected="false">
                <div class="d-flex align-items-center">
                    <img src="images_avto/lada/largus_7s.png" alt="" style="width: 220px;" class="me-3 rounded">
                    <span class="fw-bold fs-2">largus_7s</span>
                </div>
            </a>
            <a class="nav-link w-100 mb-2" id="v-pills-vesta-tab" data-bs-toggle="pill"
                data-bs-target="#v-pills-vesta" role="tab" aria-controls="v-pills-vesta"
                aria-selected="false">
                <div class="d-flex align-items-center">
                    <img src="images_avto/lada/vesta.png" alt="" style="width: 220px;" class="me-3 rounded">
                    <span class="fw-bold fs-2">vesta</span>
                </div>
            </a>
            <a class="nav-link w-100 mb-2" id="v-pills-vesta_cross-tab" data-bs-toggle="pill"
                data-bs-target="#v-pills-vesta_cross" role="tab" aria-controls="v-pills-vesta_cross"
                aria-selected="false">
                <div class="d-flex align-items-center">
                    <img src="images_avto/lada/vesta_cross.png" alt="" style="width: 220px;" class="me-3 rounded">
                    <span class="fw-bold fs-2">vesta_cross</span>
                </div>
            </a>
            <a class="nav-link w-100 mb-2" id="v-pills-xray_cross-tab" data-bs-toggle="pill"
                data-bs-target="#v-pills-xray_cross" role="tab" aria-controls="v-pills-xray_cross"
                aria-selected="false">
                <div class="d-flex align-items-center">
                    <img src="images_avto/lada/xray_cross.png" alt="" style="width: 220px;" class="me-3 rounded">
                    <span class="fw-bold fs-2">xray_cross</span>
                </div>
            </a>
        </div>
        <div class="tab-content w-75 text-center" id="v-pills-tabContent">
            <h3 class="car_title mb-5">Avtomobil pozitsiyasini tanlang</h3>
            <div class="tab-pane fade show active text-center" id="v-pills-largus" role="tabpanel"
                aria-labelledby="v-pills-largus-tab" tabindex="0">
                <img src="images_avto/lada/largus.png" alt="" class="width:550px">
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

                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-largus_7s" role="tabpanel" aria-labelledby="v-pills-largus_7s-tab"
                tabindex="0">
                <img src="images_avto/lada/largus_7s.png" alt="">
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

                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-vesta" role="tabpanel" aria-labelledby="v-pills-vesta-tab"
                tabindex="0"><img src="images_avto/lada/vesta.png" alt="">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">vesta_cross</th>
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

                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-vesta_cross" role="tabpanel" aria-labelledby="v-pills-vesta_cross-tab"
                tabindex="0">Content for Settings vesta_cross
            </div>
            <div class="tab-pane fade" id="v-pills-xray_cross" role="tabpanel" aria-labelledby="v-pills-xray_cross-tab"
                tabindex="0">Content for Settings xray_cross
            </div>

            <div>
                <a href="/"><button class="bn30">Boshqa avtomobil tanlash</button></a>
                <a href="/"><button class="bn30">Bosh sahifaga</button></a>
            </div>

        </div>
    </div>
</div> --}}

{{-- <div class="car-section" data-car="chevrolet-section">
    <div class="row">
        <div class="col-12 text-center my-5">
            <img class="w-25 carLogo" src="images_avto/chevrolet.png" alt="">
        </div>
    </div>
    <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link active w-100 mb-2" id="v-pills-home-tab" data-bs-toggle="pill"
                data-bs-target="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                <div class="d-flex align-items-center">
                    <img src="images_avto/lada/largus.png" alt="" style="width: 220px;" class="me-3 rounded">
                    <span class="fw-bold fs-2">largus</span>
                </div>
            </button>
            <button class="nav-link w-100 mb-2" id="v-pills-profile-tab" data-bs-toggle="pill"
                data-bs-target="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                <div class="d-flex align-items-center">
                    <img src="images_avto/lada/largus_7s.png" alt="" style="width: 220px;" class="me-3 rounded">
                    <span class="fw-bold fs-2">largus_7s</span>
                </div>
            </button>
            <button class="nav-link w-100 mb-2" id="v-pills-messages-tab" data-bs-toggle="pill"
                data-bs-target="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                aria-selected="false">
                <div class="d-flex align-items-center">
                    <img src="images_avto/lada/vesta.png" alt="" style="width: 220px;" class="me-3 rounded">
                    <span class="fw-bold fs-2">vesta</span>
                </div>
            </button>
            <button class="nav-link w-100 mb-2" id="v-pills-settings-tab" data-bs-toggle="pill"
                data-bs-target="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                aria-selected="false">
                <div class="d-flex align-items-center">
                    <img src="images_avto/lada/vesta_cross.png" alt="" style="width: 220px;" class="me-3 rounded">
                    <span class="fw-bold fs-2">vesta_cross</span>
                </div>
            </button>
            <button class="nav-link w-100 mb-2" id="v-pills-settings-tab" data-bs-toggle="pill"
                data-bs-target="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                aria-selected="false">
                <div class="d-flex align-items-center">
                    <img src="images_avto/lada/xray_cross.png" alt="" style="width: 220px;" class="me-3 rounded">
                    <span class="fw-bold fs-2">xray_cross</span>
                </div>
            </button>
        </div>
        <div class="tab-content w-75 text-center" id="v-pills-tabContent">
            <h3 class="car_title mb-5">Avtomobil pozitsiyasini tanlang</h3>
            <div class="tab-pane fade show active text-center" id="v-pills-home" role="tabpanel"
                aria-labelledby="v-pills-home-tab" tabindex="0">
                <img src="images_avto/lada/largus.png" alt="">
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

                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"
                tabindex="0">
                <img src="images_avto/lada/largus_7s.png" alt="">
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

                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab"
                tabindex="0"><img src="images_avto/lada/vesta.png" alt="">
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

                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"
                tabindex="0">Content for Settings
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"
                tabindex="0">Content for Settings
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"
                tabindex="0">Content for Settings
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"
                tabindex="0">Content for Settings
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"
                tabindex="0">Content for Settings</div>

            <div>
                <a href="/"><button class="bn30">Boshqa avtomobil tanlash</button></a>
                <a href="/"><button class="bn30">Bosh sahifaga</button></a>
            </div>

        </div>
    </div>
</div>

<div class="car-section" data-car="chery-section">
    <div class="row">
        <div class="col-12 text-center my-5">
            <img class="w-25 carLogo" src="images_avto/chery.png" alt="">
        </div>
    </div>
    <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link active w-100 mb-2" id="v-pills-home-tab" data-bs-toggle="pill"
                data-bs-target="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                <div class="d-flex align-items-center">
                    <img src="images_avto/lada/largus.png" alt="" style="width: 220px;" class="me-3 rounded">
                    <span class="fw-bold fs-2">largus</span>
                </div>
            </button>
            <button class="nav-link w-100 mb-2" id="v-pills-profile-tab" data-bs-toggle="pill"
                data-bs-target="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                <div class="d-flex align-items-center">
                    <img src="images_avto/lada/largus_7s.png" alt="" style="width: 220px;" class="me-3 rounded">
                    <span class="fw-bold fs-2">largus_7s</span>
                </div>
            </button>
            <button class="nav-link w-100 mb-2" id="v-pills-messages-tab" data-bs-toggle="pill"
                data-bs-target="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                aria-selected="false">
                <div class="d-flex align-items-center">
                    <img src="images_avto/lada/vesta.png" alt="" style="width: 220px;" class="me-3 rounded">
                    <span class="fw-bold fs-2">vesta</span>
                </div>
            </button>
            <button class="nav-link w-100 mb-2" id="v-pills-settings-tab" data-bs-toggle="pill"
                data-bs-target="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                aria-selected="false">
                <div class="d-flex align-items-center">
                    <img src="images_avto/lada/vesta_cross.png" alt="" style="width: 220px;" class="me-3 rounded">
                    <span class="fw-bold fs-2">vesta_cross</span>
                </div>
            </button>
            <button class="nav-link w-100 mb-2" id="v-pills-settings-tab" data-bs-toggle="pill"
                data-bs-target="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                aria-selected="false">
                <div class="d-flex align-items-center">
                    <img src="images_avto/lada/xray_cross.png" alt="" style="width: 220px;" class="me-3 rounded">
                    <span class="fw-bold fs-2">xray_cross</span>
                </div>
            </button>
        </div>
        <div class="tab-content w-75 text-center" id="v-pills-tabContent">
            <h3 class="car_title mb-5">Avtomobil pozitsiyasini tanlang</h3>
            <div class="tab-pane fade show active text-center" id="v-pills-home" role="tabpanel"
                aria-labelledby="v-pills-home-tab" tabindex="0">
                <img src="images_avto/lada/largus.png" alt="">
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

                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"
                tabindex="0">
                <img src="images_avto/lada/largus_7s.png" alt="">
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

                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab"
                tabindex="0"><img src="images_avto/lada/vesta.png" alt="">
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

                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"
                tabindex="0">Content for Settings
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"
                tabindex="0">Content for Settings
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"
                tabindex="0">Content for Settings
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"
                tabindex="0">Content for Settings
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"
                tabindex="0">Content for Settings</div>

            <div>
                <a href="/"><button class="bn30">Boshqa avtomobil tanlash</button></a>
                <a href="/"><button class="bn30">Bosh sahifaga</button></a>
            </div>

        </div>
    </div>
</div>

<div class="car-section" data-car="renault-section">
    <div class="row">
        <div class="col-12 text-center my-5">
            <img class="w-25 carLogo" src="images_avto/renault.png" alt="">
        </div>
    </div>
    <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link active w-100 mb-2" id="v-pills-home-tab" data-bs-toggle="pill"
                data-bs-target="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                <div class="d-flex align-items-center">
                    <img src="images_avto/lada/largus.png" alt="" style="width: 220px;" class="me-3 rounded">
                    <span class="fw-bold fs-2">largus</span>
                </div>
            </button>
            <button class="nav-link w-100 mb-2" id="v-pills-profile-tab" data-bs-toggle="pill"
                data-bs-target="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                <div class="d-flex align-items-center">
                    <img src="images_avto/lada/largus_7s.png" alt="" style="width: 220px;" class="me-3 rounded">
                    <span class="fw-bold fs-2">largus_7s</span>
                </div>
            </button>
            <button class="nav-link w-100 mb-2" id="v-pills-messages-tab" data-bs-toggle="pill"
                data-bs-target="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                aria-selected="false">
                <div class="d-flex align-items-center">
                    <img src="images_avto/lada/vesta.png" alt="" style="width: 220px;" class="me-3 rounded">
                    <span class="fw-bold fs-2">vesta</span>
                </div>
            </button>
            <button class="nav-link w-100 mb-2" id="v-pills-settings-tab" data-bs-toggle="pill"
                data-bs-target="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                aria-selected="false">
                <div class="d-flex align-items-center">
                    <img src="images_avto/lada/vesta_cross.png" alt="" style="width: 220px;" class="me-3 rounded">
                    <span class="fw-bold fs-2">vesta_cross</span>
                </div>
            </button>
            <button class="nav-link w-100 mb-2" id="v-pills-settings-tab" data-bs-toggle="pill"
                data-bs-target="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                aria-selected="false">
                <div class="d-flex align-items-center">
                    <img src="images_avto/lada/xray_cross.png" alt="" style="width: 220px;" class="me-3 rounded">
                    <span class="fw-bold fs-2">xray_cross</span>
                </div>
            </button>
        </div>
        <div class="tab-content w-75 text-center" id="v-pills-tabContent">
            <h3 class="car_title mb-5">Avtomobil pozitsiyasini tanlang</h3>
            <div class="tab-pane fade show active text-center" id="v-pills-home" role="tabpanel"
                aria-labelledby="v-pills-home-tab" tabindex="0">
                <img src="images_avto/lada/largus.png" alt="">
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

                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"
                tabindex="0">
                <img src="images_avto/lada/largus_7s.png" alt="">
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

                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab"
                tabindex="0"><img src="images_avto/lada/vesta.png" alt="">
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

                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"
                tabindex="0">Content for Settings
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"
                tabindex="0">Content for Settings
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"
                tabindex="0">Content for Settings
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"
                tabindex="0">Content for Settings
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"
                tabindex="0">Content for Settings</div>

            <div>
                <a href="/"><button class="bn30">Boshqa avtomobil tanlash</button></a>
                <a href="/"><button class="bn30">Bosh sahifaga</button></a>
            </div>

        </div>
    </div>
</div> --}}
