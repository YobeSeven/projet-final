@extends('layouts.index-admin')
@section('content-admin')
    <hr>
    <p class="text-center">{{Auth::user()->name}}</p>
    <p class="text-center">{{Auth::user()->email}}</p>
    <p class="text-center">{{Auth::user()->role->role_name}}</p>
    <a href="{{route('home')}}">home</a>
    <hr>
    @Webmaster
        <p class="text-center">Confirmation des nouveaux inscrits</p>
        <table class="table table-bordered table-striped container text-center">
            <thead class="thead-black">
                <tr>
                    <th>#</th>
                    <th>name</th>
                    <th>email</th>
                    <th>rôle</th>
                    <th>poste</th>
                    <th>change poste</th>
                    @Admin
                        <th>delete</th>
                    @endAdmin
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
                    @if ($item->role->role_name == "membre")
                    <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->role->role_name}}</td>
                            <td>{{$item->poste->poste_name}}</td>
                            <td>
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
                            </td>
                            <td>
                                @Admin
                                <form action="{{route('user.destroy', $item->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                                @endAdmin
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    @endWebmaster
    @Webmaster
        <p class="text-center">Changement des rôles</p>
        <table class="table table-bordered table-striped container text-center">
            <thead class="thead-black">
                <tr>
                    <th>#</th>
                    <th>name</th>
                    <th>email</th>
                    <th>rôle</th>
                    <th>poste</th>
                    <th>change poste</th>
                    @Admin
                        <th>delete</th>
                    @endAdmin
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
                    @if (!($item->role->role_name == "admin"))
                        @if (!(Auth::user()->role->role_name == "webmaster" && $item->role->role_name == "webmaster"))
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->role->role_name}}</td>
                                <td>{{$item->poste->poste_name}}</td>
                                <td>
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
                                </td>
                                <td>
                                    @Admin
                                    <form action="{{route('user.destroy', $item->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Delete</button>
                                    </form>
                                    @endAdmin
                                </td>
                            </tr>
                        @endif
                    @endif
                @endforeach
            </tbody>
        </table>
    @endWebmaster

@endsection