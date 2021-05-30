@extends('layouts.index-admin')
@section('content-admin')
    {{-- @Admin
        <p class="text-center">{{Auth::user()->name}}</p>
        <p class="text-center">{{Auth::user()->email}}</p>
        <p class="text-center">{{Auth::user()->role->role_name}}</p>
    @endAdmin --}}
    <hr>
    <p class="text-center">salut</p>
    <hr>
    @foreach ($users as $item)
        <p class="text-center">{{$item->name}}</p>
        <p class="text-center">{{$item->email}}</p>
        <p class="text-center">{{$item->role->role_name}}</p>
        @Admin
        <form action="{{route('user.destroy', $item->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
        @endAdmin
        <hr>
    @endforeach
@endsection