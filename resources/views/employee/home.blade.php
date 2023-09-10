@extends('layouts.employee')

@section('container')
<div class="lg:flex mx-auto lg:gap-72">
    <form action="/dashboard/{{ Auth()->User()->id }}" method="post">
        @csrf
        @if (session('status'))
            <p class="absolute top-40 text-green-600 w-max h-max px-3 py-2 bg-slate-100 rounded-full ">{{ session('status') }}</p>
        @endif
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 duration-100 w-max h-max px-4 py-1 shadow-lg mt-52 rounded-full text-white text-lg">Klik Disini Untuk Absen</button>
    </form>
    <div class="mt-10 lg:mt-0 w-max h-max shadow-xl">
        <img src="{{ asset('image/login.jpg')}}" alt="" width="400px" height="200px" class="w-72 lg:w-80">
    </div>
</div>
@endsection