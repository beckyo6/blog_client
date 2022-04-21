@extends('templates.app')
@section('contents')
    <div class="col-md-6 py-5 offset-md-1">
        <h1 id="post">{{ $article->titre }}</h1>
        <hr>
        <div class="row py-1">
            {{ $article->contenu }}
        </div>
    </div>
    {{-- end liste des articles --}}

    {{-- 5 derniers articles --}}
    <div class="col-md-4 py-5 offset-md-1">
        <h1>5 derniers articles</h1>
        <hr>
        @if ($articlesderniers->isNotEmpty())
            @foreach ($articlesderniers as $articlesdernier)
                <div class="col-md-6">
                    <div class="card text-left mb-3">
                        <div class="card-body">
                            <a href="article/{{ $articlesdernier->id }}/detail">
                                <h5 class="card-title fw-bold">{{ $articlesdernier->titre }}</h5>
                            </a>
                            <p class="card-text text-start">
                                {{ Str::limit($articlesdernier->contenu, 150) }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div>
                Aucun article disponible
            </div>
        @endif
    </div>
    {{-- end 5 derniers articles --}}
@endsection
