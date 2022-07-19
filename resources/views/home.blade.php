@extends('templates.app')
@section('contents')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 ">
                <h1>Mes Articles</h1>
                <hr>
                <div class="row">
                    @foreach ($articles as $article)
                        <div class="col-sm-6 col-lg-6 mb-4 ml-5">
                            <a class="text-dark" href="{{ route('article.show', $article->id) }}">
                                <div class="">
                                    <img src="{{ asset('img/ghost-docker.webp') }}" class="card-img-top"
                                        alt="{{ $article->titre }}">
                                </div>
                                <h2 class="my-3">{{ $article->titre }}</h2>
                                <p class="mr-">{!! Str::words($article->contenu, 20) !!}</p>
                                <small class="text-muted">{{ $article->created_at }}</small>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
