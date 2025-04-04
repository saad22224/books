<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Create Book</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/admin/css/all.min.css">
    <link rel="stylesheet" href="/admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="/admin/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            {{-- <nav class="col-md-1 d-none d-md-block  sidebar shadow text-center position-relative  pt-2">
                <a href="/admin/index.html"><img src="/admin/assets/Group 1000007883.png" class=""
                        alt="Dashboard">
                    <p class="mb-4"> Dashboard</p>
                </a>
                <a href="/admin/mangment.html">
                    <img src="/admin/assets/Group 1000008235.png" alt="user managment">
                    <p class="mb-4">User Management</p>
                </a>
                <a href="/admin/subscriptionplan.html" class="active" target="_self">
                    <img src="/admin/assets/Vector (2).png" alt="Subscriptions">
                    <p class="mb-4">Subscriptions</p>
                </a>
                <a href="/admin/sitesetting.html">
                    <img src="/admin/assets/Group 1000008236.png" alt=" Settings">
                    <p class="mb-4"> Settings</p>
                </a>
                <a href="/admin/securitysetting.html">
                    <img src="/admin/assets/Vector (3).png" alt="Security Settings">
                    <p class="mb-4">Security Settings</p>
                </a>
                <a href="/admin/backup.html">
                    <img src="/admin/assets/Group 1000008239.png" alt=" Settings">
                    <p class="mb-4">Backups</p>
                </a>
                <a href="/admin/newapi.html">
                    <img src="/admin/assets/Group 1000008238.png" alt=" Settings">
                    <p class="mb-4">API</p>
                </a>
            </nav> --}}
            @include('layouts.sidebar')
            <!-- Main Content ms-sm-auto px-md-4 -->
            <main class="col-md-11 ">

                <!-- Header -->
                {{-- <div class="d-flex justify-content-between overflow-hidden  border-bottom  nav-create py-1">
                    <div class="d-md-flex d-none mb-5 align-self-center create ms-2 position-absolute ">
                        <img src="/admin/assets/Group 1000007853.png" class="ms-md-3 mb-md-1" alt="logo">
                        <h4 class="text-center mt-md-1 me-5 me-md-5 ms-md-2 ">CreateBook</h4>
                    </div>
                    <div class="info_nav  d-flex align-self-center mt-3 ms-lg-3 ms-md-5 ms-1">
                        <a href="">
                            <p class="ms-2 ms-md-5 about ms-lg-5">About Us</p>
                        </a>
                        <a href="{{ route('plans.index') }}">
                            <p class="ms-4">Plan & Pricing</p>
                        </a>
                    </div>
                    <div class="btn_nav  d-flex justify-content-between">
                        <div class="button-container d-flex  align-self-center me-2 ms-sm-5  ">
                            <button class="upgrade-button w-50 me-3">Upgrade to<span
                                    class="p-md-1 ms-1">PRO</span></button>
                            <input type="text" placeholder="Search"
                                class="form-control  ps-md-4 position-relative  align-self-center">
                        </div>

                        <div class=" ms-4 d-flex me-3">
                            <i class="fa-regular img_nav  fa-circle-question me-2 align-self-center ps-3"></i>
                            <i class="fa-regular fa-bell me-2 align-self-center ms-md-1"></i>
                            <img src="/admin/assets/image (10).png" class="align-self-center ms-md-2" alt="user">
                            <i class="fa-solid fa-chevron-down fa-2xs align-self-center text-muted ms-1"></i>
                        </div>

                    </div>


                </div> --}}
                @include('layouts.header')
             
                <div class="img_managment2 position-relative">
                    <img src="/admin/assets/Vector (5).png" class="position-absolute top-0" alt="">
                    <h1 class="w-100 text-center">Subscription Managment</h1>
                    <a href=" {{route('plans.create')}}" class="button_Adduser position-absolute z-1 ">Create New Plan</a>
                    <img src="/admin/assets/Vector (7).png" class="position-absolute img_line" alt="">
                    <img src="/admin/assets/Group (3).png" class="position-absolute img_line2" alt="">
                    <img src="/admin/assets/Vector (4).png" class="position-absolute img_line2" alt="">
                    <img src="/admin/assets/Vector (8).png" class="position-absolute img_line3" alt="">

                </div>
                <div class="container-fluid container-lg">
                    <div class="mt-4 all-sub">
                        <a href="/admin/submanagment.html">
                            <h2>All Plans</h2>
                        </a>
                        @if (session('success'))
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                Toastify({
                                    text: "{{ session('success') }}",
                                    className: "info",
                                    style: {
                                        background: "linear-gradient(to right, #00b09b, #96c93d)",
                                    }
                                }).showToast();
                            });
                        </script>
                        @endif
                    </div>

                    <div class="border rounded-5  mt-3 overflow-hidden shadow p-3 sub-table ">
                        <div class="table-responsive">
                            <table class="table table-hover border-0 p-4  align-middle  text-center  ">
                                <thead>
                                    <tr class="pt-3">
                                        <th scope="col">User Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Pricing</th>
                                        <th scope="col">ACTIONS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($plans as $plan)
                                        <tr>
                                            <td class="pb-4 basic">
                                                <p class="mt-3 basic">{{ $plan->name }}</p>
                                            </td>
                                            <td class="description">{{ $plan->description }}</td>
                                            <td class="pe-md-5 pe-0 ">

                                                <button class="button_admin_sub ms-3" data-id="{{ $plan->id }}">
                                                    {{ $plan->status }}
                                                </button>

                                            </td>
                                            <td class="sub-padding ">${{ $plan->price }} / Month</td>

                                            <td class="ps-md-5 pe-md-5 ps-0 pe-0">
                                                <form action="{{route('plans.destroy' , $plan->id)}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                <button type="submit" class=" button_admin3 btn btn-danger mt-md-2"><i
                                                        class="fa-solid fa-trash-can me-2 "></i>Delete</button>
                                                    </form>
                                                <a href="{{route('plans.edit' , $plan->id)}}" class="button_admin2 btn btn-secondary ms-lg-2 ms-0"><i
                                                        class="fa-solid fa-pen-to-square me-2"></i>Edit</a >
                                            </td>
                                        </tr>
                                        {{-- <tr>
                                <td class="pb-4 basic">
                                    <p class="mt-3 ">Basic Plan</p>
                                </td>
                                    <td class="description">A short description will be here with two line text or you can add a little more if you want.</td>
                                    <td class="pe-md-5 pe-0"> 
                                        <button class="button_admin_sub ms-3">Active</button>
                                    </td>
                                    <td class=" ">$2.99 / Month</td>

                                    <td class="ps-md-5 pe-md-5 ps-0 pe-0"> 
                                        <button class=" button_admin3 btn btn-danger mt-md-2"><i class="fa-solid fa-trash-can me-2 "></i>Delete</button>
                                        <button class="button_admin2 btn btn-secondary ms-lg-2 ms-0"><i class="fa-solid fa-pen-to-square me-2"></i>Edite</button>
                                    </td>
                              </tr>
                              <tr>
                                <td class="pb-4 basic">
                                    <p class="mt-3 ">Basic Plan</p>
                                </td>
                                    <td class="description">A short description will be here with two line text or you can add a little more if you want.</td>
                                    <td class="pe-md-5 pe-0"> 
                                        <button class="button_admin_sub ms-3">Active</button>
                                    </td>
                                    <td class=" ">$2.99 / Month</td>

                                    <td class="ps-md-5 pe-md-5 ps-0 pe-0"> 
                                        <button class=" button_admin3 btn btn-danger mt-md-2"><i class="fa-solid fa-trash-can me-2 "></i>Delete</button>
                                        <button class="button_admin2 btn btn-secondary ms-lg-2 ms-0"><i class="fa-solid fa-pen-to-square me-2"></i>Edite</button>
                                    </td>
                              </tr>
                              <tr >
                                <td class="pb-4 basic">
                                    <p class="mt-3">Basic Plan</p>
                                </td>
                                    <td class="description">A short description will be here with two line text or you can add a little more if you want.</td>
                                    <td class="pe-md-5 pe-0 "> 
                                        <button class="button_draft_sub btn btn-secondary ms-3">Draft</button>
                                    </td>
                                    <td class="">$2.99 / Month</td>

                                <td class="ps-md-5 pe-md-5 ps-0 pe-0"> 
                                    <button class=" button_admin3 btn btn-danger mt-md-2"><i class="fa-solid fa-trash-can me-2 "></i>Delete</button>
                                    <button class="button_admin2 btn btn-secondary ms-lg-2 ms-0"><i class="fa-solid fa-pen-to-square me-2"></i>Edite</button>
                                </td>
                              </tr> --}}
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                    <div class="all-sub">
                        <h2 class="mt-5">All Subscriber</h2>
                    </div>

                    <div class="border rounded-5  mt-5 sub p-3 overflow-hidden shadow ">
                        <div class="table-responsive">
                            <table class="table table-hover border-0   align-middle   ">
                                <div class="d-flex mb-5 mt-5 sub-info">
                                    <h6 class="mx-4">All</h6>
                                    <h6 class="ms-5">Active {{$activesubscriptions}}</h6>
                                    <h6 class="ms-5">Expired {{$expiredsubscriptions}}</h6>
                                    {{-- <h6 class="ms-5">Completed (5)</h6> --}}
                                    {{-- <h6 class="ms-5">Trialling (0)</h6> --}}
                                    <h6 class="ms-5">Cancelled {{$canceledsubscriptions}}</h6>
                                </div>
                                <thead>
                                    <tr>
                                        <th scope="col">User Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">ADDED Date</th>
                                        <th scope="col">ASSIGNED Role</th>
                                        {{-- <th scope="col">ACTIONS</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($totalsubscribers as $subscriber)
                                        
                                
                                    <tr class="pt-5">
                                        <td class="p-0 p-md-3 d-md-flex">
                                            {{-- <img src="/admin/assets/image (1).png" class="img_logo mt-sm-2"
                                                alt="employee"> --}}
                                            <p class="mt-3 mt-lg-4 mt-sm-1 ms-2">{{$subscriber->fname . ' ' . $subscriber->lname}}</p>
                                        </td>
                                        <td class="sub-line ">
                                            <p>{{$subscriber->email}}</p>
                                            {{-- <p>$2.99 / Monthly</p> --}}
                                        </td>
                                        <td class="pe-md-5 pe-0 ">
                                            <p>{{ $subscriber->subscriptions->first()?->start_date }}</p>
                                        </td>
                                        <td class="sub-line">
                                            <p>{{ $subscriber->subscriptions->first()?->plan?->name }}</p>


                                         
                                        </td>
                                        {{-- <td>
                                            25 Dec, 2024
                                        </td> --}}
                                    </tr>

                                    @endforeach
                                    {{-- <tr class="pt-5">
                                        <td class="p-0 p-md-3 d-md-flex">
                                            <img src="/admin/assets/image (2).png" class="img_logo mt-sm-2"
                                                alt="employee">
                                            <p class="mt-3 mt-lg-4 mt-sm-1 ms-2">#4 - Username</p>
                                        </td>
                                        <td class=" sub-line">
                                            <p>Standard</p>
                                            <p>$250 / Yearly</p>
                                        </td>
                                        <td class="pe-md-5 pe-0 ">
                                            <button class="button_admin">Completed</button>
                                        </td>
                                        <td class="sub-line">
                                            <p>$150.00</p>
                                            <p>25 Dec, 2024</p>
                                        </td>
                                        <td>
                                            26 Dec, 2024
                                        </td>
                                    </tr>
                                    <tr class="pt-5">
                                        <td class="p-0 p-md-3 d-md-flex">
                                            <img src="/admin/assets/image (3).png" class="img_logo mt-sm-2"
                                                alt="employee">
                                            <p class="mt-3 mt-lg-4 mt-sm-1 ms-2">#3 - Username</p>
                                        </td>
                                        <td class="sub-line ">
                                            <p>Basic</p>
                                            <p>$2.99 / Monthly</p>
                                        </td>
                                        <td class="pe-md-5 pe-0 ">
                                            <button class="button_cancelled">Cancelled</button>
                                        </td>
                                        <td class="sub-line">
                                            <p>$150.00</p>
                                            <p>25 Dec, 2024</p>
                                        </td>
                                        <td>
                                            25 Dec, 2024
                                        </td>
                                    </tr>
                                    <tr class="pt-5">
                                        <td class="p-0 p-md-3 d-md-flex">
                                            <img src="/admin/assets/image (4).png" class="img_logo mt-sm-2"
                                                alt="employee">
                                            <p class="mt-3 mt-lg-4 mt-sm-1 ms-2">#5 - Username</p>
                                        </td>
                                        <td class=" sub-line">
                                            <p>Premium</p>
                                            <p>$2.99 / Monthly</p>
                                        </td>
                                        <td class="pe-md-5 pe-0 ">
                                            <button class="button_admin_sub ms-3">Active</button>
                                        </td>
                                        <td class="sub-line">
                                            <p>$150.00</p>
                                            <p>25 Dec, 2024</p>
                                        </td>
                                        <td>
                                            27 Dec, 2024
                                        </td>
                                    </tr>
                                    <tr class="pt-5">
                                        <td class="p-0 p-md-3 d-md-flex">
                                            <img src="/admin/assets/image (5).png" class="img_logo mt-sm-2"
                                                alt="employee">
                                            <p class="mt-3 mt-lg-4 mt-sm-1 ms-2">#5 - Username</p>
                                        </td>
                                        <td class="sub-line ">
                                            <p>Basic</p>
                                            <p>$2.99 / Monthly</p>
                                        </td>
                                        <td class="pe-md-5 pe-0 ">
                                            <button class="button_pending btn btn-secondary ms-2">Pending</button>
                                        </td>
                                        <td class="sub-line">
                                            <p>$150.00</p>
                                            <p>25 Dec, 2024</p>
                                        </td>
                                        <td>
                                            28 Dec, 2024
                                        </td>
                                    </tr> --}}



                                </tbody>

                            </table>
                        </div>



                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

<script>
    document.querySelectorAll('.button_admin_sub').forEach(button => {
        button.addEventListener('click', function() {
            let planId = this.getAttribute('data-id');

            fetch(`/admin/plans/${planId}/status`, {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                            .getAttribute('content')
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        this.textContent = data.new_status;
                    } else {
                        alert('حدث خطأ ما');
                    }
                })
                .catch(error => console.error('Error:', error));
        });
    });
</script>

</html>
