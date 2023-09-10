@extends('layouts.login')

@section('container')
<div class="bg-white mx-auto w-[75%] lg:w-[30%] h-max p-4 shadow-lg shadow-slate-600">
    <form action="/login" method="post">
        @csrf
        <div>
            <h1 class="font-bold text-xl">Masuk</h1>
            <div class="w-full h-[2px] bg-black rounded-full mt-1"></div>
        </div>
        <div>
            @if(session()->has('success'))
            <div class="text-lg text-green-500">{{ session('success') }}</div>
            @endif
            @if(session()->has('loginError'))
            <div class="text-lg text-red-500">{{ session('loginError') }}</div>
            @endif
        </div>
        <div class="mt-2">
            <h1>Email</h1>
            <input type="text" class="border-2 w-full @error('email') border-red-500 @enderror" name="email" id="email" value="{{ old('email') }}" placeholder="Email">
            @error('email')
            <div class="text-red-500">
                {{ $message }}
            </div>
            @enderror
            </div>
            <div class="mt-2">
                <h1>Password</h1>
                <input type="password" class="border-2 w-full @error('password') border-red-500 @enderror" name="password" id="password" value="{{ old('password') }}" 
                placeholder="Password">
                @error('password')
                <div class="text-red-500">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mt-4 w-max h-max px-2 py-1 bg-blue-300 rounded-xl hover:bg-blue-500 duration-75 mx-auto">
                <button class="text-lg text-white font-bold" type="submit">Masuk</button>
            </div>
        </form>
        <div class="mt-5">
            <div class="w-full h-[2px] bg-black rounded-full mt-1"></div>
            <h1 class="mt-4">Tidak punya akun?<a href="/register" class="text-blue-500"> Klik disini </a>untuk membuat</h1>
    </div>
</div>
@endsection