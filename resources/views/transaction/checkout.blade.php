@extends('layouts-customer.index')

@section('title-frontend', 'ShoeCycle | Keranjang')
@section('content-frontend')
<div class="font-[sans-serif] bg-white">
    <div class="flex max-sm:flex-col gap-12 max-lg:gap-4 h-full">
      <div class="bg-gray-100 sm:h-screen sm:sticky sm:top-0 lg:min-w-[370px] sm:min-w-[300px]">
        <div class="relative h-full">
          <div class="px-4 py-8 w-full sm:overflow-auto border-2 border-gray-300 rounded-t-lg mt-8 ml-4">
            <div class="space-y-4">

                <div class="items-center flex justify-center w-full h-16 bg-white border-2 border-green-600 rounded-lg">             
                    <h1 class="text-xl font-semibold text-gray-600">Pesanan saya</h1>
                </div>

              <div class="flex items-start gap-4">
                <div class="w-32 h-28 max-lg:w-24 max-lg:h-24 flex p-3 shrink-0 bg-gray-200 rounded-md">
                  <img src='https://readymadeui.com/images/product11.webp' class="w-full object-contain" />
                </div>
                <div class="w-full">
                  <h3 class="text-sm lg:text-base text-gray-800">Velvet Boots</h3>
                  <ul class="text-xs text-gray-800 space-y-1 mt-3">
                    <li>Ukuran <span class="float-right">37</span></li>
                    <li>Jumlah <span class="float-right">2</span></li>
                    <li>Total harga <span class="float-right">$40</span></li>
                  </ul>
                </div>
              </div>

              <div class="flex items-start gap-4">
                <div class="w-32 h-28 max-lg:w-24 max-lg:h-24 flex p-3 shrink-0 bg-gray-200 rounded-md">
                  <img src='https://readymadeui.com/images/product14.webp' class="w-full object-contain" />
                </div>
                <div class="w-full">
                  <h3 class="text-sm lg:text-base text-gray-800">Echo Elegance</h3>
                  <ul class="text-xs text-gray-800 space-y-1 mt-3">
                    <li>Ukuran <span class="float-right">37</span></li>
                    <li>Jumlah <span class="float-right">2</span></li>
                    <li>Total harga <span class="float-right">$40</span></li>
                  </ul>
                </div>
              </div>

              <div class="flex items-start gap-4">
                <div class="w-32 h-28 max-lg:w-24 max-lg:h-24 flex p-3 shrink-0 bg-gray-200 rounded-md">
                  <img src='https://readymadeui.com/images/product13.webp' class="w-full object-contain" />
                </div>
                <div class="w-full">
                  <h3 class="text-sm lg:text-base text-gray-800">Pumps</h3>
                  <ul class="text-xs text-gray-800 space-y-1 mt-3">
                    <li>Ukuran <span class="float-right">37</span></li>
                    <li>Jumlah <span class="float-right">2</span></li>
                    <li>Total harga <span class="float-right">$40</span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class=" mt-0 ml-4 rounded-b-lg bg-gray-200 w-full p-4  border-2 border-gray-300">
            <h4 class="flex flex-wrap gap-4 text-sm lg:text-base text-gray-800">Total <span class="ml-auto">$84.00</span></h4>
          </div>
        </div>
    </div>

      <div class="max-w-4xl w-full h-max rounded-md px-4 py-8 sticky top-0">
        <h2 class="text-2xl font-bold text-gray-800">Complete your order</h2>
        <form class="mt-8">
          <div class="">
            <div class="flex items-center justify-center w-full mb-4">
              <label for="file-upload" class="flex flex-col items-center justify-center w-full h-44 border-2 border-dashed border-gray-300 rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                  <div class="flex flex-col items-center justify-center pt-5 pb-6">
                      <svg aria-hidden="true" class="w-8 h-8 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V12m0 0V8m0 4H3.5a2.5 2.5 0 00-2.5 2.5V17.5A2.5 2.5 0 003.5 20H5m14-4v4a2.5 2.5 0 002.5 2.5H20m-4-4v-4a2.5 2.5 0 00-2.5-2.5H12"></path>
                      </svg>
                      <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                      <p class="text-xs text-gray-500">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                      <p id="file-name" class="text-sm text-gray-500 mt-2"></p>
                  </div>
                  <input id="file-upload" name="proof_of_payment" type="file" class="hidden" onchange="showFileName()">
              </label>
          </div>
          </div>

          <div class="mt-8">
            <h3 class="mb-4 text-red-500">Lengkapi alamat dan nomor telepon anda</h3>
            <div class="grid md:grid-cols-2 gap-4">
              <div>
                <input type="text" placeholder="Alamat"
                  class="px-4 py-3 bg-gray-100 focus:bg-transparent text-gray-800 w-full text-sm rounded-md border-2 focus:border-green-700" />
              </div>
              <div>
                <input type="text" placeholder="No telepon"
                  class="px-4 py-3 bg-gray-100 focus:bg-transparent text-gray-800 w-full text-sm rounded-md border-2 focus:border-green-700" />
              </div>
            </div>

            <div class="flex gap-4 max-md:flex-col mt-8">
              <button type="button" class="rounded-md px-4 py-2.5 w-full text-sm tracking-wide border-2 border-green-700 text-black hover:text-white hover:bg-green-700 transition delay-100 duration-100 ease-in-out">Complete Purchase</button>
            </div>
          </div>
        </form>
      </div>
        <div class="pt-4 mt-4">
          <h1 class="text-2xl font-bold text-gray-800 pl-4">Rekening yang tersedia :</h1>
          <div class="ml-5 mt-8">
            <img src="uploads/payment/dana.jpg" alt="" class="w-16 h-11 rounded-lg"><h1 class="pl-20 -mt-8">17625936</h1>
            <img src="uploads/payment/ovo.jpg" alt="" class="w-16 h-11 mt-5 rounded-lg"><h1 class="pl-20 -mt-8">87645762</h1>
            <img src="uploads/payment/gopay.jpg" alt="" class="w-16 h-11 mt-5 rounded-lg"><h1 class="pl-20 -mt-8">17627543</h1>
            <img src="uploads/payment/ShopeePay.jpg" alt="" class="w-16 h-11 mt-5 rounded-lg"><h1 class="pl-20 -mt-8">17689065</h1>
          </div>
          <div class="w-px h-[215px] ml-[190px] -mt-[205px] bg-gray-400"></div>
          <div class="ml-52 -mt-[213px]">
            <img src="uploads/payment/bca.png" alt="" class="w-16 h-11 rounded-lg"><h1 class="pl-20 -mt-8">18751936</h1>
            <img src="uploads/payment/bni.png" alt="" class="w-16 h-11 mt-5 rounded-lg"><h1 class="pl-20 -mt-8">80535762</h1>
            <img src="uploads/payment/bri.jpg" alt="" class="w-16 h-11 mt-5 rounded-lg"><h1 class="pl-20 -mt-8">10917243</h1>
            <img src="uploads/payment/mandiri.png" alt="" class="w-16 h-11 mt-5 rounded-lg"><h1 class="pl-20 -mt-8">17019065</h1>
          </div>
        </div>
    </div>
  </div>
@endsection