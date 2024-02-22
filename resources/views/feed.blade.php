@extends('layout.app')

@section('title', 'Home Page')

@section('content')
    <div class="row">
        @include('components.sidebar')
        <div class="col-6">
            <h4>Share what u are thinking</h4>
            @include('components.tweets.successful-submit-alert')
            @include('components.tweets.create')
            <hr>
            <div class="mt-3">
                @foreach($tweets as $tweet)
                    @include('components.tweets.index')
                @endforeach
            </div>
        </div>
        <div class="col-3">
            @include('components.search-bar')
            @include('components.follower-suggestion')
        </div>
    </div>
@endsection
