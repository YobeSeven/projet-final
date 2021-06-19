@extends('layouts.index-admin')
@section('content-admin')
<section>
    <table class="container text-center">
        <thead>
            <tr>
                <th>#</th>
                <th>Titre</th>
                <th>Image</th>
                <th>Texte</th>
                <th>Categorie</th>
                <th>Tag</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $item)
                @if ($item->user->id == Auth::user()->id)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->titre}}</td>
                        <td>{{$item->image}}</td>
                        <td>{{$item->article}}</td>
                        <td>{{$item->categorie->nom_categorie}}</td>
                        <td>{{$item->tag->nom_tag}}</td>
                        <td>
                            <a href="{{route('blog.edit' , $item->id)}}">Modifier</a>
                        </td>
                        <td>
                            <form action="{{route('blog.destroy' , $item->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
        <a href="{{route('blog.create')}}">Create</a>
    </div>
</section>
@endsection