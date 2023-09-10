@extends('layouts.register')

@section('container')
<div class="bg-white mx-auto w-[75%] lg:w-[30%] h-max p-4 shadow-lg shadow-slate-600">
    <form action="/register" method="post">
        @csrf
        <div>
            <h1 class="font-bold text-xl">Daftar</h1>
            <div class="w-full h-[2px] bg-black rounded-full mt-1"></div>
        </div>
        <div>
            @if(session()->has('success'))
            <div class="text-lg text-green-400">{{ session('success') }}</div>
            @endif
            @if(session()->has('loginError'))
            <div class="text-lg text-red-400">{{ session('loginError') }}</div>
            @endif
        </div>
        <div class="mt-2">
            <h1>Nama</h1>
            <input type="text" class="border-2 w-full @error('name') border-red-500 @enderror" name="name" id="name" value="{{ old('name') }}" placeholder="Name" >
            @error('name')
            <div class="invalid-feedback text-red-500">
                {{ $message }}
            </div>
                @enderror
        </div>
        <div class="mt-2">
            <h1>NIK</h1>
            <input type="text" class="border-2 w-full @error('NIK') border-red-500 @enderror" name="NIK" id="NIK" value="{{ old('NIK') }}" placeholder="NIK">
            @error('NIK')
            <div class="invalid-feedback text-red-500">
                {{ $message }}
            </div>
                @enderror
        </div>
        <div class="mt-2">
            <h1>Email</h1>
            <input type="text" class="border-2 w-full @error('email') border-red-500 @enderror" name="email" id="email" value="{{ old('email') }}" placeholder="Email">
            @error('email')
            <div class="invalid-feedback text-red-500">
                {{ $message }}
            </div>
                @enderror
        </div>
        <div class="mt-2">
            <h1>Password</h1>
            <input type="password" class="border-2 w-full @error('password') border-red-500 @enderror" name="password" id="password" value="{{ old('password') }}" 
                placeholder="Password">
                @error('password')
                <div class="invalid-feedback text-red-500">
                    {{ $message }}
                </div>
                @enderror
        </div>
        <div class="mt-4 w-max h-max px-2 py-1 bg-blue-300 rounded-xl hover:bg-blue-500 duration-75 mx-auto">
            <button class="text-lg text-white font-bold" type="submit">Daftar</button>
        </div>
    </form>
    <div class="mt-5">
        <div class="w-full h-[2px] bg-black rounded-full mt-1"></div>
        <h1 class="mt-4">Sudah punya akun?<a href="/login" class="text-blue-500"> Klik disini </a>untuk kembali</h1>
    </div>
</div>
@endsection