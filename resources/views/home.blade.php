@extends('layouts.main')

@section('container')
<div class="lg:flex mx-auto w-max h-max">
    <div class="lg:mt-16 p-8 lg:p-0">
        <h1 class="font-bold text-3xl">Selamat Datang</h1>
        <h1 class="font-semibold text-lg">Di Website E-COMMERCE</h1>
        <h1 class="text-md">Website ini bertujuan supaya karyawan nyaman untuk presensi 😜✌️</h1>
        <h1 class="text-md text-blue-400">Hope You Enjoy !!</h1>
    </div>
    <div>
        <img src="{{ asset('image/office.jpg')}}" alt="" width="700px" height="400px" class="mt-20 lg:mt-0 lg:ml-56">
    </div>
</div>
@endsection
