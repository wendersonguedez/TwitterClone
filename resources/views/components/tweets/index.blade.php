<div class="card mb-4">
    @include('components.tweets.info-tweets')
    <div class="card-body">
        <p class="fs-6 fw-light text-muted">
            {{ $tweet->content }}
        </p>
        @include('components.tweets.actions-tweets')
    </div>
</div>
