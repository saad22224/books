<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Book</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
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
                        <div class="pt-0 pt-md-2 ">
                            <a href="{{route('admin.setting')}}" target="_self" class="me-3">Logo & Site Name</a>
                            <a href="{{route('admin.fontsetting')}}" target="_self" class="me-3">Font & Colors</a>
                            <a href="{{route('admin.features')}}"  class="active color" target="_self">Features</a>
                        </div>
                        <div class=" d-flex">
                            <img src="/admin/assets/Group 1000008180.png" class="align-self-center  me-4"
                                alt="question">
                            <img src="/admin/assets/Vector (11).png" class="align-self-center me-4" alt="paper">
                            <button class="button_Adduser">Save Changes</button>
                        </div>
                    </div>
                    <div class=" shadow  rounded-3 overflow-hidden p-4 border mb-3 mt-3">

                        <div class="info_security pb-2">
                            <h4>Logo</h4>
                        </div>
                        <form action="{{route('admin.uploadlogos')}}" method="POST"
                         enctype="multipart/form-data">
                         @csrf
                            <!-- Logo Upload -->
                            <div class="input_group">
                                <div class="d-flex mt-4">
                                    <h5 class="me-5 mt-2 margin_input logo">Logo</h5>
                                    <div class="input-group position-relative ms-1">
                                        <input type="file" class="form-control p-3" name="site_logo" accept="image/*">
                                        {{-- <i class="fa-solid fa-trash-can position-absolute p-2 rounded-2"></i> --}}
                                    </div>
                                </div>
                                <div class="d-flex create_book mt-1">
                                    <img src="/admin/assets/Group 1000007853.png" class="ms-3" alt="logo">
                                    <h4 class="text-center mt-2 me-0 me-md-5 align-self-center">CreateBook</h4>
                                </div>
                            </div>
                        
                            <!-- Retina Logo Upload -->
                            <div class="input_group mt-5">
                                <div class="d-flex mt-4">
                                    <h5 class="me-3 me-md-5 mt-2 margin_input2 logo">Retina Logo</h5>
                                    <div class="input-group position-relative">
                                        <input type="file" class="form-control p-3" name="site_retinalogo" accept="image/*">
                                        {{-- <i class="fa-solid fa-trash-can position-absolute p-2 rounded-2"></i> --}}
                                    </div>
                                </div>
                            </div>
                        <div class="d-flex create_book2 mt-1">
                                <img src="/admin/assets/Group 1000007853.png" class="ms-3" alt="logo">
                                <h4 class="text-center mt-2 me-5 me-md-5 align-self-center ">CreateBook</h4>
                            </div>
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary mt-4">Save</button>
                        </form>
                        
                                <p class="ms-2 mt-4 d-none d-md-block font-main">Retina Logo should be twice size as
                                    logo</p>

                            </div>
                            {{-- <div class="d-flex create_book2 mt-1"> --}}
                                {{-- <img src="/admin/assets/Group 1000007853.png" class="ms-3" alt="logo"> --}}
                                {{-- <h4 class="text-center mt-2 me-5 me-md-5 align-self-center ">CreateBook</h4> --}}
                            {{-- </div> --}}
                        </div>

                    </div>





                </div>
            </main>
        </div>
    </div>
</body>

</html>
