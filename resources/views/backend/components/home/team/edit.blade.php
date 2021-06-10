@extends('layouts.index-admin')
@section('content-admin')
@include('layouts.flash')
<section class="w-full mt-10 max-w-sm p-6 m-auto bg-gray-100 rounded-md shadow-md">
    <h3 class="text-3xl font-semibold text-center text-gray-700">
        Update About-Section
    </h3>
    <form action="" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label class="mt-2" for="">
                Titre
            </label>
            <input id="" name="" type="text" value=""
            class="w-full px-4 py-2 mt-2 border rounded-md">
            @error('')
            <span class="text-red-400">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
        <div>
            <label class="mt-2" for="">
                Premier texte
            </label>
            <textarea cols="30" rows="10" class="w-full px-4 py-2 mt-2 border rounded-md" 
            id="" name=""></textarea>
        </div>
        <div>
            <label class="mt-2" for="">
                youtube
            </label>
            <input id="" name="" type="url" pattern="https?://.*" value="" 
            class="w-full px-4 py-2 mt-2 border rounded-md">
            @error('')
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