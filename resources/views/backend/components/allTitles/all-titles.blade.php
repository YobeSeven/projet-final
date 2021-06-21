@extends('layouts.index-admin')
@section('content-admin')
<section>
    <h1>HOME</h1>
    <table class="container text-center">
        <thead>
            <tr>
                <th>#</th>
                <th>Section</th>
                <th>Service</th>
                <th>Team</th>
                <th>Testimonial</th>
                <th>Modifier</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($homeTitres as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->titre_section}}</td>
                    <td>{{$item->titre_service}}</td>
                    <td>{{$item->titre_team}}</td>
                    <td>{{$item->titre_testimonial}}</td>
                    <td>
                        <a href="{{route('editTitreHome.edit' , $item->id)}}">Modifier</a>
                    </td>
                </tr>                
            @endforeach
        </tbody>
    </table>
</section>

<section>
    <h1>HOME</h1>
    <table class="container text-center">
        <thead>
            <tr>
                <th>#</th>
                <th>feature</th>
                <th>Section</th>
                <th>Modifier</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($serviceTitres as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->feature}}</td>
                    <td>{{$item->section}}</td>
                    <td>
                        <a href="{{route('editTitreService.edit' , $item->id)}}">Modifier</a>
                    </td>
                </tr>                
            @endforeach
        </tbody>
    </table>
</section>
@endsection