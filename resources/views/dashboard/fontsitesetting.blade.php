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
                <div class="container backup">
                    <div class="d-flex justify-content-between mt-4">
                        <div class=" pt-0 pt-md-2">
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
                        <div class="row my-3 gx-4 gy-3 p-2 flex-lg-nowrap">
                            <div class="col-12 col-md-12 col-lg-6 shadow rounded-4 p-4  ">
                                <div class="mb-2">
                                    <h3>Font</h3>
                                </div>
                                <p class="pt-3 font">Font Family</p>
                                <select class="form-select w-100  " >
                                    <option value="" class="">Poppins</option>
                                </select>
                                <P class="pt-4">Font Size</P>
                                <div class="d-flex justify-content-between font-siting ">
                                    <div>
                                        <div class="d-flex  mb-4 ">
                                            <h5 class=" ms-md-3  me-5 ">H1</h5>
                                            <div class="number-input">
                                                <input type="" id="number" value="54" min="1">
                                                <div class="controls">
                                                    <button onclick="increase()"><i class="fas fa-chevron-up"></i></button>
                                                    <button onclick="decrease()"><i class="fas fa-chevron-down"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-1 mb-4 ">
                                            <h5 class="ms-md-3 mt-1 me-5 ">H2</h5>
                                            <div class="number-input">
                                                <input type="" id="number" value="54" min="1">
                                                <div class="controls">
                                                    <button onclick="increase()"><i class="fas fa-chevron-up"></i></button>
                                                    <button onclick="decrease()"><i class="fas fa-chevron-down"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-1 mb-4">
                                            <h5 class="ms-md-3 mt-1 me-5 ">H3</h5>
                                            <div class="number-input">
                                                <input type="" id="number" value="54" min="1">
                                                <div class="controls">
                                                    <button onclick="increase()"><i class="fas fa-chevron-up"></i></button>
                                                    <button onclick="decrease()"><i class="fas fa-chevron-down"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-1 mb-4 ">
                                            <h5 class="ms-md-3 mt-1 me-5 ">H4</h5>
                                            <div class="number-input">
                                                <input type="" id="number" value="54" min="1">
                                                <div class="controls">
                                                    <button onclick="increase()"><i class="fas fa-chevron-up"></i></button>
                                                    <button onclick="decrease()"><i class="fas fa-chevron-down"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="font-color">
                                        <div class="d-flex mt-1 mb-4  ">
                                            <h5 class="ms-4 mt-1 me-5">H5</h5>
                                            <div class="number-input ms-4">
                                                <input type="" id="number" value="54" min="1">
                                                <div class="controls">
                                                    <button onclick="increase()"><i class="fas fa-chevron-up"></i></button>
                                                    <button onclick="decrease()"><i class="fas fa-chevron-down"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-1 mb-4 paragraph-font">
                                            <h5 class="ms-4 mt-1 ">Paragrph</h5>
                                            <div class="number-input me-5">
                                                <input type="" id="number" value="54" min="1">
                                                <div class="controls">
                                                    <button onclick="increase()"><i class="fas fa-chevron-up"></i></button>
                                                    <button onclick="decrease()"><i class="fas fa-chevron-down"></i></button>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
        
    
                            </div>
                            <div class="col-12 col-md-12 col-lg-6 shadow rounded-4 p-4 ms-lg-4 ms-0 ">
                                <div class="mb-2">
                                    <h3>Colors</h3>
                                </div>
                                <p class="">Body background</p>
                                <div class="input-group mb-3 w-100 " >
                                    <input type="text" class="form-control w-75" placeholder="#ffffff">
                                    <input type="color" class="form-control form-control-color border-black" id="exampleColorInput" value="#FFFFFF" title="Choose your color">
                                  </div>
                                  <p class="">Font Heading</p>
                                  <div class="input-group mb-3 w-100 " >
                                      <input type="text" class="form-control w-75" placeholder="#17253F">
                                      <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#17253F" title="Choose your color">
                                    </div>
                                    <p class="">Paragraph</p>
                                    <div class="input-group mb-3 w-100 " >
                                        <input type="text" class="form-control w-75" placeholder="#949494">
                                        <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#949494" title="Choose your color">
                                      </div>
                                      <div class="d-flex justify-content-between w-100">
                                        <div class="w-75 me-4">
                                            <p class="">Button Color</p>
                                            <div class="input-group w-100 " >
                                                <input type="text" class="form-control w-75 " placeholder="#1876F1">
                                                <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#1876F1" title="Choose your color">
                                              </div>
                                          </div>
                                          <div class="w-75 ">
                                            <div class="input-group w-100 margin-btn " >
                                                <input type="text" class="form-control w-75" placeholder="#00BEF5">
                                                <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#00BEF5" title="Choose your color">
                                              </div>
                                          </div>
                                      </div>
    
    
    
                                
    
                            </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script>
        function increase() {
            let input = document.getElementById('number');
            input.value = parseInt(input.value) + 1;
        }

        function decrease() {
            let input = document.getElementById('number');
            if (parseInt(input.value) > parseInt(input.min)) {
                input.value = parseInt(input.value) - 1;
            }
        }
    </script>
</body>
</html>