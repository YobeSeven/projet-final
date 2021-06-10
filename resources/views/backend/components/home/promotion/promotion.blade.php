@extends('layouts.index-admin')
@section('content-admin')
<section>
    <table class="container text-center">
        <thead>
            <tr>
                <th>#</th>
                <th>titre</th>
                <th>texte</th>
                <th>Modifier</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($promotions as $item)
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->titre_promotion}}</td>                    
                    <td>{{$item->texte_promotion}}</td>                    
                    <td>
                        <a href="{{route('promotion.edit' , $item->id)}}">Modifier</a>
                    </td>                    
                @endforeach
            </tr>
        </tbody>
    </table>
</section>
@endsection