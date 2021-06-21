@extends('layouts.index-admin')
@section('content-admin')
@include('layouts.flash')

<section class="w-full mt-10 max-w-sm p-6 m-auto bg-gray-100 rounded-md shadow-md">
    <h3 class="text-3xl font-semibold text-center text-gray-700">
        Update Title Service
    </h3>
    <form action="{{route('updateTitreService.update' , $serviceTitre->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label class="mt-2" for="feature">
                Titre Feature
            </label>
            <input id="feature" name="feature" type="text" value="{{$serviceTitre->feature}}"
            class="w-full px-4 py-2 mt-2 border rounded-md">
            @error('feature')
            <span class="text-red-400">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
        <div>
            <label class="mt-2" for="section">
                Titre Section
            </label>
            <input id="section" name="section" type="text" value="{{$serviceTitre->section}}"
            class="w-full px-4 py-2 mt-2 border rounded-md">
            @error('section')
            <span class="text-red-400">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
        <button type="submit"
        class="w-full px-4 py-2 mt-2 tracking-wide text-white bg-gray-700 rounded-md hover:bg-gray-600">
            Update
        </button>
    </form>
</section>

@endsection