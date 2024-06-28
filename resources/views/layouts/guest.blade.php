<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>{{ config('app.name', 'Laravel') }}</title>
      <link rel="stylesheet" href="{{ asset('assets/vendors/core/core.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/fonts/feather-font/css/iconfont.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/demo_1/style.css') }}">
      <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
      @vite(['resources/css/app.css', 'resources/js/app.js'])
   </head>
   <body>
      <div class="main-wrapper">
         <div class="page-wrapper full-page">
            <div class="page-content d-flex align-items-center justify-content-center">
               <div class="row w-100 mx-0 auth-page">
                  <div class="col-md-8 col-xl-6 mx-auto">
                     <div class="card">
                        <div class="row">
                           <div class="col-md-4 pr-md-0">
                              <div class="auth-left-wrapper">
                              </div>
                           </div>
                           <div class="col-md-8 pl-md-0">
                            {{ $slot }}
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src="{{ asset('assets/vendors/core/core.js') }}"></script>
      <script src="{{ asset('assets/vendors/feather-icons/feather.min.js') }}"></script>
      <script src="{{ asset('assets/js/template.js') }}"></script>
   </body>
</html>
