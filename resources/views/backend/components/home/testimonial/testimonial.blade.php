@extends('layouts.index-admin')
@section('content-admin')
<section>
    <table class="container text-center">
        <thead>
            <tr>
                <th>#</th>
                <th>Texte Client</th>
                <th>Image Client</th>
                <th>Nom Client</th>
                <th>Job Client</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($testimonials as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->texte_client}}</td>
                    <td>{{$item->image_client}}</td>
                    <td>{{$item->nom_client}}</td>
                    <td>{{$item->job_client}}</td>
                    <td>
                        <a href="{{route('testimonial.edit' , $item->id)}}">Modifier</a>
                    </td>
                </tr>                    
            @endforeach
        </tbody>
    </table>
</section>
@endsection