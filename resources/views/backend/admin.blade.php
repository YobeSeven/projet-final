@extends('layouts.index-admin')
@section('content-admin')
    <div class="text-center mt-10">
        <h1>Welcome to the backoffice of the LABS projects</h1>
    </div>
    @Admin
    <h1 class="text-center">CRUD POUR L'ADMIN</h1>
    <section class="flex justify justify-around">
        <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20">
            <div>
                <h2 class="text-gray-800 text-3xl font-semibold">ALL TITLE</h2>
                <p class="mt-2 text-gray-600">Ici vous pourrez changer tout les titres de votre page</p>
            </div>
            <div class="flex justify-end mt-4">
                <a href="{{route('all-title.index')}}" class="text-xl font-medium text-indigo-500">Y allez</a>
            </div>
        </div>
        <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20">
            <div>
                <h2 class="text-gray-800 text-3xl font-semibold">About Section</h2>
                <p class="mt-2 text-gray-600">Pour mettre des modifications dans votre partie about section</p>
            </div>
            <div class="flex justify-end mt-4">
                <a href="{{route('aboutSection.index')}}" class="text-xl font-medium text-indigo-500">Y allez</a>
            </div>
        </div>
        <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20">
            <div>
                <h2 class="text-gray-800 text-3xl font-semibold">Testimonial</h2>
                <p class="mt-2 text-gray-600">Pour mettre des modifications dans votre partie Testimonial</p>
            </div>
            <div class="flex justify-end mt-4">
                <a href="{{route('testimonial.index')}}" class="text-xl font-medium text-indigo-500">Y allez</a>
            </div>
        </div>
    </section>
    <section class="flex justify justify-around">
        <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20">
            <div>
                <h2 class="text-gray-800 text-3xl font-semibold">Promotion</h2>
                <p class="mt-2 text-gray-600">Pour mettre des modifications dans votre partie Promotion</p>
            </div>
            <div class="flex justify-end mt-4">
                <a href="{{route('promotion.index')}}" class="text-xl font-medium text-indigo-500">Y allez</a>
            </div>
        </div>
        <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20">
            <div>
                <h2 class="text-gray-800 text-3xl font-semibold">footer</h2>
                <p class="mt-2 text-gray-600">Pour mettre des modifications dans votre partie footer</p>
            </div>
            <div class="flex justify-end mt-4">
                <a href="{{route('footer.index')}}" class="text-xl font-medium text-indigo-500">Y allez</a>
            </div>
        </div>
        <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20">
            <div>
                <h2 class="text-gray-800 text-3xl font-semibold">subject</h2>
                <p class="mt-2 text-gray-600">Pour mettre des modifications dans votre partie subject</p>
            </div>
            <div class="flex justify-end mt-4">
                <a href="{{route('subject.index')}}" class="text-xl font-medium text-indigo-500">Y allez</a>
            </div>
        </div>
    </section>
    @endAdmin
@endsection