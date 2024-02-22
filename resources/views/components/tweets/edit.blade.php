@extends('layout.app')

@section('title', 'Edit Tweet')

@section('content')
    <div class="row">
        @include('components.sidebar')
        <div class="col-6">
            <hr>
            <div class="card mb-4">
                <div class="px-3 pt-4 pb-2">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                                 src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Mario" alt="Mario Avatar">
                            <div>
                                <h5 class="card-title mb-0">
                                    <a href="#">Mario</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('tweet.update', $tweet->id) }}" method="POST">
                        @csrf
                        {{--@method('PUT')--}}
                        <div class="mb-3">
                            <textarea class="form-control" name="content">{{ $tweet->content }}</textarea>
                            @error('content')
                                <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                            @enderror
                            <div class="mt-3">
                                <button type="submit" class="btn btn-dark">Update</button>
                            </div>
                            <div class="d-flex justify-content-between mt-3 mb-3">
                                <div>
                                    <span class="fas fa-heart me-1">
                                    </span> {{ $tweet->likes ?? 'Sem curtidas' }}
                                </div>
                                <div>
                                    <span class="fs-6 fw-light text-muted">
                                        <span class="fas fa-clock"></span>
                                        {{ date_format($tweet->created_at, "H:i · d/m/Y") }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div>
                        <hr>
                        {{--<div class="mb-3">
                            <button class="btn btn-primary btn-sm" disabled>Comentários</button>
                        </div>--}}
                        <div class="d-flex align-items-start mt-4">
                            <img style="width:35px" class="me-2 avatar-sm rounded-circle"
                                 src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Luigi" alt="Luigi Avatar">
                            <div class="w-100">
                                <div class="d-flex justify-content-between">
                                    <h6 class="">Luigi
                                    </h6>
                                    <small class="fs-6 fw-light text-muted"> 3 hour
                                        ago</small>
                                </div>
                                <p class="fs-6 mt-3 fw-light">
                                    and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and
                                    Evil)
                                    by
                                    Cicero, written in 45 BC. This book is a treatise on the theory of ethics,
                                    very
                                    popular during the Renaissan
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--<div class="mt-3">
                <form action="{{ route('tweet.update', $tweet->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="mb-3">
                            <textarea name="content" class="form-control" id="idea"
                                      rows="3">{{ $tweet->content }}</textarea>
                            @error('content')
                            <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="">
                            <button type="submit" class="btn btn-dark">Share</button>
                        </div>
                    </div>
                </form>
            </div>--}}
        </div>
        <div class="col-3">
            @include('components.search-bar')
            @include('components.follower-suggestion')
        </div>
    </div>
@endsection
