<!-- Layout for Pages -->
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{config('app.name', 'LSAPP')}}</title>
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            {{-- Error and Success Messages --}}
            @include('inc.messages')
            
            {{-- Page Content --}}
            @yield('content')
        </div>

        {{-- Script for CKEDITOR --}}
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
        {{-- Script for CKEDITOR --}}

    </body>
</html>
