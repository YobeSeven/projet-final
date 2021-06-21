@extends('layouts.index-admin')
@section('content-admin')

    <p class="text-center">Confirmation des validate user</p>
    <table class="container text-center">
        <thead>
            <tr>
                <th>#</th>
                <th>email</th>
                <th>nom auteur</th>
                <th>message</th>
                <th>Accepter</th>
                <th>refuser</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($userValidates as $item)
                <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->role->role_name}}</td>
                        <td>{{$item->poste->poste_name}}</td>
                        <td>
                            <form action="{{route('user.validateUser' , $item->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit">Accepter</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{route('user.nonValidateUser' , $item->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
            @endforeach
        </tbody>
    </table>

    <hr>


    <p class="text-center">Changement de role des membres</p>
    <table class="container text-center">
        <thead>
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

    <hr>

    <p class="text-center">Changement des rôles (ALL)</p>
    <table class="container text-center">
        <thead>
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

    <hr>

    <p class="text-center">Confirmation des articles à poster</p>
    <table class="container text-center">
        <thead>
            <tr>
                <th>#</th>
                <th>nom auteur</th>
                <th>email</th>
                <th>titre article</th>
                <th>poste</th>
                <th>Accepter</th>
                <th>refuser</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articleValidates as $item)
                <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->user->name}}</td>
                        <td>{{$item->user->email}}</td>
                        <td>{{$item->titre}}</td>
                        <td>{{$item->user->poste->poste_name}}</td>
                        <td>
                            <form action="{{route('validateArticle.update' , $item->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit">Accepter</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{route('nonValidateArticle.destroy' , $item->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
            @endforeach
        </tbody>
    </table>

    <hr>

    <p class="text-center">Confirmation des articles à Supprimer</p>
    <table class="container text-center">
        <thead>
            <tr>
                <th>#</th>
                <th>nom auteur</th>
                <th>email</th>
                <th>titre article</th>
                <th>poste</th>
                <th>Supprimer</th>
                <th>Remettre</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articleDeletes as $item)
                <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->user->name}}</td>
                        <td>{{$item->user->email}}</td>
                        <td>{{$item->titre}}</td>
                        <td>{{$item->user->poste->poste_name}}</td>
                        <td>
                            <form action="{{route('deleteArticle.destroy' , $item->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Supprimer</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{route('restoreDeleteArticle.update' , $item->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit">Remettre</button>
                            </form>
                        </td>
                    </tr>
            @endforeach
        </tbody>
    </table>

    <hr>

    <p class="text-center">Confirmation des commentaires à poster</p>
    <table class="container text-center">
        <thead>
            <tr>
                <th>#</th>
                <th>email</th>
                <th>nom auteur</th>
                <th>message</th>
                <th>Accepter</th>
                <th>refuser</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($commentaireValidates as $item)
                <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->auteur}}</td>
                        <td>{{$item->message}}</td>
                        <td>
                            <form action="{{route('validateCommentaire.update' , $item->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit">Accepter</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{route('nonValidateCommentaire.destroy' , $item->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
            @endforeach
        </tbody>
    </table>

    <hr>


@endsection