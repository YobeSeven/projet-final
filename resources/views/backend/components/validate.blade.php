@extends('layouts.index-admin')
@section('content-admin')

    <div class="md:px-32 py-8 w-full">
        <h2 class="text-center">Confirmation des validate user</h2>
        <div class="shadow overflow-hidden rounded border-b border-gray-200">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">#</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">E-Mail</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nom Auteur</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Message</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">ACCEPTER</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">REFUSER</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($userValidates as $item)
                        <tr>
                            <td class="text-left py-3 px-4">{{$loop->iteration}}</td>
                            <td class="text-left py-3 px-4">{{$item->name}}</td>
                            <td class="text-left py-3 px-4">{{$item->email}}</td>
                            <td class="text-left py-3 px-4">{{$item->role->role_name}}</td>
                            <td class="text-left py-3 px-4">{{$item->poste->poste_name}}</td>
                            <td class="text-left py-3 px-4">
                                <form action="{{route('user.validateUser' , $item->id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit">Accepter</button>
                                </form>
                            </td>
                            <td class="text-left py-3 px-4">
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
        </div>
    </div>    

    <hr>
    <div class="md:px-32 py-8 w-full">
        <h2 class="text-center">CHANGEMENT DES ROLES NOUVEAUX MEMBRES</h2>
        <div class="shadow overflow-hidden rounded border-b border-gray-200">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">#</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">name</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">email</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">role</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">poste</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">MODIFIER POSTE</th>
                        @Admin
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">SUPPRIMER USER</th>
                        @endAdmin
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($users as $item)
                        @if ($item->role->role_name == "membre")
                            <tr>
                                <td class="text-left py-3 px-4">{{$loop->iteration}}</td>
                                <td class="text-left py-3 px-4">{{$item->name}}</td>
                                <td class="text-left py-3 px-4">{{$item->email}}</td>
                                <td class="text-left py-3 px-4">{{$item->role->role_name}}</td>
                                <td class="text-left py-3 px-4">{{$item->poste->poste_name}}</td>
                                <td class="text-left py-3 px-4">
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
                                @Admin
                                    <td class="text-left py-3 px-4">
                                        <form action="{{route('user.destroy', $item->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Delete</button>
                                        </form>      
                                    </td>
                                @endAdmin
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <hr>

    <div class="md:px-32 py-8 w-full">
        <h2 class="text-center">CHANGEMENT DE TOUT LES ROLES</h2>
        <div class="shadow overflow-hidden rounded border-b border-gray-200">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">#</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">name</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">email</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">role</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">poste</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">MODIFIER POSTE</th>
                        @Admin
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">SUPPRIMER USER</th>
                        @endAdmin
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($users as $item)
                    @if (!($item->role->role_name == "admin"))
                        @if (!(Auth::user()->role->role_name == "webmaster" && $item->role->role_name == "webmaster"))
                            <tr>
                                <td class="text-left py-3 px-4">{{$loop->iteration}}</td>
                                <td class="text-left py-3 px-4">{{$item->name}}</td>
                                <td class="text-left py-3 px-4">{{$item->email}}</td>
                                <td class="text-left py-3 px-4">{{$item->role->role_name}}</td>
                                <td class="text-left py-3 px-4">{{$item->poste->poste_name}}</td>
                                <td class="text-left py-3 px-4">
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
                                @Admin
                                    <td class="text-left py-3 px-4">
                                        <form action="{{route('user.destroy', $item->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Delete</button>
                                        </form>      
                                    </td>
                                @endAdmin
                            </tr>
                        @endif
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <hr>

    <div class="md:px-32 py-8 w-full">
        <h2 class="text-center">Confirmation des articles à poster</h2>
        <div class="shadow overflow-hidden rounded border-b border-gray-200">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">#</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nom auteur</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">email</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Titre Article</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Poste</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">ACCEPTER</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">REFUSER</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($articleValidates as $item)
                        <tr>
                            <td class="text-left py-3 px-4">{{$loop->iteration}}</td>
                            <td class="text-left py-3 px-4">{{$item->user->name}}</td>
                            <td class="text-left py-3 px-4">{{$item->user->email}}</td>
                            <td class="text-left py-3 px-4">{{$item->titre}}</td>
                            <td class="text-left py-3 px-4">{{$item->user->poste->poste_name}}</td>
                            <td class="text-left py-3 px-4">
                                <form action="{{route('validateArticle.update' , $item->id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit">Accepter</button>
                                </form>
                            </td>
                            <td class="text-left py-3 px-4">
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
        </div>
    </div>

    <hr>

    <div class="md:px-32 py-8 w-full">
        <h2 class="text-center">Confirmation des articles à Supprimer</h2>
        <div class="shadow overflow-hidden rounded border-b border-gray-200">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">#</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nom auteur</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">email</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Titre Article</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Poste</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">SUPPRIMER</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">REMETTTRE</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($articleDeletes as $item)
                        <tr>
                            <td class="text-left py-3 px-4">{{$loop->iteration}}</td>
                            <td class="text-left py-3 px-4">{{$item->user->name}}</td>
                            <td class="text-left py-3 px-4">{{$item->user->email}}</td>
                            <td class="text-left py-3 px-4">{{$item->titre}}</td>
                            <td class="text-left py-3 px-4">{{$item->user->poste->poste_name}}</td>
                            <td class="text-left py-3 px-4">
                                <form action="{{route('deleteArticle.destroy' , $item->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Supprimer</button>
                                </form>
                            </td>
                            <td class="text-left py-3 px-4">
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
        </div>
    </div>

    <hr>

    <div class="md:px-32 py-8 w-full">
        <h2 class="text-center">Confirmation des commentaires à poster</h2>
        <div class="shadow overflow-hidden rounded border-b border-gray-200">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">#</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">email</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nom Auteur</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Message</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">ACCEPTER</th>
                        <th class="text-left py-3 px-4 uppercase font-semibold text-sm">REFUSER</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($commentaireValidates as $item)
                        <tr>
                            <td class="text-left py-3 px-4">{{$loop->iteration}}</td>
                            <td class="text-left py-3 px-4">{{$item->email}}</td>
                            <td class="text-left py-3 px-4">{{$item->auteur}}</td>
                            <td class="text-left py-3 px-4">{{$item->message}}</td>
                            <td class="text-left py-3 px-4">
                                <form action="{{route('validateCommentaire.update' , $item->id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit">Accepter</button>
                                </form>
                            </td>
                            <td class="text-left py-3 px-4">
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
        </div>
    </div>

    <hr>


@endsection