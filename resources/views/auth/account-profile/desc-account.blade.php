{{-- <!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Lengkapi Profil Anda</title>
</head>

<body class="dark:bg-gray-900">
    <div class="max-w-md mx-auto my-5">
        <div class="bg-white shadow-md rounded-lg p-6 dark:bg-gray-800">
            <div class="flex justify-between items-center mb-1">
                <h2 class="text-2xl font-bold mb-6 text-gray-900 dark:text-white">Profil Akun</h2>
                @if (Auth()->user()->role == 'customer')
                    <a href="{{ route('view.cart') }}" class="font-semibold uppercase text-white bg-blue-500 px-4 py-2 rounded-lg hover:bg-blue-600">Kembali</a>
                @endif
                @if (Auth()->user()->role == 'admin')
                    <a href="{{ route('page.dashboard') }}" class="font-semibold uppercase text-white bg-blue-500 px-4 py-2 rounded-lg hover:bg-blue-600">Kembali</a>
                @endif
                @if (Auth()->user()->role == 'driver')
                    <a href="{{ route('ordershoes.view') }}" class="font-semibold uppercase text-white bg-blue-500 px-4 py-2 rounded-lg hover:bg-blue-600">Kembali</a>
                @endif
            </div>
            <form action="{{ route('store.profile', $user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="relative z-0 w-full mb-5 group">
                    <input type="email" value="{{ old('email', $user->email) }}" name="email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="name" value="{{ old('username', $user->name) }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="floating_username" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Username</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="password" name="password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                    <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
                </div>
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" value="{{ old('address', $user->address) }}" name="address" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Alamat</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="number" value="{{ old('no_hp', $user->no_hp) }}" name="no_hp" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nomor Telepon</label>
                    </div>
                </div>

                <!-- Menampilkan Gambar Profil jika ada -->
                <div class="relative z-0 w-full mb-5 group">
        
                    <!-- Input file tersembunyi -->
                    <input  type="file" id="file_input" name="avatar" accept="image/*" class="hidden" onchange="previewImage(event)">
                    
                    <!-- Gambar profil jika ada-->
                    @if ($user->avatar)
                    <label for="file_input" class="cursor-pointer">
                        <img id="avatarPreview" src="{{ $user->avatar ? asset('uploads/avatar/' . $user->avatar) : 'https://via.placeholder.com/150' }}" alt="Gambar Profil" class="w-24 h-24 rounded-full mx-auto border-2 border-gray-300 dark:border-gray-600 shadow-lg">
                    </label>
                    @else
                    <!-- Gambar profil jika tidak ada-->
                    <label for="file_input" class="cursor-pointer">
                        <img id="avatarPreview" src="uploads/avatar/empty-avatar.webp" alt="Gambar Profil" class="w-24 h-24 rounded-full mx-auto border-2 border-gray-300 dark:border-gray-600 shadow-lg">
                    </label>
                    @endif
                </div>
                
                <script>
                    // Fungsi untuk menampilkan preview gambar
                    function previewImage(event) {
                        const reader = new FileReader();
                        const file = event.target.files[0];
                        if (file) {
                            reader.onload = (e) => {
                                // Ganti sumber gambar preview
                                const avatarPreview = document.getElementById('avatarPreview');
                                avatarPreview.src = e.target.result;
                            };
                            reader.readAsDataURL(file);
                        }
                    }
                </script>
                

                <button class="w-full font-semibold uppercase text-white bg-blue-500 px-4 py-2 rounded-lg hover:bg-blue-600">UBAH</button>
            </form>
        </div>
    </div>

    @extends('layouts.partial.script')
</body>

</html> --}}

<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Lengkapi Profil Anda</title>
</head>

<body class="dark:bg-gray-900 min-h-screen flex items-center justify-center">
        <div class="bg-white p-6 rounded-xl w-[450px] shadow">
            <div class="flex items-center mb-1">
                @if (Auth()->user()->role == 'customer')
                    <a href="{{ route('view.cart') }}" class="font-semibold mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" x="0" y="0" viewBox="0 0 492 492" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M198.608 246.104 382.664 62.04c5.068-5.056 7.856-11.816 7.856-19.024 0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12C361.476 2.792 354.712 0 347.504 0s-13.964 2.792-19.028 7.864L109.328 227.008c-5.084 5.08-7.868 11.868-7.848 19.084-.02 7.248 2.76 14.028 7.848 19.112l218.944 218.932c5.064 5.072 11.82 7.864 19.032 7.864 7.208 0 13.964-2.792 19.032-7.864l16.124-16.12c10.492-10.492 10.492-27.572 0-38.06L198.608 246.104z" fill="#000000" opacity="1" data-original="#000000" class=""></path></g></svg>
                    </a>
                @endif
                @if (Auth()->user()->role == 'admin')
                    <a href="{{ route('page.dashboard') }}" class="font-semibold mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" x="0" y="0" viewBox="0 0 492 492" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M198.608 246.104 382.664 62.04c5.068-5.056 7.856-11.816 7.856-19.024 0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12C361.476 2.792 354.712 0 347.504 0s-13.964 2.792-19.028 7.864L109.328 227.008c-5.084 5.08-7.868 11.868-7.848 19.084-.02 7.248 2.76 14.028 7.848 19.112l218.944 218.932c5.064 5.072 11.82 7.864 19.032 7.864 7.208 0 13.964-2.792 19.032-7.864l16.124-16.12c10.492-10.492 10.492-27.572 0-38.06L198.608 246.104z" fill="#000000" opacity="1" data-original="#000000" class=""></path></g></svg>
                    </a>
                @endif
                @if (Auth()->user()->role == 'driver')
                    <a href="{{ route('ordershoes.view') }}" class="font-semibold mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" x="0" y="0" viewBox="0 0 492 492" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M198.608 246.104 382.664 62.04c5.068-5.056 7.856-11.816 7.856-19.024 0-7.212-2.788-13.968-7.856-19.032l-16.128-16.12C361.476 2.792 354.712 0 347.504 0s-13.964 2.792-19.028 7.864L109.328 227.008c-5.084 5.08-7.868 11.868-7.848 19.084-.02 7.248 2.76 14.028 7.848 19.112l218.944 218.932c5.064 5.072 11.82 7.864 19.032 7.864 7.208 0 13.964-2.792 19.032-7.864l16.124-16.12c10.492-10.492 10.492-27.572 0-38.06L198.608 246.104z" fill="#000000" opacity="1" data-original="#000000" class=""></path></g></svg>
                    </a>
                @endif
                  <h2 class="text-xl font-bold mb-6 ml-3 text-gray-900">Profil Akun</h2>
            </div>
          <div class="bg-slate-600 rounded-xl h-28 w-full object-cover">
          </div>
               {{-- foto profil  --}}
                <div class="relative z-0 w-full mb-5 group">
                    <!-- Input file tersembunyi -->
                    <input  type="file" id="file_input" name="avatar" accept="image/*" class="hidden" onchange="previewImage(event)">
                    
                    <!-- Gambar profil jika ada-->
                    @if ($user->avatar)
                    <div class="flex justify-center">
                    <label for="file_input" class="cursor-pointer focus:outline-none">
                        <img id="avatarPreview" src="{{ $user->avatar ? asset('uploads/avatar/' . $user->avatar) : 'https://via.placeholder.com/150' }}" alt="Gambar Profil" class="w-28 h-28 object-cover rounded-full border-4 border-white absolute -ml-[56px] -top-16">
                    </label>
                    </div>
                    @else
                    <div class="flex justify-center">
                    <!-- Gambar profil jika tidak ada-->
                    <label for="file_input" class="cursor-pointer focus:outline-none">
                        <img id="avatarPreview" src="uploads/avatar/empty-avatar.webp" alt="Gambar Profil" class="w-28 h-28 object-cover rounded-full border-4 border-white absolute -ml-[56px] -top-16">
                    </label>
                    </div>
                    @endif
                </div>

                <form action="{{ route('store.profile', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="relative z-0 w-full mt-20 mb-5 group">
                        <input type="email" value="{{ old('email', $user->email) }}" name="email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="name" value="{{ old('username', $user->name) }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="floating_username" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Username</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="password" name="password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" value="{{ old('address', $user->address) }}" name="address" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                            <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Alamat</label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="number" value="{{ old('no_hp', $user->no_hp) }}" name="no_hp" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                            <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nomor Telepon</label>
                        </div>
                    </div>
                </form>
                
          <button class="bg-blue-500 w-full py-3 text-white rounded-lg relative mb-4 mt-14 block hover:bg-blue-600 transition-all duration-300">
            Ubah
          </button> 
        </div>
</body>

<script>
    // Fungsi untuk menampilkan preview gambar
    function previewImage(event) {
        const reader = new FileReader();
        const file = event.target.files[0];
        if (file) {
            reader.onload = (e) => {
                // Ganti sumber gambar preview
                const avatarPreview = document.getElementById('avatarPreview');
                avatarPreview.src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    }
     // Hilangkan fokus pada lable avatar
     const fileInput = document.getElementById('file_input');
     fileInput.addEventListener('focus', (e) => {
     e.target.blur();
     });
</script>
@extends('layouts.partial.script') 
</html>
