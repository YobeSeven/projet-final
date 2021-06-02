@extends('layouts.index-auth')
@section('content-auth')
@include('layouts.flash')

<body class="bg-white font-family-karla h-screen">

    <div class="w-full flex flex-wrap">

        <!-- Register Section -->
        <div class="w-full md:w-1/2 flex flex-col">

            <div class="flex justify-center md:justify-start pt-12 md:pl-12 md:-mb-12">
                <img src="{{asset('img/logo.png')}}" alt="">
            </div>

            <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
                <p class="text-center text-3xl">
                    Join Us.
                </p>
                <form action="{{route('register.store')}}" method="POST" class="flex flex-col pt-3 md:pt-8">
                    @csrf
                    <div class="flex flex-col pt-4">
                        <label for="name" class="text-lg">
                            Name
                        </label>
                        <input type="text" id="name" name="name" value="{{old('name')}}" placeholder="John Smith" 
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" />
                        @error('name')
                        <span class="text-red-400">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="flex flex-col pt-4">
                        <label for="email" class="text-lg">
                            Email
                        </label>
                        <input type="email" id="email" name="email" value="{{old('email')}}" placeholder="your@email.com" 
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" />
                        @error('email')
                        <span class="text-red-400">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="flex flex-col pt-4">
                        <select name="poste_id" id="poste_id">
                            <option value="" selected disabled>Select poste</option>
                            <option value="2">C.E.O</option>
                            <option value="3">Entrepreneur</option>
                            <option value="4">Web Developpeur</option>
                        </select>
                        @error('poste_id')
                        <span class="text-red-400">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="flex flex-col pt-4">
                        <label for="password" class="text-lg">
                            Password
                        </label>
                        <input type="password" id="password" name="password" placeholder="Password" 
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" />
                        @error('password')
                        <span class="text-red-400">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="flex flex-col pt-4">
                        <label for="password_confirmation" class="text-lg">
                            Confirm Password
                        </label>
                        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Password"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" />
                        @error('password_confirmation')
                        <span class="text-red-400">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
    
                    <input type="submit" value="Register" 
                    class="bg-black text-white font-bold text-lg hover:bg-gray-700 p-2 mt-8" />
                </form>
                <div class="text-center pt-12 pb-12">
                    <p>Already have an account?
                        <a href="{{route('login')}}" class="underline font-semibold">
                            Log in here.
                        </a>
                    </p>
                </div>
            </div>

        </div>

        <!-- Image Section -->
        <div class="w-1/2 shadow-2xl">
            <img class="object-cover w-full h-screen hidden md:block" src="{{asset('img/01.jpg')}}" alt="Background" />
        </div>
    </div>

</body>

@endsection