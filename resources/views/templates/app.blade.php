@include('templates.header')
<header>
    {{-- main sidebar --}}
    @include('templates.nav')
    {{-- main sidebar --}}
</header>
<main>
    <section>
        <!-- main section -->
        <div class="row py-4">
            <div class="card-group"> 
                @yield('contents')
            </div>
        </div>
        <!-- main section -->
    </section>
</main>

{{-- footer --}}
<footer class="container-fluid footer">
    <div class="container">
        <div class="row py-3">
            @yield('content')
        </div>
        <div class="row offset-9">
            @include('templates.copyright')
        </div>
    </div>
</footer>
{{-- end footer --}}

@include('templates.footer')
