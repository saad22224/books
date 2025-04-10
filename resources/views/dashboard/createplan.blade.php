<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/admin/css/all.min.css">
  <link rel="stylesheet" href="/admin/css/bootstrap.min.css">
  <link rel="stylesheet" href="/admin/css/style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            {{-- <nav class="col-md-1 d-none d-md-block  sidebar shadow text-center position-relative  pt-2">
                <a href="/admin/index.html" ><img src="/admin/assets/Group 1000007883.png" class="" alt="Dashboard">
                   <p class="mb-4"> Dashboard</p>
                </a>
                <a href="/admin/mangment.html">
                    <img src="/admin/assets/Group 1000008235.png"  alt="user managment">
                   <p class="mb-4">User Management</p></a>
                <a href="/admin/subscriptionplan.html" class="active  target="_self">
                    <img src="/admin/assets/Vector (2).png"  alt="Subscriptions">
                    <p class="mb-4">Subscriptions</p></a>
                <a href="/admin/sitesetting.html">
                    <img src="/admin/assets/Group 1000008236.png"   alt=" Settings">
                   <p class="mb-4"> Settings</p></a>
                <a href="/admin/securitysetting.html">
                    <img src="/admin/assets/Vector (3).png" alt="Security Settings">
                    <p class="mb-4">Security Settings</p></a>
                <a href="/admin/backup.html">
                    <img src="/admin/assets/Group 1000008239.png"  alt=" Settings">
                    <p class="mb-4">Backups</p></a>
                <a href="/admin/newapi.html">
                    <img src="/admin/assets/Group 1000008238.png"  alt=" Settings">
                    <p class="mb-4">API</p></a>
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
                        <a href=""><p class="ms-2 ms-md-5 about ms-lg-5">About Us</p></a>
                      <a href=""><p class="ms-4">Plan & Pricing</p></a>  
                    </div>
                    <div class="btn_nav  d-flex justify-content-between"> 
                        <div class="button-container d-flex  align-self-center me-2 ms-sm-5  ">
                            <button class="upgrade-button w-50 me-3">Upgrade to<span class="p-md-1 ms-1">PRO</span></button>
                            <input type="text" placeholder="Search" class="form-control  ps-md-4 position-relative  align-self-center">
                        </div>
                       
                        <div class=" ms-4 d-flex me-3">
                            <i class="fa-regular img_nav  fa-circle-question me-2 align-self-center ps-3"></i>
                            <i class="fa-regular fa-bell me-2 align-self-center ms-md-1"></i>
                            <img src="/admin/assets/image (10).png" class="align-self-center ms-md-2"  alt="user">
                            <i class="fa-solid fa-chevron-down fa-2xs align-self-center text-muted ms-1"></i>
                        </div>
    
                    </div>
    
    
                </div> --}}
                @include('layouts.header')

                <div class="img_managment2 position-relative">
                    <img src="/admin/assets/Vector (5).png" class="position-absolute top-0" alt="">
                        <h1 class="w-100 text-center">Site Settings</h1>
                    <img src="/admin/assets/Vector (7).png" class="position-absolute img_line" alt="">
                    <img src="/admin/assets/Group (3).png" class="position-absolute img_line2" alt="">    
                    <img src="/admin/assets/Vector (4).png" class="position-absolute img_line2" alt="">
                    <img src="/admin/assets/Vector (8).png" class="position-absolute img_line3" alt="">
                   
                </div>
                <div class="container-fluid container-lg backup pb-5">
                    <div class="d-flex justify-content-between mt-3">
                        <div class=" pb-2 mb-1 create_new_plan">
                            <a href="/admin/subscriptionplan.html" target="_self" class="me-3 "><i class="fa-solid fa-chevron-left me-3"></i>Create New Plan</a>
                        </div>
                    </div>
                    <div class=" shadow  rounded-4 overflow-hidden p-4 border mb-3 mt-3 submanagment">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="{{route('plans.store')}}" method="post">
                                @csrf
                            <div class="mt-2 w-75">
                                <label for="exampleFormControlInput1" class="form-label">Plan Name</label>
                                <input type="text" placeholder="Type here" name="name" id="" class="form-control">
                            </div>
                            <div class="my-4 w-75">
                                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                              </div>
                              <div >
                               
                                {{-- <h6 >Free Trial</h6>
                                <div class="mb-3 row w-75">
                                    <div class="col-6">
                                        <input type="number" class="form-control" value="5">
                                    </div>
                                    <div class="col-6">
                                        <select class="form-select">
                                            <option selected>Days</option>
                                            <option>Weeks</option>
                                            <option>Months</option>
                                        </select> --}}
                                    </div>
                                </div>
                              </div>
                              <p class="font-main">Set the subscription duration. Leave 0 for unlimited.</p>
                              <div class="mb-3 w-75">
                                <label>Price</label>
                                <div class="input-group w-100">
                                    <input  name="price" type="number" class="form-control" >
                                    <span class="input-group-text">USD</span>
                                </div>
                             <div class="mt-2 w-75">
                                    <label for="exampleFormControlInput1" class="form-label">book number
                                        
                                    </label>
                                    <input type="number" placeholder="book number" name="book"
                                     id="" class="form-control">
                                </div>
                                <div class="mt-2 w-75">
                                    <label for="exampleFormControlInput1" class="form-label">word number

                                    </label>
                                    <input type="number" placeholder="word number" name="word"
                                     id="" class="form-control">
                                </div>
                                <p class="w-100 font-main">Amount you want to charger people who join this plan. Leave 0 if you want this plan to be free.</p>
                            </div>
                            <h6 >Status</h6>
                            <select name="status" style="margin-bottom:20px" class="form-select w-75">
                                <option selected value="active">Active</option>
                                <option value="disactive">Inactive</option>
                            </select>
                            <button class="button_Adduser ">Save & Publish</button>
                        </form>
                            {{-- <button class="button_push_delete ms-2 btn btn-danger ">Delete</button> --}}
                            </div>
                        <div class="col-md-6">
                                    <!-- Price Input with Currency -->
                                    {{-- <div class="my-3">
                                        <label>Price</label>
                                        <div class="input-group w-75">
                                            <input type="number" class="form-control" value="5">
                                            <span class="input-group-text">USD</span>
                                        </div>
                                    </div> --}}
                            
                                    <!-- Free Trial -->
                                    {{-- <h6 >Free Trial</h6>
                                    <div class="mb-3 row w-75">
                                        <div class="col-6">
                                            <input type="number" class="form-control" value="5">
                                        </div> --}}
                                        {{-- <div class="col-6  ">
                                            <select class="form-select">
                                                <option selected>Days</option>
                                                <option>Weeks</option>
                                                <option>Months</option>
                                            </select>
                                        </div> --}}
                                    </div>
                                    <p class="font-main small w-75">
                                        The free trial represents the amount of time before charging the first recurring payment.
                                        The sign-up fee applies regardless of the free trial.
                                    </p>
                            
                                    <!-- Renewal -->
                                    {{-- <h6>Renewal</h6>
                                    <select class="form-select mb-3 w-75">
                                        <option selected>Settings default</option>
                                        <option>Opt-in</option>
                                        <option>Force automatic renewal</option>
                                        <option>Force no renewal</option>
                                    </select> --}}
                                    {{-- <p class="font-main small w-75">
                                        Select renewal type. You can either allow the customer to opt in, force automatic renewal or force no renewal.
                                    </p> --}}
                            
                                    <!-- Status -->
                                 
                                </div>
                            </div>
                        </div>
                    </div>
            
                   


  

    
                </div>
            </main>
        </div>
    </div>
</body>
</html>