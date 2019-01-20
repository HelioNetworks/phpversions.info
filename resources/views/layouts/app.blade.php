<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Questrial|Raleway:300,400,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script>
      window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="bg-logo-dark px-8 pt-2 shadow-md">
            <div class="-mb-px flex justify-center">
                <router-link class="no-underline text-white hover:text-white active:text-white active:border-b-2 hover:border-b-2 active:border-logo hover:border-logo-dark uppercase tracking-wide font-bold text-xs py-3 mr-8" :to="{ name: 'SharedHosts'}">
                    Shared Hosts
                </router-link>
                <router-link class="no-underline text-white hover:text-white active:text-white active:border-b-2 hover:border-b-2 active:border-logo hover:border-logo-dark uppercase tracking-wide font-bold text-xs py-3 mr-8" :to="{ name: 'PaasHosts' }">
                    PaaS
                </router-link>
                <router-link class="no-underline text-white hover:text-white active:text-white active:border-b-2 hover:border-b-2 active:border-logo hover:border-logo-dark uppercase tracking-wide font-bold text-xs py-3 mr-8" :to="{ name: 'ManagedHosts' }">
                    Managed Hosts
                </router-link>
                <router-link class="no-underline text-white hover:text-white active:text-white active:border-b-2 hover:border-b-2 active:border-logo hover:border-logo-dark uppercase tracking-wide font-bold text-xs py-3 mr-8" :to="{ name: 'OperatingSystems' }">
                    Operating Systems
                </router-link>
                <router-link class="no-underline text-white hover:text-white active:text-white active:border-b-2 hover:border-b-2 active:border-logo hover:border-logo-dark uppercase tracking-wide font-bold text-xs py-3 mr-8" :to="{ name: 'Vulnerabilities' }">
                    Vulnerabilities
                </router-link>
                <router-link class="no-underline text-white hover:text-white active:text-white active:border-b-2 hover:border-b-2 active:border-logo hover:border-logo-dark uppercase tracking-wide font-bold text-xs py-3 mr-8" :to="{ name: 'CurrentVersion' }">
                    PHP 7.3
                </router-link>
            </div>
        </nav>
        <main>
            <div class="bg-red-lightest border-t-4 border-red rounded-b text-red px-4 py-3 shadow-md" role="alert">
                <div class="flex justify-center">
                    <div class="py-1"><svg class="fill-current h-6 w-6 text-red mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                    <div>
                        <p class="font-bold text-center">This is a public beta!</p>
                        <p class="text-sm text-center">We are still working a few things out, so feel free to explore but we aren't quite done yet!</p>
                    </div>
                </div>
            </div>
            @yield('content')
        </main>
        <footer class="flex justify-center pb-4 pt-8 bg-logo">
            <p class="align-center text-white font-sans text-sm">Support The Project | About The Project</p>
            <br><br>
            <p class="align-center text-white font-sans text-sm">Copyright © 2018 Matt Trask. <a class="no-underline text-white" href="https://github.com/phpversions/phpversions.info/graphs/contributors">Contributions from the community.</a></p>
        </footer>
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>