@include('templates.header')
@include('templates.nav')
<main>
    <div class="container">
        <div class="row py-4">
            @yield('contents')
        </div>
    </div>
</main>

@include('templates.footer')
