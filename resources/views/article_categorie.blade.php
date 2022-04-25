@extends('templates.app')
@section('contents')
    <div class="row">
        <div class="card-group">
            {{-- liste des articles --}}
            <div class="col-md-7 offset-md-1 py-5">
                <h1 id="post">Articles</h1>
                <hr>
                <div class="row py-1">
                    {{--<div class="col-md-12">
                        <div class="card mb-3" style="height: 9.3em">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="img/ban-modified.jpeg" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <a href="article/{{ $articledernier->id }}/detail">
                                            <h5 class="card-title fw-bold">{{ $articledernier->titre }}</h5>
                                        </a>
                                        <p class="card-text text-start">
                                            {{ Str::limit($articledernier->contenu, 150) }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>--}}
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
        </div>
    @endsection
