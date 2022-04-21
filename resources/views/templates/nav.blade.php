<nav class="navbar navbar-expand-md bg-maincolor py-2 fixed-top">
    <div class="container">
        <a href="#" class="navbar-brand text-uppercase fw-bold ">
            <span class="bg-gradient p-1 rounded-3 text-light">Becky Ada</span>
        </a>
        <div class="offset-md-7">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-white" href="#">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#post">Articles</a>
                </li>
                <li class="nav-item dropdown">
                    <h6 class="nav-link dropdown-toggle text-white">
                        Catégories
                    </h6>
                    <div class="dropdown-menu">
                        @if (App\Models\Categorie::getCategorie()->isNotEmpty())
                            @foreach ($categories = App\Models\Categorie::getCategorie() as $categorie)
                                <a class="dropdown-item" href="#">{{ $categorie->titre }}</a>
                            @endforeach
                        @else
                            <div>
                                Aucune Catégorie disponible
                            </div>
                        @endif
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#about">À propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>