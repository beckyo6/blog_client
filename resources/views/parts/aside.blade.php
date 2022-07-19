<h2>Mes dernieres articles</h1>
<hr>
@if (App\Models\Article::latest(5)->isNotEmpty())
    @foreach (App\Models\Article::latest(5) as $article)
        <div class="col-md-12">
            @include('parts.article')
        </div>
    @endforeach
@else
    <div>
        Aucun article disponible
    </div>
@endif
