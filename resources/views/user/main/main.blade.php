<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create Book</title>
    @yield('css')
</head>

<body>
    <div class="container-fluid">

        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-1 d-none d-md-block sidebar shadow text-center position-relative pt-2">
                <a href="/user/user/dashbord.html"><img src="/user/user/assets/Group 1000007883.png" class=""
                        alt="Dashboard" />
                    <p class="mb-3">Dashboard</p>
                </a>
                <a href="{{ route('project.show') }}">
                    <img src="/user/user/assets/Vector (13).png" alt="my project" />
                    <p class="mb-3">My Projects</p>
                </a>
                <a href="./editebook.html">
                    <img src="/user/user/assets/Vector (14).png" alt="Book Editor Access" />
                    <p class="mb-3">Book Editor Access</p>
                </a>
                <a href="./profilemangment.html">
                    <img src="/user/user/assets/Group (4).png" alt="Content Management" />
                    <p class="mb-3">Content Management</p>
                </a>
                <a href="./createchapter.html">
                    <img src="/user/user/assets/Vector (15).png" alt="File Upload and Download" />
                    <p class="mb-3">File Upload and Download</p>
                </a>
                <a href="./editor.html">
                    <img src="/user/user/assets/Group (5).png" alt="Subscription Information" />
                    <p class="mb-3">Subscription Information</p>
                </a>
                <a href="">
                    <img src="/user/user/assets/Vector (16).png" alt="Notifications" />
                    <p class="mb-3">Notifications</p>
                </a>
                <a href="./help.html">
                    <img src="/user/user/assets/Group (6).png" alt="Help Center" />
                    <p class="mb-3">Help Center</p>
                </a>
                <a href="./myfile.html">
                    <img src="/user/user/assets/Vector (17).png" alt="Settings" />
                    <p class="mb-3">Settings</p>
                </a>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <a href="" onclick="preventDefault">
                        <img src="/user/user/assets/Group 1000007891.png" alt="Logout" />


                        <p class="mb-3">Logout</p>
                    </a>
                </form>
            </nav>

            <!-- Main Content ms-sm-auto px-md-4 -->
            <main class="col-md-11">
                <!-- Header -->
                <div class="d-flex justify-content-between overflow-hidden border-bottom nav-create py-1">
                    <div class="d-md-flex d-none mb-5 align-self-center create ms-2 position-absolute">
                        <a href="./dashbord.html" class="d-flex">
                            <img src="/user/user/assets/Group 1000007853.png" class="ms-md-3 mb-md-1" alt="logo" />
                            <h4 class="text-center mt-md-1 me-5 me-md-5 ms-md-2">CreateBook</h4>
                        </a>

                    </div>
                    <div class=" info_nav d-flex align-self-center mt-3 ms-lg-3 ms-md-5 ms-1">
                        <a href="">
                            <p class="ms-2 ms-md-5  ms-lg-5 font-weight">About Us</p>
                        </a>
                        <a href="">
                            <p class="ms-4 font-weight">Plan & Pricing</p>
                        </a>
                    </div>

                    <div class="btn_nav d-flex justify-content-between">
                        <div class="button-container d-flex align-self-center me-2 ms-sm-5">
                            <button class="upgrade-button w-50 me-3">
                                Upgrade to<span class="p-md-1 ms-1">PRO</span>
                            </button>
                            <input type="text" placeholder="Search"
                                class="form-control ps-md-4 position-relative align-self-center" />
                        </div>

                        <div class="ms-4 d-flex me-3">
                            <i class="fa-regular img_nav fa-circle-question me-2 align-self-center ps-3"></i>
                            <div id="bell-icon" class="align-self-center">
                                <i class="fa-regular fa-bell me-2  ms-md-1">
                                </i>
                                <div class="d-none" id="notific">
                                    <div class="notification rounded-4 position-absolute shadow">
                                        <div class="info-notification d-flex border-bottom p-3 justify-content-between">
                                            <h4>Notifications</h4>
                                            <h4>Mark all as read</h4>
                                        </div>
                                        <div class="border-bottom p-3 pb-0">

                                            <div class="personal-notification d-flex ">
                                                <img src="/user/user/assets/Group 1000008052.png" class="me-2"
                                                    alt="">
                                                <h5>New features coming! Scheduled downtime on 28 December. Save your
                                                    work.</h5>
                                                <i class="fa-regular fa-circle fa-xs mt-1 ms-2"></i>
                                            </div>
                                            <div class="d-flex ms-5 ps-3 icon">
                                                <i class="fa-solid fa-calendar-week fa-lg me-1 mt-2 "></i>
                                                <p class="align-items-center">5:20, 16 Dec</p>
                                            </div>
                                        </div>
                                        <div class="border-bottom p-3 pb-0">

                                            <div class="personal-notification d-flex ">
                                                <img src="/user/user/assets/Group 1000008051.png" class="me-2"
                                                    alt="">
                                                <h5>Incomplete projects have upcoming deadlines—take action now!</h5>
                                                <i class="fa-regular fa-circle fa-xs mt-1 ms-2"></i>
                                            </div>
                                            <div class="d-flex ms-5 ps-3 icon">
                                                <i class="fa-solid fa-calendar-week fa-lg me-1 mt-2 "></i>
                                                <p class="align-items-center">5:20, 16 Dec</p>
                                            </div>
                                        </div>
                                        <div class="border-bottom p-3 pb-0">

                                            <div class="personal-notification d-flex ">
                                                <img src="/user/user/assets/Group 1000008050.png" class="me-2"
                                                    alt="">
                                                <h5>New features coming! Scheduled downtime on 28 December. Save your
                                                    work.</h5>
                                                <i class="fa-regular fa-circle fa-xs mt-1 ms-2"></i>
                                            </div>
                                            <div class="d-flex ms-5 ps-3 icon">
                                                <i class="fa-solid fa-calendar-week fa-lg me-1 mt-2 "></i>
                                                <p class="align-items-center">5:20, 16 Dec</p>
                                            </div>
                                        </div>
                                        <div class="border-bottom p-3 pb-0">

                                            <div class="personal-notification d-flex ">
                                                <img src="/user/user/assets/Group 1000008049.png" class="me-2"
                                                    alt="">
                                                <h5>Incomplete projects have upcoming deadlines—take action now!</h5>
                                                <i class="fa-regular fa-circle fa-xs mt-1 ms-2"></i>
                                            </div>
                                            <div class="d-flex ms-5 ps-3 icon">
                                                <i class="fa-solid fa-calendar-week fa-lg me-1 mt-2"></i>
                                                <p class="align-items-center">5:20, 16 Dec</p>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>


                            <div id="person-icon" class="align-self-center d-flex">
                                <img src="/user/user/assets/image (10).png" class="align-self-center ms-md-2"
                                    alt="user" />
                                <i class="fa-solid fa-chevron-down fa-2xs align-self-center text-muted ms-1"></i>
                                <div class="d-none" id="notific-person">
                                    <div class="notification sign rounded-4  position-absolute shadow">
                                        <div class="d-flex justify-content-center text-center border-bottom">
                                            <div class="personal p-4 pb-1 ">
                                                <img src="/user/user/assets/image (16).png" alt="">
                                                <h3>{{ auth()->user()->fname . ' ' . auth()->user()->lname }}</h3>

                                                <p>{{ auth()->user()->email }}</p>

                                                <button class="upgrade-button me-3 mb-2 py-2"> Upgrade to<span
                                                        class="p-md-1 ms-1">PRO</span></button>
                                            </div>
                                        </div>

                                        <div class="info-personl border-bottom  p-4">
                                            <h4 class="mb-3">My Profile</h4>
                                            <h4 class="mb-3">My Projects</h4>
                                            <h4 class="mb-3">Favorites</h4>
                                            <h4 class="mb-3">Manage Membership</h4>
                                            <h4>Help</h4>
                                        </div>

                                        <h4 class=" p-4 pb-3">Sign Out</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                @yield('content')

            </main>
        </div>
    </div>


    @yield('js')
</body>

</html>
