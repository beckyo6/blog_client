@include('templates.header')
<header>
    {{-- main sidebar --}}
    @include('templates.nav')
    {{-- main sidebar --}}
</header>
<main>
    <div class="container">
        <div class="row py-4">
            @yield('contents')
        </div>
    </div>

</main>

@include('templates.footer')
