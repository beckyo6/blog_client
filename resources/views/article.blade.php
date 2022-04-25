@extends('templates.app')
@section('contents')
    <div class="col-md-6 py-5 offset-md-1">
        <h1 id="post">{{ $article->titre }}</h1>
        <hr>
        <div class="row py-1">
            {{ $article->contenu }}
        </div>
        <br> <br>
        <h5 class="fw-bold">Laissez un commentaire</h5> <br>
        @if (session('success'))
            <div class="alert alert-success text-center msg" id="error">
                <strong>{{ session('success') }}</strong>
            </div>
        @endif
        @if (session('alert'))
            <div class="alert alert-success text-center msg" id="error">
                <strong>{{ session('alert') }}</strong>
            </div>
        @endif
        <form class="mb-5" action="{{ route('commentaire.post') }}" method="POST">
            @csrf
            <input type="hidden" name="article_id" value="{{ $article->id }}">
            <div class="mb-3">
                <input type="text" class="form-control" name="nom" id="exampleFormControlInput1"
                    placeholder="inserer votre nom">
            </div>
            <div class="mb-3">
                <textarea class="form-control" name="commentaire" id="exampleFormControlTextarea1" rows="4"
                    placeholder="inserer votre commentaire"></textarea>
            </div>
            <div class="form-group col-lg-12">
                <button class="btn btn-maincolor" type="submit">Envoyer</button>
            </div>
        </form> <br>

        <h3 class="h4 mb-4 d-flex align-items-center">
            <span class="fw-bold">Commentaires</span>
            <span class="text-small ml-3 text-gray">
                - {{ App\Models\Commentaire::CountByarticle($article->id) }} commentaires
            </span>
        </h3>
        <ul>
            <li>
                <div class="d-flex mb-4">
                    <div class="pr-2 flex-grow-1" style="width: 75px; min-width: 75px;"><img
                            class="rounded-circle shadow-sm img-fluid img-thumbnail" src="img/person-1.jpg" alt=""></div>
                    <div class="pl-2">
                        <p class="small mb-0 text-primary">15 Aug 2019</p>
                        <h5>Jimmy Roy</h5>
                        <p class="text-muted text-small mb-2">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                            diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                            At.
                        </p>
                    </div>
                </div>
            </li>
        </ul>
    </div>

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
