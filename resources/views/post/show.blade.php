@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8" id="showImage">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-4">
            <h2>{{$user->name}}</h2>
            <p> {{$post->caption}}</p>
        </div>
    </div>
</div>
@endsection
<script type="text/javascript" src="{{ mix('js/app.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/post/show.js') }}"></script>