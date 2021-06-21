@extends('layouts.index-admin')
@section('content-admin')

<div class="md:px-32 py-8 w-full">
    <h2 class="text-center">Article</h2>
    <div class="shadow overflow-hidden rounded border-b border-gray-200">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">#</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Titre</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Image</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Texte</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Catégorie</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Tag</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Modifier</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Supprimer</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach ($articles as $item)
                    @if ($item->user->id == Auth::user()->id || Auth::user()->role_id === 1 || Auth::user()->role_id === 2)
                        @if ($item->trash === 0)
                            <tr>
                                <td class="text-left py-3 px-4">{{$loop->iteration}}</td>
                                <td class="text-left py-3 px-4">{{$item->titre}}</td>
                                <td class="text-left py-3 px-4">{{$item->image}}</td>
                                <td class="text-left py-3 px-4">{{$item->article}}</td>     
                                <td class="text-left py-3 px-4">{{$item->categorie->nom_categorie}}</td>
                                <td class="text-left py-3 px-4">{{$item->tag->nom_tag}}</td>
                                @if ($item->user->id == Auth::user()->id)
                                    <td class="text-left py-3 px-4">
                                        <a href="{{route('blog.edit' , $item->id)}}">Modifier</a>
                                    </td>                                    
                                @else
                                    <td class="text-left py-3 px-4">Vous n'êtes pas résponsable de cette modification</td>
                                @endif
                                <td>
                                    <form action="{{route('blog.destroy' , $item->id)}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endif
                    @endif
                @endforeach
            </tbody>
        </table>
        <div class="text-center">
            <a href="{{route('blog.create')}}">Create</a>
        </div>
    </div>
</div>

@endsection