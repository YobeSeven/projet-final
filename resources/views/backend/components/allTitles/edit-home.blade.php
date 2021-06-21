@extends('layouts.index-admin')
@section('content-admin')
@include('layouts.flash')

<section class="w-full mt-10 max-w-sm p-6 m-auto bg-gray-100 rounded-md shadow-md">
    <h3 class="text-3xl font-semibold text-center text-gray-700">
        Update Title Section
    </h3>
    <form action="{{route('updateTitreHome.update' , $homeTitre->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label class="mt-2" for="titre_section">
                Titre Section
            </label>
            <input id="titre_section" name="titre_section" type="text" value="{{$homeTitre->titre_section}}"
            class="w-full px-4 py-2 mt-2 border rounded-md">
            @error('titre_section')
            <span class="text-red-400">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
        <div>
            <label class="mt-2" for="titre_service">
                Titre Service
            </label>
            <input id="titre_service" name="titre_service" type="text" value="{{$homeTitre->titre_service}}"
            class="w-full px-4 py-2 mt-2 border rounded-md">
            @error('titre_service')
            <span class="text-red-400">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
        <div>
            <label class="mt-2" for="titre_team">
                Titre Team
            </label>
            <input id="titre_team" name="titre_team" type="text" value="{{$homeTitre->titre_team}}"
            class="w-full px-4 py-2 mt-2 border rounded-md">
            @error('titre_team')
            <span class="text-red-400">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
        <div>
            <label class="mt-2" for="titre_testimonial">
                Titre Testimonial
            </label>
            <input id="titre_testimonial" name="titre_testimonial" type="text" value="{{$homeTitre->titre_testimonial}}"
            class="w-full px-4 py-2 mt-2 border rounded-md">
            @error('titre_testimonial')
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