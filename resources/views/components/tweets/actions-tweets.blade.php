<div class="d-flex justify-content-between">
    <div>
        <a href="{{ route('tweet.like', $tweet->id) }}" class=" nav-link fs-6">
            <span class="fas fa-comment me-1">
            </span> {{ $tweet->likes ?? 'Sem curtidas'}}
        </a>
    </div>
    <div>
        <a href="{{ route('tweet.like', $tweet->id) }}" class="fw-light nav-link fs-6">
            <span class="fas fa-heart me-1">
            </span> {{ $tweet->likes ?? 'Sem curtidas'}}
        </a>
    </div>
    <div>
        <span class="fs-6 fw-light text-muted">
            <span class="fas fa-clock"></span>
            {{ date_format($tweet->created_at, 'd/m/Y') }}
        </span>
    </div>
</div>

<div>
    <form action="{{ route('tweet.comment.store', $tweet->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <textarea class="fs-6 form-control" rows="1" name="comment"></textarea>
        </div>
        <div>
            <button class="btn btn-primary btn-sm" type="submit">Comentar</button>
        </div>
    </form>
    <hr>
    @include('components.tweets.comments', ['comments' => $tweet->comments])
</div>
