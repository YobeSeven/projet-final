@extends('layouts.index-admin')
@section('content-admin')
    {{-- @Admin
        <p class="text-center">{{Auth::user()->name}}</p>
        <p class="text-center">{{Auth::user()->email}}</p>
        <p class="text-center">{{Auth::user()->role->role_name}}</p>
    @endAdmin --}}
    <hr>
    <p class="text-center">{{Auth::user()->role->role_name}}</p>
    <p class="text-center">Confirmation des nouveaux inscrits</p>
    <hr>
    @foreach ($users as $item)
        @if ($item->role->role_name === "membre")
            <p class="text-center">{{$item->name}}</p>
            <p class="text-center">{{$item->email}}</p>
            <p class="text-center">{{$item->role->role_name}}</p>
            <div>
                <form action="{{route('role.update' , $item->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="roleForUpdate" id="roleForUpdate">
                    <select name="role_id" id="role_id">
                        <option disabled selected>Select role</option>
                        <option value="2">webmaster</option>
                        <option value="3">redacteur</option>
                    </select>
                    <button type="submit">Changer</button>
                </form>
            </div>
            @Admin
            <form action="{{route('user.destroy', $item->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
            @endAdmin
            <hr>
        @endif
    @endforeach
@endsection