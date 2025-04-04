<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CreateBook</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/admin/css/all.min.css">
    <link rel="stylesheet" href="/admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="/admin/css/style.css">
    <script defer src="/admin/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
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

                <div class="img_main position-relative">
                    <img src="/admin/assets/Vector (5).png" class="position-absolute top-0" alt="">
                    <h1 class="pt-5">Welcome</h1>
                    <h1 class="color_bakup index-main">Abdul Kader!</h1>
                    <img src="/admin/assets/Vector (7).png" class="position-absolute img_line" alt="">
                    <img src="/admin/assets/Group (3).png" class="position-absolute img_line2" alt="">    
                    <img src="/admin/assets/Vector (4).png" class="position-absolute img_line2" alt="">
                    <img src="/admin/assets/Vector (8).png" class="position-absolute img_line3" alt="">
                   
                </div>
                <!-- Analytics -->
                 <section class="analytics">
                    <div class="container mt-4">
                        <div class=" ms-3 ms-md-0 d-flex justify-content-between mb-2">
                            <h2 class="mt-2">Analytics</h2>
                            <div class="input_analytics d-flex mb-3 mt-2 mt-md-0">
                                <label for="" class="text-muted w-50 align-self-center me-2">Showing data for:</label>
                                <select name="" id="" class="form-select text-black text-muted">
                                <option value="">11 May - 11 June 2020</option>
                               </select>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-lg-4 col-md-12 mt-4 ">
                            <div class="w-100 mb-4 ms-2 ms-md-0 ">
                                <div class="card-1 p-4 shadow rounded-4">
                                    <h6 >Today's Visitors/Traffic</h6>
                                    <div class="visitor d-flex justify-content-between ">
                                        <div class="d-flex paper">
                                            <img src="/admin/assets/Group.png" class="align-self-center" alt="">
                                            <h3 class="ms-4 align-self-center" >2,285</h3>
                                        </div>
                                        <img src="/admin/assets/Group 1000008082.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class=" ms-2 ms-md-0  w-100 mb-4 rounded-4">
                                <div class="card-1 p-4 shadow rounded-4">
                                    <h6 >Today's Visitors/Traffic</h6>
                                    <div class="visitor d-flex justify-content-between ">
                                        <div class="d-flex paper">
                                            <img src="/admin/assets/Group (1).png" class="align-self-center" alt="">
                                            <h3 class="ms-4  align-self-center" >1,865</h3>
                                        </div>
                                        <img src="/admin/assets/Group 1000008082 (1).png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class=" ms-2 ms-md-0 mb-4 rounded-4">
                                <div class="card-1 p-4 shadow rounded-4">
                                    <h6 >Today's Visitors/Traffic</h6>
                                    <div class="visitor d-flex justify-content-between ">
                                        <div class="d-flex paper">
                                            <img src="/admin/assets/Group (2).png" class="align-self-center" alt="">
                                            <h3 class="ms-4 align-self-center" >895</h3>
                                        </div>
                                        <img src="/admin/assets/Group 1000008082 (2).png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12 ">
                            <div class="card  p-4 shadow ms-2 ms-md-0">
                                <div class="d-flex justify-content-between">
                                    <div class="my-3">                            
                                        <h6 class="mb-3 ">Monthly Revenue</h6>
                                        <div class="d-flex">
                                            <h3>$120,544 </h3><span class="text-muted ms-3">from $180,000</span>
                                        </div>
                                       
                                    </div>
                                    <div class="card_profit text-center mt-4">
                                         <span class=" ms-5">3,5%</span> 
                                        <p class="text-muted">Overall profit</p>
                                    </div>
                                </div>
                                <div class="chart bg-light position-relative">
                                    <img src="/admin/assets/Group 1000008120.png" class="position-absolute progress-line " alt="">
                                    <img src="/admin/assets/Vector 24.png" class="position-absolute progress-line1 " alt="">
                                </div>
                                <div class="container">
                                    <div class="day pt-3 fw-bold d-flex justify-content-between position-relative">
                                        <p >Wed</p>
                                        <p >Thu</p>
                                        <p class="ms-2" >Fri</p>
                                        <p >Sat</p>
                                        <p>Sun</p>
                                        <img src="/admin/assets/Group 1000008124 (1).png" class="position-absolute" alt="">
                                        <p >Mon</p>
                                        <p>Wed</p>
                                        <p>Thu</p>
                                        <p>Fri</p>
                                        <p class="me-2">Fri</p>
                                    </div>
                                    <div class="day d-flex justify-content-between">
                                        <p class="ms-2">14</p>
                                        <p class="ms-1">15</p>
                                        <p class="ms-2" >16</p>
                                        <p >17</p>
                                        <p>18</p>
                                        <p class="ms-3">19</p>
                                        <p class="ms-2">20</p>
                                        <p >21</p>
                                        <p>22</p>
                                        <p class="me-2">23</p>
                                    </div>
                                </div>
    
                            </div>
    
                        </div>
                     </div>
                            
                    </div>
    
    
                    <div class="container pb-4">
                        <div class="row g-4">
                            <!-- Earnings Card -->
                            <div class="col-md-12 col-lg-4">
                                <div class="card p-4 shadow ms-2 mt-4 mt-md-0 ms-md-0">
                                    <div class="d-flex justify-content-between card_img">
                                        <img src="/admin/assets/Vector 20 (1).png" alt="line">
                                        <div class="me-5">
                                            <h5 >$9,250</h5>
                                            <p class="text-muted">Net Earning today</p>
                                        </div>
                                    </div>
    
                                    <hr>
                                    <div class="d-flex justify-content-between  card_img">
                                        <img src="/admin/assets/Vector 21 (1).png" alt="line">
                                        <div class="me-3">
                                            <h5>$18,812</h5>
                                            <p class="text-muted">Net Earning this month</p>
                                        </div>
                                    </div>
    
    
                                </div>
                                <div class="card-2 p-3 mt-3 shadow ms-2 ms-md-0">
                                    <div class="d-flex justify-content-between">
                                        <p>Monthly Progress</p>
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </div>
                                    <div class="d-flex">
                                        <p class="me-3 ">33%</p>
                                        <div class="progress w-75 mt-1">
                                            <div class="progress-bar" style="width: 33%;"></div>
                                        </div>
                                    </div>
    
                                </div>
                            </div>
                    
                            <!-- History Card -->
                            <div class="col-md-12 col-lg-4">
                                <div class="card p-4 shadow ms-2 ms-md-0">
                                    <div class="d-flex justify-content-between info_security">
                                        <h5 class=" pb-1">History</h5>
                                        <a href="#"class="">Show : <span class="text-muted">All History</span></a>
                                    </div>
                                    <ul class="list-unstyled mt-4">
                                        <li class="mb-4"><span class="text-success">●</span> <strong>Geo Vanni</strong> started a new trial <span class="text-muted float-end">2h ago</span></li>
                                        <li class="mb-4"><span class="text-danger">●</span> <strong>Kukuh</strong> failed pay for membership <span class="text-muted float-end">2h ago</span></li>
                                        <li class="mb-4"><span class="text-primary">●</span> <strong>Indro</strong> upgraded into Premium <span class="text-muted float-end">2h ago</span></li>
                                        <li class="mb-4"><span class="text-success">●</span> <strong>Indah</strong> joined as new member <span class="text-muted float-end">2h ago</span></li>
                                        <li class="mb-4"><span class="text-success">●</span> <strong>Patya</strong> joined as new member <span class="text-muted float-end">2h ago</span></li>
                                    </ul>
                                </div>
                            </div>
                    
                            <!-- Recapitulation Card -->
                            <div class="col-md-4">
                                <div class="card p-3 shadow h-100 ms-2 ms-md-0">
                                    <div class="d-flex rec justify-content-between">
                                        <h5>Recapitulation</h5>
                                        <select class="form-select w-auto">
                                            <option>Monthly</option>
                                        </select>
                                    </div>
                    
                                    <div class="chart-container mt-4 mb-5 mb-md-5">
                                        <div class="circle-chart  circle-60">60%</div>
                                        <div class="circle-chart  circle-25">25%</div>
                                        <div class="circle-chart circle-10">10%</div>
                                    </div>
                    
                                    <hr>
                                    <div class="d-flex text-center justify-content-between">
                                        <div class="ms-3">
                                            <p>200</p>
                                            <span class="text-muted">Subscribers</span>
                                        </div>
                                        <div class="new-user px-4">
                                            <p>140</p>
                                            <span class="text-muted">New users</span>
                                        </div>
                                        <div class="me-3">
                                            
                                        <p>100</p>
                                        <span class="text-muted">Unsubscribe</span>
                                        </div>
    
                                    </div>
                                </div>
                            </div>
                    </div>
                    </div>
                 </section>

            </main>
        </div>
    </div>

  
</body>
</html>
