<a class="text-dark" href="{{ route('article.show', $article->id) }}">
    <div class="">
        <img src="{{ asset('img/ghost-docker.webp') }}" class="card-img-top"
            alt="{{ $article->titre }}">
    </div>
    <h5 class="my-3">{{ $article->titre }}</h2>
    {{-- <p class="mr-">{!! Str::words($article->contenu, 20) !!}</p> --}}
    <small class="text-muted">{{ $article->created_at }}</small>
</a>
<p></p>