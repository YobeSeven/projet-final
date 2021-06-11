@extends('layouts.index-admin')
@section('content-admin')
@include('layouts.flash')

<section class="w-full mt-10 max-w-sm p-6 m-auto bg-gray-100 rounded-md shadow-md">
    <h3 class="text-3xl font-semibold text-center text-gray-700">
        Create BLOG
    </h3>
    <form action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label class="mt-2" for="titre">
                Titre
            </label>
            <input id="titre" name="titre" type="text" value="{{old('titre')}}"
            class="w-full px-4 py-2 mt-2 border rounded-md">
            @error('titre')
            <span class="text-red-400">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
        <div>
            <label class="mt-2" for="article">
                Article
            </label>
            <textarea cols="30" rows="10" class="w-full px-4 py-2 mt-2 border rounded-md" 
            id="article" name="article">{{old('article')}}</textarea>
        </div>
        <div>
            <label class="mt-2" for="image">
                image
            </label>
            <input id="image" name="image" type="file" 
            class="w-full px-4 py-2 mt-2 border rounded-md">
            @error('image')
            <span class="text-red-400">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
        <div>
            <label class="mt-2" for="">
                Choose categorie
            </label>
            <select name="categorie_id" id="categorie_id">
                <option value="1">Developpement</option>
                <option value="2">Design</option>
                <option value="3">Ressource</option>
                <option value="4">Economie</option>
            </select>
            @error('categorie_id')
            <span class="text-red-400">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>

        <div>
            <label class="mt-2" for="tag_id">
                Choose Tag
            </label>
            <select name="tag_id" id="tag_id">
                <option value="1">article</option>
                <option value="2">for people</option>
                <option value="3">interview</option>
                <option value="4">new</option>
            </select>
            @error('tag_id')
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