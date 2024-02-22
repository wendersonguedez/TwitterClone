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
        <div>
            <form method="POST" action="{{ route('tweet.destroy', $tweet->id) }}">
                @method('DELETE')
                @csrf
                <a href="{{ route('tweet.edit', $tweet->id) }}">Editar</a>
                <a href="{{ route('tweet.show', $tweet->id) }}">Visualizar</a>
                <button class="btn btn-danger btn-sm ms-1">X</button>
            </form>
        </div>
    </div>
</div>
