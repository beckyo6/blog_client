<h1>5 derniers articles</h1>
<hr>
@if (App\Models\Article::latest(5)->isNotEmpty())
    @foreach (App\Models\Article::latest(5) as $article)
        <div class="col-md-6">
            @include('parts.article')
        </div>
    @endforeach
@else
    <div>
        Aucun article disponible
    </div>
@endif
