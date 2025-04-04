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

            @include('layouts.sidebar')
    
            <!-- Main Content ms-sm-auto px-md-4 -->
            <main class="col-md-11 ">
                <!-- Header -->
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
                            <form action="{{ route('user.store') }}" method="post">
                                @csrf
                                
                                <!-- First Name -->
                                <div class="mb-3 w-75">
                                    <label for="fname" class="form-label">First Name</label>
                                    <input type="text" name="fname" class="form-control" id="fname" placeholder="Enter First Name" required>
                                </div>
                            
                                <!-- Last Name -->
                                <div class="mb-3 w-75">
                                    <label for="lname" class="form-label">Last Name</label>
                                    <input type="text" name="lname" class="form-control" id="lname" placeholder="Enter Last Name" required>
                                </div>
                            
                                <!-- Email -->
                                <div class="mb-3 w-75">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" required>
                                </div>
                            
                                <!-- Password -->
                                <div class="mb-3 w-75">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" required>
                                </div>
                            
                              
                                <!-- Role Selection -->
                                <div class="mb-3 w-75">
                                    <label for="role" class="form-label">User Role</label>
                                    <select name="role" class="form-select" id="role">
                                        <option value="user" selected>User</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                </div>
                            
                                <!-- Subscription Type -->
                                <div class="mb-3 w-75">
                                    <label for="subscription" class="form-label">Subscription Plan</label>
                                    <select name="subscription" class="form-select" id="subscription">
                                        <option value="" selected disabled>chose subscription</option>
                                        @foreach ($plans as  $plan)
                                      <option value="{{$plan->name}}" >{{$plan->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            
                                <!-- Submit Button -->
                                <button type="submit" class="btn btn-primary">Register</button>
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