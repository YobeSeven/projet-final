@extends('layouts.index-admin')
@section('content-admin')
<section class="container text-center">
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>name</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>name</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection