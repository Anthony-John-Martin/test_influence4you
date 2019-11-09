@extends('layouts.app')

@section('additional_css')
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="content">
        <h1 class="title m-b-md">
            Influence<span class="text-pink font-weight-bold">4</span>You
        </h1>
        @auth
        <div class="links">
            <a href="{{route('influencers.index')}}" class="btn btn-outline-pink">View influencers list</a>
        </div>
        @endAuth
    </div>
@endsection