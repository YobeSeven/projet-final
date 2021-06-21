@extends('layouts.index-admin')
@section('content-admin')

<div class="md:px-32 py-8 w-full">
    <h2 class="text-center">TESTIMONIAL</h2>
    <div class="shadow overflow-hidden rounded border-b border-gray-200">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">#</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Texte Client</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Image Client</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nom Client</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Job Client</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">MODIFIER</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">SUPPRIMER</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach ($testimonials as $item)
                    <tr>
                        <td class="text-left py-3 px-4">{{$loop->iteration}}</td>
                        <td class="text-left py-3 px-4">{{$item->texte_client}}</td>
                        <td class="text-left py-3 px-4">{{$item->image_client}}</td>
                        <td class="text-left py-3 px-4">{{$item->nom_client}}</td>
                        <td class="text-left py-3 px-4">{{$item->job_client}}</td>
                        <td class="text-left py-3 px-4">
                            <a href="{{route('testimonial.edit' , $item->id)}}">Modifier</a>
                        </td>
                        <td>
                            <form action="{{route('testimonial.destroy' , $item->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-center">
            <a href="{{route('testimonial.create')}}">Create</a>
        </div>
    </div>
</div>
@endsection