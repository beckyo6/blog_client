<div class="card text-left mb-3">
    <div class="row g-0">
        <div class="col-md-12">
            <img src="{{ asset('img/ban-modified.jpeg') }}" class="img-fluid rounded-start" alt="{{ $article->titre }}">
        </div>
        <div class="col-md-12">
            <div class="card-body">
                <a href="{{ route('article.show', $article->id) }}">
                    <h5 class="card-title fw-bold">{{ $article->titre }}</h5>
                </a>
                <p class="card-text text-start">
                    {!! Str::limit($article->contenu, 150) !!} <br> <br>

                    Auteur: <span class="fw-bold">{{ $article->user->name }}</span>
                    <span class=" offset-md-4">
                        <i class="fa fa-comment">
                            {{ $article->commentaires->count() }}
                        </i>
                    </span>
                </p>
            </div>
        </div>
    </div>
</div>
