<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg rounded" aria-label="Eleventh navbar example">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <h2 class="text-dark">Becky's blog</h2>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
                    aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-md-center" id="navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="/">Articles</a>
                        </li>
                        @if (App\Models\Categorie::withArticle()->isNotEmpty())
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-dark" href="#" id="categories"
                                    data-bs-toggle="dropdown" aria-expanded="false">Categories</a>
                                <ul class="dropdown-menu" aria-labelledby="categories   ">
                                    @foreach ($categories = App\Models\Categorie::all() as $categorie)
                                        <li>
                                            <a class="dropdown-item"
                                                href="{{ route('categorie.index', $categorie->id) }}">{{ $categorie->titre }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="https://beckyada.com/">Mon Portfolio</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
