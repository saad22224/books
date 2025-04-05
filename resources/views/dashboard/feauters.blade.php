<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Book</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/admin/css/all.min.css">
  <link rel="stylesheet" href="/admin/css/bootstrap.min.css">
  <link rel="stylesheet" href="/admin/css/style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
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
                <div class="container-fluid container-lg backup">
                    <div class="d-flex justify-content-between mt-4">
                        <div class=" pt-0 pt-md-2 ">
                            <a href="{{route('admin.setting')}}" target="_self" class="me-3">Logo & Site Name</a>
                            <a href="{{route('admin.fontsetting')}}" target="_self" class="me-3">Font & Colors</a>
                            <a href="{{route('admin.features')}}"  class="active color" target="_self">Features</a>
                        </div>
                        <div class=" d-flex">
                            <img src="/admin/assets/Group 1000008180.png" class="align-self-center me-4" alt="question">
                            <img src="/admin/assets/Vector (11).png" class="align-self-center me-4" alt="paper">
                            <button class="button_Adduser">Save Changes</button>
                        </div>
                    </div>
                    <div class=" shadow  rounded-3 overflow-hidden p-4 border mb-3 mt-3">
                        <div class="info_security pb-2">
                            <h4 class="mb-4">Features</h4>      
                        </div>
                        <div class="container-box">
                    
                            <!-- Site Title -->
                            <div class="my-4 row ">
                                <label class="col-md-4 col-form-label form-label font">Site Title</label>
                                <div class="col-md-8">
                                    <select class="form-select w-75 text-muted">
                                        <option>Websites name here</option>
                                    </select>
                                </div>
                            </div>
                    
                            <!-- Tagline -->
                            <div class="my-4 row">
                                <label class="col-md-4 col-form-label form-label font">Tagline</label>
                                <div class="col-md-8">
                                    <select class="form-select w-75 text-muted">
                                        <option>Book type</option>
                                    </select>
                                    <p class=" w-75 mt-2 font-main">In a few words, explain what this site is about. Example: “Historical story”</p>
                                </div>
                            </div>
                    
                            <!-- Site Icon -->
                            <div class="my-4 row">
                                    <div class="col-md-4">
                                        <label class="col-md-4 col-form-label form-label font">Site icon</label>
                                    </div>
                                   
                                    <div class="mb-3 mx-auto col-md-8">
                                    <div class="create_book_feau">
                                        <h4 class="text-center mt-2 align-self-center font">Chosse a Site Icon</h4>    
                                    </div>
                                    <p class=" mt-2 w-75 font-main">The Site Icon is what you see in browser tabs, bookmark bars, and within the sites. It should be square and at least 512 by 512 pixels.</p>      
                            </div>
                    
                            <!-- Email Address -->
                            <div class="mb-4 row">
                                <label class="col-md-4 col-form-label form-label font">Administration Email Address</label>
                                <div class="col-md-8">
                                    <input type="email" class="form-control w-75" placeholder="example@gmail.com">
                                    <p class=" w-75 mt-1 font-main">This address is used for admin purposes. If you change this, an email will be sent to confirm it.</p>
                                </div>
                            </div>
                    
                            <!-- Membership -->
                            <div class="mb-4 row">
                                <label class="col-md-4 col-form-label form-label font">Membership</label>
                                <div class="col-md-8">
                                    <div class="form-check w-75">
                                        <input class="form-check-input" type="checkbox">
                                        <p class="text-black pt-1">Anyone can register</p>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- User Default Role -->
                            <div class="mb-4 row">
                                <label class="col-md-4 col-form-label form-label font">New User Default Role</label>
                                <div class="col-md-8">
                                    <select class="form-select w-75 text-muted">
                                        <option>Subscriber</option>
                                    </select>
                                </div>
                            </div>
                    
                            <!-- Site Language -->
                            <div class="mb-4 row">
                                <label class="col-md-4 col-form-label form-label font">Site Language</label>
                                <div class="col-md-8">
                                    <select class="form-select w-75 text-muted">
                                        <option>English (United States)</option>
                                    </select>
                                </div>
                            </div>
                    
                            <!-- Timezone -->
                            <div class="mb-4 row">
                                <label class="col-md-4 col-form-label form-label font">Timezone</label>
                                <div class="col-md-8">
                                    <select class="form-select w-75 text-muted ">
                                        <option>UTC+0</option>
                                    </select>
                                    <p class=" w-75 mt-2 font-main">Choose either a city in the same timezone as you or a UTC (Coordinated Universal Time) time offset.</p>
                                    <p class="text-dark mt-2 font-main2">Universal time is <span class="text-primary">2024-12-24 05 : 24 : 48</span></p>
                                </div>
                            </div>
                    
                            <!-- Save Button -->
                            <div class="text-start">
                                <button class="button_Adduser">Save Changes</button>
                            </div>
                        </div>
                      
                    </div>
                    
                    </div>
            </main>
        </div>
    </div>
</body>
</html>