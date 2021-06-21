@extends('layouts.index-admin')
@section('content-admin')

<div class="md:px-32 py-8 w-full">
    <h2 class="text-center">SUBJECT</h2>
    <div class="shadow overflow-hidden rounded border-b border-gray-200">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">#</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Subject</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">MODIFIER</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">SUPPRIMER</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach ($subjects as $item)
                    <tr>
                        <td class="text-left py-3 px-4">{{$loop->iteration}}</td>
                        <td class="text-left py-3 px-4">{{$item->subject}}</td>
                        <td class="text-left py-3 px-4">
                            <a href="{{route('subject.edit' , $item->id)}}">Modifier</a>
                        </td>
                        <td class="text-left py-3 px-4">
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
    </div>
</div>

@endsection