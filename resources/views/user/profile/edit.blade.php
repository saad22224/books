@extends('user.main.main')

@section('css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/user/user/css/all.min.css">
    <link rel="stylesheet" href="/user/user/css/bootstrap.min.css">
    <link rel="stylesheet" href="/user/user/css/style.css">
@endsection


@section('content')
    <div class="home ">
        <div class="container-fluid ps-4 ">
            <div class="profile-managment ">
                <h4 class="pt-4 pb-2">Profile Management</h4>
                <div class="profile-manage rounded-4 bg-white">
                    <div class="name-manage border-bottom d-flex justify-content-between  p-4">
                        <h5 class="align-self-center">Name</h5>
                        <h5 class="pt-2 align-content-start">{{ auth()->user()->fname }}</h5>
                        <button class="button_change">Change</button>

                    </div>
                    <div class="name-manage border-bottom d-flex justify-content-between  p-4">
                        <h5 class="align-self-center">Email</h5>
                        <h5 class=" pt-2">{{ auth()->user()->email }}</h5>
                        <button class="button_change2">Change</button>

                    </div>
                    <div class="name-manage border-bottom d-flex justify-content-between p-4">
                        <h5 class="align-self-center">Profile Picture</h5>
                        <img src="/user/user/assets/Ellipse 12.png" alt="ball">
                        <button class="button_change2">Change</button>

                    </div>
                    <div class="name-manage border-bottom d-flex justify-content-between p-4">
                        <h5 class="align-self-center">Password</h5>
                        <h5 class=" pt-2">{{ auth()->user()->password }}</h5>
                        <button class="button_change3">Reset password</button>

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
