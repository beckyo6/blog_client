<footer class="container-fluid">
    <div class="container">
        <hr>
        <div class="row py-3">
            <div class="col-md-5">
                <h2 id="about" class="text-dark mb-5">
                    À propos de moi <hr>
                </h2>
                
                <p>
                    je suis <b>Rebecca tshikadile</b>, souvent j'utilise mon pseudo <b>becky ada</b>.
                </p>
                <p>Je suis une developpeuse web avec une éxperience dans le codage, la conception et le test des
                    sites
                    web.
                </p>
                <p>
                    je maitrise les technologies du web en front et back-end avec une specialisation en
                    conception des dashboards et la gestion des bases des données.
                </p>
            </div>
            <div class="col-md-3 offset-md-2">
                <h2 id="contact" class="text-dark mb-5">
                    Me contacter <hr>
                </h2>
                {{-- list of social network logo --}}
                <ul class="social">
                    <li class="list-enligne-item">
                        <a href="https://github.com/beckyo6" target="_blank">
                            <i class="fa fa-github"></i>
                        </a>
                    </li>
                    <li class="list-enligne-item">
                        <a href=" https://wa.me/243907231708" target="_blank">
                            <i class="fa fa-whatsapp"></i>
                        </a>
                    </li>
                    <li class="list-enligne-item">
                        <a href="https://www.linkedin.com/in/rebecca-tshikadile-021155236" target="_blank">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>

                    <li class="list-enligne-item">
                        <a href="mailto:rebtshikadila@beckyada.com" target="_blank">
                            <i class="fa fa-envelope"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row offset-9">
            <div class="main-footer d-flex p-2 px-3">
                <span class="copyright ml-auto my-auto mr-2">Copyright © 2022, designed by
                    <a href="https://beckyada.com" rel="nofollow">Becky ada</a>
                </span>
            </div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.0/umd/popper.min.js"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script>
    $('h6').mouseover(function() {
        $(this).dropdown('toggle')
    })
</script>
</body>

</html>
