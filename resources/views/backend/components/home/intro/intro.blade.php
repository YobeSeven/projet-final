@extends('layouts.index-admin')
@section('content-admin')
<section class="container">
    <div class="mx-auto text-center">
        <h1>FOOTER COMPONENTS</h1>
        <a href="{{route('admin')}}">admin</a>
    </div>
    <table class="container text-center">
        <thead>
            <tr>
                <th>#</th>
                <th>Image Logo</th>
                <th>Titre Image</th>
                <th>Carousel Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($intros as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->image_logo}}</td>
                    <td>{{$item->titre_logo}}</td>
                    @foreach ($carouselIntros as $itemCarousel)
                        <td>{{$itemCarousel->img_carousel}}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection