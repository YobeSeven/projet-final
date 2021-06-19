@extends('layouts.index-admin')
@section('content-admin')
@include('layouts.flash')

<section class="w-full mt-10 max-w-sm p-6 m-auto bg-gray-100 rounded-md shadow-md">
    <h3 class="text-3xl font-semibold text-center text-gray-700">
        Create subject
    </h3>
    <form action="{{route('subject.update' , $subject->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label class="mt-2" for="subject">
                Subject
            </label>
            <input id="subject" name="subject" type="text" value="{{$subject->subject}}"
            class="w-full px-4 py-2 mt-2 border rounded-md">
            @error('subject')
            <span class="text-red-400">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
        <button type="submit"
        class="w-full px-4 py-2 mt-2 tracking-wide text-white bg-gray-700 rounded-md hover:bg-gray-600">
            Update
        </button>
    </form>
</section>

@endsection