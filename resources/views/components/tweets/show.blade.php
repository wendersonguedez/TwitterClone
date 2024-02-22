@extends('layout.app')

@section('title', 'Home Page')

@section('content')
    <div class="row">
        @include('components.sidebar')
        <div class="col-6">
            <hr>
            <div class="mt-3">
                @include('components.tweets.successful-submit-alert')
                @include('components.tweets.index')
            </div>
        </div>
        <div class="col-3">
            @include('components.search-bar')
            @include('components.follower-suggestion')
        </div>
    </div>
@endsection
