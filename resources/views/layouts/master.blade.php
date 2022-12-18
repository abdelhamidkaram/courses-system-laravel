<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() =='ar'  ? 'rtl' : 'ltr'}}">
<head>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.16/dist/css/uikit.min.css" />
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.16/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.15.16/dist/js/uikit-icons.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet"  href={{ asset('css/master.css') }} >
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>


        
</head>
<body>

   {{-- add nav bar  --}}


   @include('common.topbar')


   {{-- add content  --}}

   <main  id="main"class="uk-margin-medium-top uk-margin-medium-bottom">

    @yield('content')

   </main>


   {{-- footer  --}}


   @include('common.footer')





</body>


</html>