@extends('user.main.main')

@section('css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/user/user/css/all.min.css">
    <link rel="stylesheet" href="/user/user/css/bootstrap.min.css">
    <link rel="stylesheet" href="/user/user/css/style.css">
@endsection

@section('content')
    <div class="home pb-5">
        <div class="container-fluid container ">
            <div class="d-flex justify-content-center">
                <div class="info-help text-center">
                    <h4>Help & Support</h4>
                    <p class="mt-1 para-help  mx-auto">Find solutions, learn features, and get assistance with ease.</p>
                    <input type="text" placeholder="How can we help you?"
                        class="form-control rounded-3 mt-3 py-3 mx-auto">

                    <div class="row mt-4 help-center  mx-auto">
                        <div class="col-md-3 rounded-5 d-flex border me-2 mb-md-0 mb-3 ">
                            <img src="./assets/Rectangle 109.png" class="ms-3 me-2 mt-3" alt="">
                            <p class="mt-3">Sem vel urna faucibus pellentesque. </p>
                        </div>
                        <div class="col-md-4 rounded-5 d-flex border me-2 mb-md-0 mb-3">
                            <img src="./assets/Rectangle 109.png" class="ms-3 me-2 mt-3" alt="">
                            <p class="mt-3">Sem vel urna faucibus pellentesque. </p>
                        </div>
                        <div class="col-md-4 rounded-5 d-flex mt-3 mt-md-0 mt-lg-0 border me-2 mb-md-0 mb-3">
                            <img src="./assets/Rectangle 109.png" class="ms-3 me-2 mt-3" alt="">
                            <p class="mt-3">Sem vel urna faucibus pellentesque. </p>
                        </div>
                        <div class="mt-3 d-md-flex">
                            <div class="col-md-4 col-12 rounded-5 d-flex border  me-2 help  ">
                                <img src="./assets/Rectangle 109.png" class="ms-3 me-2 mt-3" alt="">
                                <p class="mt-3">Dolor sit amet consectel urna faucibus pellentesque. </p>
                            </div>
                            <div class="col-md-4 col-12 rounded-5 mt-3 mt-md-0 d-flex border help">
                                <img src="./assets/Rectangle 109.png" class="ms-3 me-2 mt-3" alt="">
                                <p class="mt-3">Dolor sit amet consectel urna faucibus pellentesque. </p>
                            </div>
                        </div>

                    </div>
                    <h5 class="mt-5 freq">Frequently Asked Questions</h5>
                    <div class="  mx-auto mt-4 rounded-5 accor">
                        <div class="accordion " id="accordionPanelsStayOpenExample">
                            <div class="accordion-item  mb-3">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                        Lorem ipsum dolor sit amet consectetur. Sem vel urna faucibus pellentesque. Urna
                                        varius quis augue viverra.
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor sit amet consectetur. Sem vel urna faucibus pellentesque. Urna
                                        varius quis augue viverra. Lorem ipsum dolor sit amet consectetur. Sem vel urna
                                        faucibus pellentesque. Urna varius quis augue viverra.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item  mb-3">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseTwo">
                                        Lorem ipsum dolor sit amet consectetur.
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor sit amet consectetur. Sem vel urna faucibus pellentesque. Urna
                                        varius quis augue viverra. Lorem ipsum dolor sit amet consectetur. Sem vel urna
                                        faucibus pellentesque. Urna varius quis augue viverra.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseThree">
                                        Lorem ipsum dolor sit amet consectetur.
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor sit amet consectetur. Sem vel urna faucibus pellentesque. Urna
                                        varius quis augue viverra. Lorem ipsum dolor sit amet consectetur. Sem vel urna
                                        faucibus pellentesque. Urna varius quis augue viverra.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>



        </div>
    </div>
@endsection

@section('js')
    <script src="/user/user/js/mian.js"></script>
    <script src="/user/user/js/bootstrap.bundle.min.js"></script>
@endsection
