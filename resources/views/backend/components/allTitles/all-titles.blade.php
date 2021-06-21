@extends('layouts.index-admin')
@section('content-admin')

<div class="md:px-32 py-8 w-full">
    <h2 class="text-center">TITRE HOME</h2>
    <div class="shadow overflow-hidden rounded border-b border-gray-200">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">#</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Section</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Service</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Team</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Testimonial</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">MODIFIER</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach ($homeTitres as $item)
                    <tr>
                        <td class="text-left py-3 px-4">{{$loop->iteration}}</td>
                        <td class="text-left py-3 px-4">{{$item->titre_section}}</td>
                        <td class="text-left py-3 px-4">{{$item->titre_service}}</td>
                        <td class="text-left py-3 px-4">{{$item->titre_team}}</td>
                        <td class="text-left py-3 px-4">{{$item->titre_testimonial}}</td>
                        <td class="text-left py-3 px-4">
                            <a href="{{route('editTitreHome.edit' , $item->id)}}">Modifier</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="md:px-32 py-8 w-full">
    <h2 class="text-center">TITRE SERVICE</h2>
    <div class="shadow overflow-hidden rounded border-b border-gray-200">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">#</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Feature</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Section</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">MODIFIER</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach ($serviceTitres as $item)
                    <tr>
                        <td class="text-left py-3 px-4">{{$loop->iteration}}</td>
                        <td class="text-left py-3 px-4">{{$item->feature}}</td>
                        <td class="text-left py-3 px-4">{{$item->section}}</td>
                        <td class="text-left py-3 px-4">
                            <a href="{{route('editTitreService.edit' , $item->id)}}">Modifier</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection