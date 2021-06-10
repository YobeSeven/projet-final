@extends('layouts.index-admin')
@section('content-admin')
@include('layouts.flash')
<section class="w-full mt-10 max-w-sm p-6 m-auto bg-gray-100 rounded-md shadow-md">
    <h3 class="text-3xl font-semibold text-center text-gray-700">
        Update About-Section
    </h3>
    <form action="{{route('aboutSection.update' , $aboutSection->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label class="mt-2" for="titre_section">
                Titre
            </label>
            <input id="titre_section" name="titre_section" type="text" value="{{$aboutSection->titre_section}}"
            class="w-full px-4 py-2 mt-2 border rounded-md">
            @error('titre_section')
            <span class="text-red-400">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
        <div>
            <label class="mt-2" for="texte_premier_section">
                Premier texte
            </label>
            <textarea cols="30" rows="10" class="w-full px-4 py-2 mt-2 border rounded-md" 
            id="texte_premier_section" name="texte_premier_section"></textarea>
        </div>
        <div>
            <label class="mt-2" for="texte_deuxieme_section">
                Deuxieme texte
            </label>
            <textarea cols="30" rows="10" class="w-full px-4 py-2 mt-2 border rounded-md" 
            id="texte_deuxieme_section" name="texte_deuxieme_section"></textarea>
        </div>
        <div>
            <label class="mt-2" for="lien">
                Lien youtube
            </label>
            <input id="lien" name="lien" type="url" pattern="https?://.*" value="{{$aboutSection->lien}}" 
            class="w-full px-4 py-2 mt-2 border rounded-md">
            @error('lien')
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