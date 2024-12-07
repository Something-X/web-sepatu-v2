@extends('layouts-customer.index')
@section('title-frontend', 'ShoeCycle | Riwayat Transaksi')
@section('content-frontend')

    <div class="shadow-lg rounded-lg overflow-x-auto mb-9 mx-4 md:mx-10 mt-10 sm:mt-16 md:mt-20 lg:mt-24 xl:mt-28">
        <h1 class="text-center mb-5 font-bold uppercase text-sm md:text-xl lg:text-2xl">Riwayat Transaksi yang Anda Lakukan</h1>
    </div>
    <div class="flex items-center justify-center mt-8">
      <div class="card bg-gray-200/60 w-[1130px] h-[220px] border border-gray-600 shadow-lg shadow-black/20 backdrop-blur-md rounded-xl text-center cursor-pointer transition-all duration-500 select-none font-bold text-black hover:border-black hover:scale-[1.01] active:scale-95 active:rotate-1">
        <div class="w-[1128px] h-[40px] bg-yellow-300 top-0 rounded-t-xl">
            <h4 class="items-center justify-center text-base font-medium pt-2">DIPROSES</h4>
        </div>
        {{-- tanggal beli dan sampai  --}}
        <div>
            <p class="text-left font-normal ml-3 mt-3">Tanggal pembelian : 15 Januari 2024</p>
            <p class="text-left font-normal ml-3 mt-3">Tanggal diterima : </p>
        </div>
        {{-- button detail dan bukti pembayaran  --}}
        <div class="text-left ml-3 mt-12">
          <button class="relative overflow-hidden rounded-lg h-12 group hover:shadow-lg hover:scale-105 transition duration-500 before:absolute before:inset-0 before:rounded-lg bg-gray-400">
          <span class="relative text-white font-bold px-8 py-8"> Bukti pembayaran </span>
          </button>
          <button class="relative overflow-hidden ml-3 rounded-lg h-12 group hover:shadow-lg hover:scale-105 transition duration-500 before:absolute before:inset-0 before:rounded-lg bg-gray-400">
          <span class="relative text-white font-bold px-8 py-8"> Lihat detail </span>
          </button>
        </div>
        {{-- Total pembayaran  --}}
        <div class="text-right mr-3 -mt-[120px]">
          <p>Total pembayaran : Rp100.000.000</p>
        </div>
        {{-- Status pengiriman  --}}
        <div class="text-right mr-3 mt-12">
          <button class="relative overflow-hidden rounded-lg w-[190px] h-12 bg-yellow-300">
            <span class="relative text-white font-bold px-8 py-8"> Dikirim </span>
          </button>
        </div>
      </div>
    </div>
    <div class="flex items-center justify-center mt-8">
      <div class="card bg-gray-200/60 w-[1130px] h-[220px] border border-gray-600 shadow-lg shadow-black/20 backdrop-blur-md rounded-xl text-center cursor-pointer transition-all duration-500 select-none font-bold text-black hover:border-black hover:scale-[1.01] active:scale-95 active:rotate-1">
        <div class="w-[1128px] h-[40px] bg-green-500 top-0 rounded-t-xl">
            <h4 class="items-center justify-center text-base font-medium pt-2">SELESAI</h4>
        </div>
        {{-- tanggal beli dan sampai  --}}
        <div>
            <p class="text-left font-normal ml-3 mt-3">Tanggal pembelian : 15 Januari 2024</p>
            <p class="text-left font-normal ml-3 mt-3">Tanggal diterima : 24 Januari 2024</p>
        </div>
        {{-- button detail dan bukti pembayaran  --}}
        <div class="text-left ml-3 mt-12">
          <button class="relative overflow-hidden rounded-lg h-12 group hover:shadow-lg hover:scale-105 transition duration-500 before:absolute before:inset-0 before:rounded-lg bg-gray-400">
          <span class="relative text-white font-bold px-8 py-8"> Bukti pembayaran </span>
          </button>
          <button class="relative overflow-hidden ml-3 rounded-lg h-12 group hover:shadow-lg hover:scale-105 transition duration-500 before:absolute before:inset-0 before:rounded-lg bg-gray-400">
          <span class="relative text-white font-bold px-8 py-8"> Lihat detail </span>
          </button>
        </div>
        {{-- Total pembayaran  --}}
        <div class="text-right mr-3 -mt-[120px]">
          <p>Total pembayaran : Rp100.000.000</p>
        </div>
        {{-- Status pengiriman  --}}
        <div class="text-right mr-3 mt-12">
          <button class="relative overflow-hidden rounded-lg w-[190px] h-12 bg-green-500">
            <span class="relative text-white font-bold px-8 py-8">Terkirim</span>
          </button>
        </div>
      </div>
    </div>
    <div class="flex items-center justify-center mt-8">
      <div class="card bg-gray-200/60 w-[1130px] h-[220px] border border-gray-600 shadow-lg shadow-black/20 backdrop-blur-md rounded-xl text-center cursor-pointer transition-all duration-500 select-none font-bold text-black hover:border-black hover:scale-[1.01] active:scale-95 active:rotate-1">
        <div class="w-[1128px] h-[40px] bg-red-500 top-0 rounded-t-xl">
            <h4 class="items-center justify-center text-base font-medium pt-2">DIBATALKAN</h4>
        </div>
        {{-- tanggal beli dan sampai  --}}
        <div>
            <p class="text-left font-normal ml-3 mt-3">Tanggal pembelian : 15 Januari 2024</p>
            <p class="text-left font-normal ml-3 mt-3">Tanggal diterima : </p>
        </div>
        {{-- button detail dan bukti pembayaran  --}}
        <div class="text-left ml-3 mt-12">
          <button class="relative overflow-hidden rounded-lg h-12 group hover:shadow-lg hover:scale-105 transition duration-500 before:absolute before:inset-0 before:rounded-lg bg-gray-400">
          <span class="relative text-white font-bold px-8 py-8"> Bukti pembayaran </span>
          </button>
          <button class="relative overflow-hidden ml-3 rounded-lg h-12 group hover:shadow-lg hover:scale-105 transition duration-500 before:absolute before:inset-0 before:rounded-lg bg-gray-400">
          <span class="relative text-white font-bold px-8 py-8"> Lihat detail </span>
          </button>
        </div>
        {{-- Total pembayaran  --}}
        <div class="text-right mr-3 -mt-[120px]">
          <p>Total pembayaran : Rp100.000.000</p>
        </div>
        {{-- Status pengiriman  --}}
        <div class="text-right mr-3 mt-12">
          <button class="relative overflow-hidden rounded-lg w-[190px] h-12 bg-red-500">
            <span class="relative text-white font-bold px-8 py-8"> Dibatalkan </span>
          </button>
        </div>
      </div>
    </div>
    <div class="flex items-center justify-center mt-8">
      <div class="card bg-gray-200/60 w-[1130px] h-[220px] border border-gray-600 shadow-lg shadow-black/20 backdrop-blur-md rounded-xl text-center cursor-pointer transition-all duration-500 select-none font-bold text-black hover:border-black hover:scale-[1.01] active:scale-95 active:rotate-1">
        <div class="w-[1128px] h-[40px] bg-gray-400 top-0 rounded-t-xl">
            <h4 class="items-center justify-center text-base font-medium pt-2">PENDING</h4>
        </div>
        {{-- tanggal beli dan sampai  --}}
        <div>
            <p class="text-left font-normal ml-3 mt-3">Tanggal pembelian : 15 Januari 2024</p>
            <p class="text-left font-normal ml-3 mt-3">Tanggal diterima : </p>
        </div>
        {{-- button detail dan bukti pembayaran  --}}
        <div class="text-left ml-3 mt-12">
          <button class="relative overflow-hidden rounded-lg h-12 group hover:shadow-lg hover:scale-105 transition duration-500 before:absolute before:inset-0 before:rounded-lg bg-gray-400">
          <span class="relative text-white font-bold px-8 py-8"> Bukti pembayaran </span>
          </button>
          <button class="relative overflow-hidden ml-3 rounded-lg h-12 group hover:shadow-lg hover:scale-105 transition duration-500 before:absolute before:inset-0 before:rounded-lg bg-gray-400">
          <span class="relative text-white font-bold px-8 py-8"> Lihat detail </span>
          </button>
        </div>
        {{-- Total pembayaran  --}}
        <div class="text-right mr-3 -mt-[120px]">
          <p>Total pembayaran : Rp100.000.000</p>
        </div>
        {{-- Status pengiriman  --}}
        <div class="text-right mr-3 mt-12">
          <button class="relative overflow-hidden rounded-lg w-[190px] h-12 bg-gray-400">
            <span class="relative text-white font-bold px-8 py-8">Pending</span>
          </button>
        </div>
      </div>
    </div>
    
@endsection
