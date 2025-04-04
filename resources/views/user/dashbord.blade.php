@extends('user.main.main')

@section('css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/user/user/css/all.min.css" />
    <link rel="stylesheet" href="/user/user/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/user/user/css/style.css" />
@endsection

@section('content')
    <div class="dash-main position-relative">
        <img src="/user/user/assets/Vector (5).png" class="position-absolute" alt="" />
        <img src="/user/user/assets/Group 1000008036.png" class="position-absolute img-star" alt="star">
        <div class="main-dashbordh1">
            <h1 class="">Welcome</h1>
            <h1 class="main-dashbord">{{ auth()->user()->fname . ' ' . auth()->user()->lname }}</h1>
        </div>
        <a href="{{ route('project.create') }}"><button class="button_Adduser position-absolute z-1"> Start a New
                Book</button></a>
        <a href=""><button class="button_Adduser2 position-absolute z-1">Resume Writing</button></a>

        <img src="/user/user/assets/Vector (21).png" class="position-absolute img_line_dash" alt="" />
        <div class="row z-2 position-absolute dash-row pb-5 pb-md-0 ">
            <div class="col-lg-4   dash-book ps-md-4  me-md-4 me-3 mt-5 mt-md-0  ">
                <h4>15</h4>
                <p>Active Books</p>
            </div>
            <div class="col-lg-4   dash-book ps-md-4  me-md-4 mt-5 mt-md-0">
                <h4>9</h4>
                <p>Draft Books</p>
            </div>
            <div class="col-lg-4 ms-2  dash-book ps-md-4    mt-5 mt-md-0">
                <h4>23</h4>
                <p>Completed Books</p>
            </div>
        </div>
        <img src="/user/user/assets/Group 1000008036.png" class="position-absolute img-star2" alt="star">
        <img src="/user/user/assets/Vector (20).png" class="position-absolute img_line" alt="" />
        <img src="/user/user/assets/Group (3).png" class="position-absolute img_line2" alt="" />
        <img src="/user/user/assets/Vector (4).png" class="position-absolute img_line2" alt="" />
        <img src="/user/user/assets/Vector (19).png" class="position-absolute img_line3" alt="" />
    </div>







    <div class="container">
        <div class="d-flex justify-content-between mt-4 mb-3">
            <h4 class="font-usermodel pt-1">Recent</h4>
            <div class="d-flex">
                <i class="fas fa-sort-amount-down me-4 pt-1"></i>
                <i class="fas fa-list me-4 pt-1"></i>
                <i class="fas fa-filter icon-recent me-4 pe-4 pt-1"></i>
                <h4 class="go-font pt-1">Go to Files</h4>
                <i class="fa-solid fa-chevron-down fa-2xs align-self-center ms-1 pb-2"></i>
            </div>

        </div>
        <div class="row">
            <div class="col-md-3 rounded-3">
                <img src="/user/user/assets/image (11).png" class="w-100" alt="book">
                <div class="d-flex justify-content-between mt-2">
                    <div class="btn-usermodel">
                        <button class="complete">14% Complete</button>
                    </div>
                    <div class="icon-usermodel">
                        <i class="fa-regular fa-star fa-lg"></i>
                        <i class="fa-solid fa-ellipsis-vertical fa-sm"></i>
                    </div>
                </div>
                <h3 class="main-usermodel mt-2">The Last Kilo: Willy Falcon and the Cocaine Empire That Seduced...</h3>
                <p class="para-usermodel">Last Edit 2 days ago</p>
            </div>
            <div class="col-md-3 rounded-3">
                <img src="/user/user/assets/image (12).png" class="w-100" alt="book">
                <div class="d-flex justify-content-between mt-2">
                    <div class="btn-usermodel">
                        <button class="complete">30% Complete</button>
                    </div>
                    <div class="icon-usermodel">
                        <i class="fa-regular fa-star fa-lg"></i>
                        <i class="fa-solid fa-ellipsis-vertical fa-sm"></i>
                    </div>
                </div>
                <h3 class="main-usermodel mt-2">The Last Kilo: Willy Falcon and the Cocaine Empire That Seduced...</h3>
                <p class="para-usermodel">Last Edit 2 days ago</p>
            </div>
            <div class="col-md-3 rounded-3">
                <img src="/user/user/assets/image (13).png" class="w-100" alt="book">
                <div class="d-flex justify-content-between mt-2">
                    <div class="btn-usermodel">
                        <button class="complete">25% Complete</button>
                    </div>
                    <div class="icon-usermodel">
                        <i class="fa-regular fa-star fa-lg"></i>
                        <i class="fa-solid fa-ellipsis-vertical fa-sm"></i>
                    </div>
                </div>
                <h3 class="main-usermodel mt-2">The Last Kilo: Willy Falcon and the Cocaine Empire That Seduced...</h3>
                <p class="para-usermodel">Last Edit 2 days ago</p>
            </div>
            <div class="col-md-3 rounded-3">
                <img src="/user/user/assets/image (14).png" class="w-100" alt="book">
                <div class="d-flex justify-content-between mt-2">
                    <div class="btn-usermodel">
                        <button class="complete">14% Complete</button>
                    </div>
                    <div class="icon-usermodel">
                        <i class="fa-regular fa-star fa-lg"></i>
                        <i class="fa-solid fa-ellipsis-vertical fa-sm"></i>
                    </div>
                </div>
                <h3 class="main-usermodel mt-2">The Last Kilo: Willy Falcon and the Cocaine Empire That Seduced...</h3>
                <p class="para-usermodel">Last Edit 2 days ago</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 rounded-3">
                <img src="/user/user/assets/image (11).png" class="w-100" alt="book">
                <div class="d-flex justify-content-between mt-2">
                    <div class="btn-usermodel">
                        <button class="complete">14% Complete</button>
                    </div>
                    <div class="icon-usermodel">
                        <i class="fa-regular fa-star fa-lg"></i>
                        <i class="fa-solid fa-ellipsis-vertical fa-sm"></i>
                    </div>
                </div>
                <h3 class="main-usermodel mt-2">The Last Kilo: Willy Falcon and the Cocaine Empire That Seduced...</h3>
                <p class="para-usermodel">Last Edit 2 days ago</p>
            </div>
            <div class="col-md-3 rounded-3">
                <img src="/user/user/assets/image (12).png" class="w-100" alt="book">
                <div class="d-flex justify-content-between mt-2">
                    <div class="btn-usermodel">
                        <button class="complete">14% Complete</button>
                    </div>
                    <div class="icon-usermodel">
                        <i class="fa-regular fa-star fa-lg"></i>
                        <i class="fa-solid fa-ellipsis-vertical fa-sm"></i>
                    </div>
                </div>
                <h3 class="main-usermodel mt-2">The Last Kilo: Willy Falcon and the Cocaine Empire That Seduced...</h3>
                <p class="para-usermodel">Last Edit 2 days ago</p>
            </div>
            <div class="col-md-3 rounded-3">
                <img src="/user/user/assets/image (13).png" class="w-100" alt="book">
                <div class="d-flex justify-content-between mt-2">
                    <div class="btn-usermodel">
                        <button class="complete">14% Complete</button>
                    </div>
                    <div class="icon-usermodel">
                        <i class="fa-regular fa-star fa-lg"></i>
                        <i class="fa-solid fa-ellipsis-vertical fa-sm"></i>
                    </div>
                </div>
                <h3 class="main-usermodel mt-2">The Last Kilo: Willy Falcon and the Cocaine Empire That Seduced...</h3>
                <p class="para-usermodel">Last Edit 2 days ago</p>
            </div>
            <div class="col-md-3 rounded-3">
                <img src="/user/user/assets/image (14).png" class="w-100" alt="book">
                <div class="d-flex justify-content-between mt-2">
                    <div class="btn-usermodel">
                        <button class="complete">14% Complete</button>
                    </div>
                    <div class="icon-usermodel">
                        <i class="fa-regular fa-star fa-lg"></i>
                        <i class="fa-solid fa-ellipsis-vertical fa-sm"></i>
                    </div>
                </div>
                <h3 class="main-usermodel mt-2">The Last Kilo: Willy Falcon and the Cocaine Empire That Seduced...</h3>
                <p class="para-usermodel">Last Edit 2 days ago</p>
            </div>
        </div>

    </div>
@endsection

@section('js')
    <script src="/user/user/js/mian.js"></script>
@endsection
