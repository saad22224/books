<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Book</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./user/css/all.min.css">
  <link rel="stylesheet" href="./user/css/bootstrap.min.css">
  <link rel="stylesheet" href="./user/css/style.css">
</head>

<body>
  <section class="my-5">
    <div class="container-fluid">
      <div class="row justify-content-center ms-2">
        <div class="col-md-6 d-none d-md-flex">
          <img src="./user/assets/image.png" class="w-100 h-100" alt="user">
        </div>
        <div class=" col-md-6 login d-flex justify-content-center align-items-center ">
          <div class="">
            <div class="logo d-flex mb-lg-4 mb-md-0">
              <img src="./user/assets/Group 1000007853.png" alt="logo">
              <h4  class="align-self-center ms-lg-2  pt-3">CreateBook</h4>
            </div>
            <h1>Login to your account</h1>
            <p class="my-4">Haven’t any account? <a href="./index.html" target="_self">Sign Up</a></p>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <input type="email" name="email" placeholder="Enter your Email" class="form-control w-100 mb-2" value="{{ old('email') }}" required autofocus>
                    @error('email')
                        <div class="mt-2 text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mt-4 position-relative w-100">
                    <input type="password" name="password" placeholder="Password" class="form-control w-100" required autocomplete="current-password">
                    <i class="fa-solid fa-eye position-absolute" style="top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;"></i>
                    @error('password')
                        <div class="mt-2 text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="checkbox-group d-flex">
                    <input type="checkbox" name="remember" id="remember_me">
                    <p class="align-self-center mt-3 ms-2">Keep me logged in</p>
                </div>

                <button class="main-btn mt-3">Log in</button>

                <p class="paragh my-3 text-center position-relative">Or Log In with</p>

                <div class="button_group d-flex mt-2">
                    <button class="me-2 text-center">
                        <img src="./user/assets/Group 78.png" class="me-1" alt="google logo">
                        Google
                    </button>
                    <button class="text-center me-2">
                        <img src="./user/assets/Vector.png" class="me-1" alt="apple">
                        Apple
                    </button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="./user/js/bootstrap.bundle.min.js"></script>
</body>

</html>
