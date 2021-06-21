@extends('layouts.index-admin')
@section('content-admin')
    <h1>TABLEAUX ABOUT SECTION</h1>

    <section>
        <table class="container text-center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Premier texte</th>
                    <th>Deuxieme texte</th>
                    <th>Lien youtube</th>
                    <th>Modifier</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($aboutSections as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->texte_premier_section}}</td>
                        <td>{{$item->texte_deuxieme_section}}</td>
                        <td>{{$item->lien}}</td>
                        <td>
                            <a href="{{route('aboutSection.edit' , $item->id)}}">Modifier</a>
                        </td>
                    </tr>                    
                @endforeach
            </tbody>
        </table>
    </section>
@endsection