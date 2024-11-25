<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShoeCycle | Login</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-icons-1.11.3/font/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/uicons-bold-rounded/css/uicons-bold-rounded.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/sweetalert/sweetalert.min.css') }}">
    @vite('resources/css/app.css')
</head>
<body class="flex items-center justify-center min-h-screen bg-gradient-to-r from-slate-300 to-slate-500">

    <div class="relative w-full h-[480px] max-w-4xl bg-gray-200 shadow-lg rounded-[30px] overflow-hidden flex">
      <!-- login form -->
      <div class="w-1/2 hidden md:block bg-cover bg-center">
        <div class="w-1/2 p-6 ml-[70px]">
            <h2 class="text-4xl font-bold text-gray-800 mb-4 text-center ml-[70px] mt-10">Login</h2>
            <form id="login-form" action="{{ route('auth.login') }}" method="POST">
              @csrf
                <div class="flex flex-col-reverse">
                    <input placeholder="Email" name="email" type="email" required class="peer outline-none border pl-2 py-1 w-64  rounded-md duration-500 border-black relative placeholder:duration-500 placeholder:absolute focus:placeholder:pt-10 focus:rounded-md">
                    <span class="pl-2 duration-500 opacity-0 peer-focus:opacity-100 -translate-y-5 peer-focus:translate-y-0">Email</span>
                </div>
                <div class="flex flex-col-reverse mt-1">
                    <input placeholder="Password" name="password" type="password" required class="peer outline-none border pl-2 py-1 w-64  rounded-md duration-500 border-black relative placeholder:duration-500 placeholder:absolute focus:placeholder:pt-10 focus:rounded-md">
                    <span class="pl-2 duration-500 opacity-0 peer-focus:opacity-100 -translate-y-5 peer-focus:translate-y-0">Password</span>
                </div>
              <button type="submit" class="w-full mt-5 ml-[40px] shadow-xl py-2.5 px-4 text-sm tracking-wide rounded-md text-white transition-colors duration-200 bg-slate-800 hover:bg-[#0F172A] focus:outline-none">
                Login
              </button>
            </form>
            <p class="mt-4 text-sm ">
              Belum punya akun? 
              <button id="show-register" class="shadow-xl text-blue-700 hover:underline">Daftar</button>
            </p>
          </div>
      </div>
  
      <!-- Form Section -->
       <div class="w-full md:w-1/2 relative">
        <!-- Slider Container -->
        <div id="slider" class="flex w-[200%] transition-transform">
          <!-- box slide -->
          <div class="w-1/2 h-[480px] md:block bg-cover bg-center bg-gradient-to-r from-slate-900 to-slate-700 flex flex-col items-center justify-center text-center">
            {{-- slide login  --}}
            <img id="slider-image" src="uploads/ilustration/login-amico.png" alt="" class="transition-opacity duration-500 opacity-100">
            {{-- slide register  --}}
            <img id="slider-image" src="uploads/ilustration/register-amico.png" alt="" class="transition-opacity duration-500 opacity-100">
          </div>    
  
          <!-- Register Form -->
          <div class="w-1/2 p-6 ">
            <h2 class="text-4xl font-bold text-gray-800 mb-4 text-center mt-10 ml-[10px]">Register</h2>
            <form id="register-form" action="{{ route('auth.register') }}" method="POST">
                @csrf
                <div class="flex flex-col-reverse">
                    <input placeholder="Username" type="text" name="username" class="peer outline-none border pl-2 py-1 w-64 ml-[80px] rounded-md duration-500 border-black relative placeholder:duration-500 placeholder:absolute focus:placeholder:pt-10 focus:rounded-md">
                    <span class="pl-2 duration-500 opacity-0 ml-[80px]  peer-focus:opacity-100 -translate-y-5 peer-focus:translate-y-0">Username</span>
                </div>
                <div class="flex flex-col-reverse">
                    <input placeholder="Email" type="email" name="email" class="peer outline-none border pl-2 py-1 w-64 ml-[80px] rounded-md duration-500 border-black relative placeholder:duration-500 placeholder:absolute focus:placeholder:pt-10 focus:rounded-md">
                    <span class="pl-2 duration-500 opacity-0  ml-[80px] peer-focus:opacity-100 -translate-y-5 peer-focus:translate-y-0">Email</span>
                </div>
                <div class="flex flex-col-reverse mt-1">
                    <input placeholder="Password" type="password" name="password" class="peer outline-none border pl-2 py-1 w-64 ml-[80px] rounded-md duration-500 border-black relative placeholder:duration-500 placeholder:absolute focus:placeholder:pt-10 focus:rounded-md">
                    <span class="pl-2 duration-500 opacity-0 ml-[80px] peer-focus:opacity-100 -translate-y-5 peer-focus:translate-y-0">Password</span>
                </div>
              <button type="submit" class="w-[170px] mt-5 ml-[125px] shadow-xl py-2.5 px-4 text-sm tracking-wide rounded-md text-white transition-colors duration-200 bg-slate-800 hover:bg-[#0F172A] focus:outline-none">
                Daftar
              </button>
            </form>
            <p class="mt-4 text-sm ml-[83px]">
              Sudah punya akun? 
              <button id="show-login" class="shadow-xl text-blue-700 hover:underline">Login</button>
            </p>
          </div>
          </div>
      </div>
    </div>
    <script>
        const slider = document.getElementById("slider");
        const showRegister = document.getElementById("show-register");
        const showLogin = document.getElementById("show-login");
        const sliderImage = document.getElementById("slider-image");

        function changeImage(newSrc) {
        sliderImage.style.transition = "opacity 0.5s ease-in-out"; 
        sliderImage.style.opacity = 0;
        setTimeout(() => {
        sliderImage.src = newSrc; 
        sliderImage.style.opacity = 1; 
        }, 500);
        } 
        
        // transisi slider 
        slider.style.transition = "transform 0.8s ease-in-out, border-radius 0.8s ease-in-out";
    
        showRegister.addEventListener("click", () => {
            slider.style.transform = "translateX(-50%)";
            changeImage("uploads/ilustration/register-amico.png");
        });
    
        showLogin.addEventListener("click", () => {
            slider.style.transform = "translateX(0)";
            changeImage("uploads/ilustration/login-amico.png");
        });
    </script>
     
  
  </body>
<script src="{{ asset('assets/sweetalert/sweetalert.min.js') }}"></script>
@if (session('message'))
    <script>
        Swal.fire({
            position: "top",
            icon: "{{ session('type-message') }}",
            title: "{!! session('message') !!}",
            showConfirmButton: false,
            toast: true,
            timer: 2500,
            timerProgressBar: true,
        });
    </script>
@endif

</html>
