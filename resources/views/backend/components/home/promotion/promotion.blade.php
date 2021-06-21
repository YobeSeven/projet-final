@extends('layouts.index-admin')
@section('content-admin')

<div class="md:px-32 py-8 w-full">
    <h2 class="text-center">Promotion</h2>
    <div class="shadow overflow-hidden rounded border-b border-gray-200">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">#</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Titre</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Texte</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">MODIFIER</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach ($promotions as $item)
                    <tr>
                        <td class="text-left py-3 px-4">{{$loop->iteration}}</td>
                        <td class="text-left py-3 px-4">{{$item->titre_promotion}}</td>
                        <td class="text-left py-3 px-4">{{$item->texte_promotion}}</td>
                        <td class="text-left py-3 px-4">
                            <a href="{{route('promotion.edit' , $item->id)}}">Modifier</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection