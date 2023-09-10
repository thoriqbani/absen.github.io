<div class="w-full h-20 p-4 flex shadow relative z-10">
    @auth
    <div class="flex">
        <img src="{{ asset('image/logo.png')}}" alt="" width="60px" height="20px" class="w-16 h-16 lg:ml-16">
        <h1 class="font-sans mt-5 lg:mt-3 ml-3 font-bold text-blue-500 text-lg lg:text-2xl">e-commerce</h1>
    </div>
    <button id="hamburger" class="mt-4 lg:hidden absolute right-12">
        <span class="w-[30px] h-[2px] bg-black block mt-2 duration-300 ease-in-out"></span>
        <span class="w-[30px] h-[2px] bg-black block mt-2 duration-300 ease-in-out"></span>
        <span class="w-[30px] h-[2px] bg-black block mt-2 duration-300 ease-in-out"></span>
    </button>
    <div id="" class="hidden absolute left-96 top-10 lg:flex">
        <p class="lg:mr-8 text-sm lg:text-md font-bold text-black">Welcome Back, {{ auth()->user()->name }}</p>
    </div>
    <div id="nav-menu" class="hidden absolute right-12 top-20 lg:top-4 lg:mt-5 lg:flex lg:gap-5 bg-white shadow-xl lg:shadow-none">
        <div class="py-3 px-5 lg:p-0">
            <a href="/dashboard" class="text-md font-semibold lg:font-bold text-black hover:text-blue-300 active:text-blue-300 focus:text-blue-500">Absen</a>
        </div>
        <div class="py-3 px-5 lg:p-0">
            <a href="/dashboard/view" class="text-md font-semibold lg:font-bold text-black hover:text-blue-300 active:text-blue-300 focus:text-blue-500">Lihat Karyawan</a>
        </div>
        <div class="py-3 px-5 lg:p-0">
            <a href="/dashboard/history" class="text-md font-semibold lg:font-bold text-black hover:text-blue-300 active:text-blue-300 focus:text-blue-500">History Absen</a>
        </div>
        <form action="/logout" method="post" class="py-3 px-5 lg:p-0">
            @csrf
            <button  type="submit" class="w-max h-max flex bg-white duration-75 text-md font-semibold lg:font-bold text-black hover:text-blue-300 active:text-blue-300 focus:text-blue-500">
                <p href="" class="">Keluar</p>
            </button>
        </form>
    </div>
    @else
    <div class="flex">
        <img src="{{ asset('image/logo.png')}}" alt="" width="60px" height="20px" class="w-16 h-16 lg:ml-16">
        <h1 class="font-sans mt-5 lg:mt-3 ml-3 font-bold text-blue-500 text-lg lg:text-2xl">e-commerce</h1>
    </div>
    <button id="hamburger" class="mt-4 lg:hidden absolute right-12">
        <span class="w-[30px] h-[2px] bg-black block mt-2 duration-300 ease-in-out"></span>
        <span class="w-[30px] h-[2px] bg-black block mt-2 duration-300 ease-in-out"></span>
        <span class="w-[30px] h-[2px] bg-black block mt-2 duration-300 ease-in-out"></span>
    </button>
    <div id="nav-menu" class="hidden absolute right-12 top-20 lg:top-8 lg:right-20 lg:flex lg:gap-10 bg-white shadow-xl lg:shadow-none">
        <div class="py-3 px-10 lg:p-0">
            <a href="/" class="text-md font-semibold lg:font-bold text-black hover:text-blue-300 active:text-blue-300 focus:text-blue-500 ">Home</a>
        </div>
        <div class="py-3 px-10 lg:p-0">
            <a href="" class="text-md font-semibold lg:font-bold text-black hover:text-blue-300 active:text-blue-300 focus:text-blue-500 ">Beranda</a>
        </div>
        <div class="py-3 px-10 lg:p-0">
            <a href="/login" class=" duration-75 text-md font-semibold lg:font-bold text-black hover:text-blue-300 active:text-blue-300 focus:text-blue-500 ">Login</a>
        </div>
    </div>
    @endauth
</div>

<script>
    const hamburger = document.querySelector('#hamburger');
    const nav = document.querySelector('#nav-menu');
    hamburger.addEventListener('click', function(){
        hamburger.classList.toggle('hamburger-aktif');
        nav.classList.toggle('hidden');
    });
</script>