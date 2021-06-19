@extends('layouts.index-admin')
@section('content-admin')
<section>
    <table class="container text-center">
        <thead>
            <tr>
                <th>#</th>
                <th>email</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($newsletters as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->mail}}</td>
                    <td>
                        <form action="{{route('newsletter.destroy', $item->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection