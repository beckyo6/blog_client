@extends('templates.app')
@section('contents')
    <div class="row">
        <div class="card-group">
            {{-- liste des articles --}}
            <div class="col-md-6 offset-md-1 py-5">
                <h1 id="post">Articles</h1>
                <hr>
                <div class="row py-1">
                    @if ($articles->isNotEmpty())
                        @foreach ($articles as $article)
                            <div class="col-md-6">
                                <div class="card text-left mb-3">
                                    <div class="card-body">
                                        <a href="article/{{ $article->id }}/detail">
                                            <h5 class="card-title fw-bold">{{ $article->titre }}</h5>
                                        </a>
                                        <p class="card-text text-start">
                                            {{ Str::limit($article->contenu, 150) }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div>
                            Aucun article disponible dans cette Catégorie
                        </div>
                    @endif
                </div>
            </div>

            <div class="col-md-4 offset-md-1 py-5">
                <h1>5 derniers articles</h1>
                <hr>
                @if ($articlesderniers->isNotEmpty())
                    @foreach ($articlesderniers as $articlesdernier)
                        <div class="col-md-6 ">
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
        </div>
    @endsection
