@extends('layouts.index-admin')
@section('content-admin')
    <section class="container">
        <div class="mx-auto text-center">
            <h1>FOOTER COMPONENTS</h1>
            <a href="{{route('admin')}}">admin</a>
        </div>
        <table class="container text-center">
            <thead>
                <tr>
                    <th>texte</th>
                    <th>lien</th>
                    <th>texte pour lien</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($footers as $item)
                <tr>
                    <td>{{$item->texte}}</td>
                    <td>{{$item->lien}}</td>
                    <td>{{$item->lien_texte}}</td>
                    <td><a href="{{route('footer.edit', $item->id)}}">Modifier</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection