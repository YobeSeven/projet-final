@extends('layouts.index-auth')
@section('content-auth')
@include('layouts.flash')

<body class="bg-white font-family-karla h-screen">
    <div class="w-full flex flex-wrap">

        <!-- Login Section -->
        <div class="w-full md:w-1/2 flex flex-col">

            <div class="flex justify-center md:justify-start pt-12 md:pl-12 md:-mb-24">
                <img src="{{asset('img/logo.png')}}" alt="">
            </div>

            <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
                <p class="text-center text-3xl">Welcome.</p>
                <form action="{{route('login.store')}}" method="GET" class="flex flex-col pt-3 md:pt-8">
                    <div class="flex flex-col pt-4">
                        <label for="email" class="text-lg">Email</label>
                        <input type="email" id="email" name="email" value="{{old('email')}}" placeholder="your@email.com" 
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                        @error('email')
                        <span class="text-red-400">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
    
                    <div class="flex flex-col pt-4">
                        <label for="password" class="text-lg">Password</label>
                        <input type="password" id="password" name="password" placeholder="Password" 
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline">
                        @error('password')
                        <span class="text-red-400">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
    
                    <input type="submit" value="Log In" class="bg-black text-white font-bold text-lg hover:bg-gray-700 p-2 mt-8">
                </form>
                <div class="text-center pt-12 pb-12">
                    <p>Don't have an account? 
                        <a href="{{route('register')}}" class="underline font-semibold">
                            Register here.
                        </a>
                    </p>
                </div>
                <div class="text-center pb-12">
                    <p>Forgot Password?
                        <a href="{{route('forgot-password')}}" class="underline font-semibold">
                            Click here.
                        </a>
                    </p>
                </div>
                
            </div>

        </div>

        <!-- Image Section -->
        <div class="w-1/2 shadow-2xl">
            <img class="object-cover w-full h-screen hidden md:block" src="{{asset('img/02.jpg')}}">
        </div>
    </div>
</body>
@endsection