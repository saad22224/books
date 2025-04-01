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
        <div class="col-md-6 login d-flex justify-content-center align-items-center">
          <div class="">
            <div class="logo d-flex mb-lg-4 mb-md-0 ms-5">
              <img src="./user/assets/Group 1000007853.png" alt="logo">
              <h4 class="align-self-center ms-lg-2 pt-3">CreateBook</h4>
            </div>
            <h1 class="ms-5">Create an account</h1>
            <p class="my-4 ms-5">Already have an account? <a href="{{route('login')}}" target="_self">Log in</a></p>

            <form method="POST" action="{{ route('register') }}" class="ms-5 w-75">
              @csrf

              <div class="d-flex">
                <div class="w-50 me-2">
                  <input type="text" name="fname" placeholder="First Name" class="form-control mt-2" value="{{ old('fname') }}" required>
                  @error('fname')
                    <div class="text-danger mt-1">{{ $message }}</div>
                  @enderror
                </div>
                <div class="w-50">
                  <input type="text" name="lname" placeholder="Last Name" class="form-control mt-2" value="{{ old('lname') }}" required>
                  @error('lname')
                    <div class="text-danger mt-1">{{ $message }}</div>
                  @enderror
                </div>
              </div>

              <input type="email" name="email" placeholder="Enter your Email" class="form-control w-100 mb-2 mt-2" value="{{ old('email') }}" required>
              @error('email')
                <div class="text-danger mt-1">{{ $message }}</div>
              @enderror

              <div class="position-relative w-100">
                <input type="password" name="password" placeholder="Password" class="form-control w-100" required>
                <i class="fa-solid fa-eye position-absolute" style="top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;"></i>
              </div>
              @error('password')
                <div class="text-danger mt-1">{{ $message }}</div>
              @enderror

              <div class="checkbox-group d-flex mt-3">
                <input type="radio" name="agreement" value="1" id="agree" required>
                <label for="agree" class="ms-2">أوافق على الشروط</label>
              </div>

              <button class="main-btn mt-3">Register</button>

              <p class="paragh my-3 text-center position-relative">Or Sign Up with</p>

              <div class="button_group d-flex mt-2">
                <button class="me-2 text-center">
                  <img src="./user/assets/Group 78.png" class="me-1" alt="google logo"> Google
                </button>
                <button class="text-center me-2">
                  <img src="./user/assets/Vector.png" class="me-1" alt="apple"> Apple
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
