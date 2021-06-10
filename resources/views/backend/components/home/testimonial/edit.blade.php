@extends('layouts.index-admin')
@section('content-admin')
@include('layouts.flash')
<section class="w-full mt-10 max-w-sm p-6 m-auto bg-gray-100 rounded-md shadow-md">
    <h3 class="text-3xl font-semibold text-center text-gray-700">
        Update About-Section
    </h3>
    <form action="{{route('testimonial.update' , $testimonial->id)}}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label class="mt-2" for="texte_client">
                texte CLient
            </label>
            <textarea cols="30" rows="10" class="w-full px-4 py-2 mt-2 border rounded-md" 
            id="texte_client" name="texte_client">{{$testimonial->texte_client}}</textarea>
        </div>
        <div>
            <label class="mt-2" for="image_client">
                Image Client
            </label>
            <input id="image_client" name="image_client" type="file"
            class="w-full px-4 py-2 mt-2 border rounded-md">
            @error('image_client')
            <span class="text-red-400">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
        <div>
            <label class="mt-2" for="nom_client">
                nom
            </label>
            <input id="nom_client" name="nom_client" type="text" value="{{$testimonial->nom_client}}" 
            class="w-full px-4 py-2 mt-2 border rounded-md">
            @error('nom_client')
            <span class="text-red-400">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
        <div>
            <label class="mt-2" for="job_client">
                job
            </label>
            <input id="job_client" name="job_client" type="text" value="{{$testimonial->job_client}}" 
            class="w-full px-4 py-2 mt-2 border rounded-md">
            @error('job_client')
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