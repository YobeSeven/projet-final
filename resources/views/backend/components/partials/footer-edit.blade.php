@extends('layouts.index-admin')
@section('content-admin')

<div class="mx-auto text-center">
    <h1>FOOTER UPDATE</h1>
    <a href="{{route('footer.index')}}">footer</a>
</div>
<section class="w-full mt-10 max-w-sm p-6 m-auto bg-gray-100 rounded-md shadow-md">
    <h3 class="text-3xl font-semibold text-center text-gray-700">
        Update Footer
    </h3>
    <form action="{{route('footer.update' , $footer->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label class="mt-2 for="texte">Texte :</label>
            <input type="text" name="texte" id="texte" value="{{$footer->texte}}"
            class="w-full px-4 py-2 mt-2 border rounded-md">
            @error('email')
            <span class="text-red-400">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
        <div>
            <label class="mt-2 for="">Lien :</label>
            <input pattern="https?://.*" type="url" name="lien" id="lien" value="{{$footer->lien}}"
            class="w-full px-4 py-2 mt-2 border rounded-md">
            @error('email')
            <span class="text-red-400">
                <strong>{{$message}}</strong>
            </span>
            @enderror

        </div>
        <div>
            <label class="mt-2 for="lien_texte">Texte pour Lien</label>
            <input type="text" name="lien_texte" id="lien_texte" value="{{$footer->lien_texte}}"
            class="w-full px-4 py-2 mt-2 border rounded-md">
            @error('email')
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