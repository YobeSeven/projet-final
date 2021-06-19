@extends('layouts.index-admin')
@section('content-admin')
<section>
    <table class="container text-center">
        <thead>
            <tr>
                <th>#</th>
                <th>Subject</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($subjects as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->subject}}</td>
                    <td>
                        <a href="{{route('subject.edit' , $item->id)}}">Modifier</a>
                    </td>
                    <td>
                        <form action="{{route('subject.destroy' , $item->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
        <a href="{{route('subject.create')}}">Create</a>
    </div>
</section>
@endsection