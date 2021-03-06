<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Mon blog</title>

    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    {{-- end font --}}

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    {{-- end css --}}

    {{-- javascripts --}}
    <script href="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script href="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/kitFontawesome.js') }}" crossorigin="anonymous"></script>
    {{-- javascripts --}}

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    {{-- header --}}
    <header>
        <nav class="navbar navbar-expand-md bg-maincolor py-2 fixed-top">
            <div class="container">
                <a href="/" class="navbar-brand text-uppercase fw-bold ">
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
                            <a class="nav-link active text-white" href="/">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#post">Articles</a>
                        </li>
                        <li class="nav-item dropdown">
                            <h6 class="nav-link dropdown-toggle text-white">
                                Cat??gories
                            </h6>
                            <div class="dropdown-menu">
                                @if (App\Models\Categorie::all()->isNotEmpty())
                                    @foreach ($categories = App\Models\Categorie::all() as $categorie)
                                        <a class="dropdown-item"
                                            href="{{ route('categorie.index', $categorie->id) }}">{{ $categorie->titre }}</a>
                                    @endforeach
                                @else
                                    <div>
                                        Aucune Cat??gorie disponible
                                    </div>
                                @endif
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#about">?? propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    {{-- end header --}}

    {{-- main --}}
    <main>
        <section>
            <div class="container-fluid">
                {{-- banni??re --}}
                <div class="row">
                    <img class="img-fluid" height="140px" src="img/ban.jpeg" alt="la banni??re du site">
                    <div class="row">
                        <div class="inner-banner">
                            <h1 class="text-dark text-center fw-bold">Je suis Becky ada, d??veloppeuse web.</h1>
                            <h2 class="text-dark text-center">Bienvenue sur mon blog!</h2>
                        </div>
                    </div>
                </div>
                {{-- end banni??re --}}
            </div>
        </section>
        <section>
            {{-- session --}}
            <div class="row py-4">
                <div class="card-group">
                    {{-- liste des articles --}}
                    <div class="col-md-6 offset-md-1">
                        <h1 id="post">Articles</h1>
                        <hr>
                        <div class="row py-1">
                            <div class="col-md-12">
                                @foreach (App\Models\Article::latest(1) as $article)
                                    <div class="card mb-3">
                                        <div class="row g-0">
                                            <div class="col-md-5" style="height: 12em">
                                                <img src="img/ban-modified.jpeg" style="height: 100%; width:100%"
                                                    class="img-fluid rounded-start" alt="{{ $article->titre }}">
                                            </div>
                                            <div class="col-md-7">
                                                <div class="card-body">
                                                    <a href="{{ route('article.show', $article->id) }}">
                                                        <h5 class="card-title fw-bold">{{ $article->titre }}
                                                        </h5>
                                                    </a>
                                                    <p class="card-text text-start">
                                                        {!! Str::limit($article->contenu, 150) !!} <br> <br>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            @if ($articles->isNotEmpty())
                                @foreach ($articles as $article)
                                    <div class="col-md-6">
                                        @include('parts.article')
                                    </div>
                                @endforeach
                            @else
                                <div>
                                    Aucun article disponible
                                </div>
                            @endif
                        </div>
                    </div>
                    {{-- end liste des articles --}}

                    {{-- 5 derniers articles --}}
                    <div class="col-md-4 offset-md-1">
                        @include('parts.aside')
                    </div>
                    {{-- end 5 derniers articles --}}

                </div>
            </div>
            {{-- end session --}}
        </section>
    </main>
    {{-- end main --}}

    {{-- footer --}}
    <footer class="container-fluid footer">
        <div class="container">
            <div class="row py-3">
                <div class="col-md-5">
                    <h2 id="about" class="text-white">?? propos</h2>
                    <hr>
                    <p>
                        je suis <b>Rebecca tshikadile</b>, souvent j'utilise mon pseudo <b>becky ada</b>.
                    </p>
                    <p>Je suis une developpeuse web avec une ??xperience dans le codage, la conception et le test des
                        sites
                        web.
                    </p>
                    <p>
                        je maitrise les technologies du web en front et back-end avec une specialisation en
                        conception des dashboards et la gestion des bases des donn??es.
                    </p>
                </div>
                <div class="col-md-3 offset-md-2">
                    <h2 id="contact" class="text-white">Me contacter</h2>
                    <hr>
                    <p class="list-vertical-item">
                        <i class="fa fa-location-arrow"></i>
                        <span> <b> Localisation </b>:
                            Lubumbashi, DRC
                        </span>
                    </p>
                    <p class="list-vertical-item">
                        <i class="fa fa-envelope"></i>
                        <span> <b> Email </b>:
                            <a href="mailto:rebtshikadila@gmail.com" class="text-white">
                                rebtshikadila@gmail.com
                            </a>
                        </span>
                    </p>
                    <p class="list-vertical-item">
                        <i class="fa fa-link"></i>
                        <span> <b>Site Web </b>:
                            <a href="https://www.beckyada.com" class="text-white">
                                beckyada.com
                            </a>
                        </span></li>
                    </p>

                    <p>
                    <ul class="social">
                        <li class="list-enligne-item">
                            <a href="https://github.com/beckyo6">
                                <i class="fa fa-github"></i>
                            </a>
                        </li>
                        <li class="list-enligne-item">
                            <a href="https://www.facebook.com/becky.ada.3538">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-enligne-item">
                            <a href=" https://wa.me/243978977879">
                                <i class="fa fa-whatsapp"></i>
                            </a>
                        </li>
                        <li class="list-enligne-item">
                            <a href="https://www.instagram.com/beckyada6/">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                        <li class="list-enligne-item">
                            <a href="https://www.linkedin.com/in/rebecca-tshikadile-021155236">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                    </p>
                </div>
            </div>
            <div class="row offset-9">
                <div class="main-footer d-flex p-2 px-3">
                    <span class="copyright ml-auto my-auto mr-2">Copyright ?? 2022, designed by
                        <a href="https://beckyada.com" rel="nofollow">Becky ada</a>
                    </span>
                </div>
            </div>
        </div>
    </footer>
    {{-- end footer --}}

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.0/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $('h6').mouseover(function() {
            $(this).dropdown('toggle')
        })
    </script>
</body>

</html>
