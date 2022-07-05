@extends('templates.app')
@section('contents')
    <div class="row">
        {{-- liste des articles --}}
        <div class="col-md-8 py-5">
            <h1 id="post">Articles</h1>
            <hr>
            <div class="row py-1">
                @if ($articles->isNotEmpty())
                    @foreach ($articles as $article)
                        <div class="col-md-6">
                            @include('parts.article')
                        </div>
                    @endforeach
                @else
                    <div>
                        Aucun article disponible dans cette Catégorie
                    </div>
                @endif
            </div>
        </div>

        <div class="col-md-4 py-5">
            <h1>5 derniers articles</h1>
            <hr>
            @include('parts.aside')
        </div>
    @endsection
