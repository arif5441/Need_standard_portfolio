<!DOCTYPE html>
<html lang="en" dir="ltr" data-scompiler-id="0">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="format-detection" content="telephone=no" />

        @include('backend.includes.css')
        
    </head>
    <body>
        <!-- sa-app -->
        <div class="sa-app sa-app--desktop-sidebar-shown sa-app--mobile-sidebar-hidden sa-app--toolbar-fixed">

            @include('backend.includes.sidebar')

            <!-- sa-app__content -->
            <div class="sa-app__content">

                @include('backend.includes.header')

                @yield('content')

                @include('backend.includes.footer')
    </body>
</html>
