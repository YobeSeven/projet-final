@extends('layouts.index-admin')
@section('content-admin')
    <table class="table table-bordered table-striped container text-center">
        <thead class="thead-black">
            <tr>
                <th>#</th>
                <th>first</th>
                <th>second</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                {{-- <td>{{$loop->iteration}}</td> --}}
                <td>1</td>
                <td>2</td>
                <td>Show</td>
                <td>Delete</td>
            </tr>
        </tbody>
    </table>
    <a href="">Add</a>
@endsection