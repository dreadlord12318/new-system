<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-VBT5EKGCSE"></script>
<!-- Google Analytics -->
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-VBT5EKGCSE');
</script>

<!-- Bing Analytics -->
<meta name="msvalidate.01" content="1425AB284A081A5DC2F2027B0CACCA5A" />


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name', 'Westcott Dyson') }}</title>
<link rel="shortcut icon" type="image/jpg" href="/images/WCTT-Site-Image-Favicon.png"/>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <style>
        ul li::before {
 display: none;
}
    </style>
</head>

<body class="bg-gray-100 h-screen antialiased leading-none font-sans">

    <div id="app">
        <!-- <header class="bg-blue-900 py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                        {{ config('app.name', 'Laravel') }} Test Site
                    </a>
                </div>
                <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                    @guest
                        <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span>{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                           class="no-underline hover:underline"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </header> -->

        @yield('content')
        <footer class="bg-gray-800" aria-labelledby="footer-heading">
  <h2 id="footer-heading" class="sr-only">Footer</h2>
  <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
    
       
      
          
    <div class="mt-8 border-t border-gray-700 pt-8 md:flex md:items-center md:justify-between">
    <div class="flex space-x-6 md:order-2 mr-8">
    <a href="/terms" class="text-base text-gray-300 hover:text-white">
                  Terms and Conditions
                </a>
                <a href="/privacy" class="text-base text-gray-300 hover:text-white">
                  Privacy Policy
                </a>
    </div>
      
      <p class="mt-8 text-base text-gray-400 md:mt-0 md:order-1">
     ©2021 Westcott Dyson PTE LTD, all rights reserved. 
      </p>
    </div>
  </div>
  <!-- Menu Javascript -->

</footer>

    </div>
<!-- 
    <script>
				const btn = document.querySelector("button.mobile-menu-btn");
				const menu = document.querySelector(".mobile-menu");

				btn.addEventListener("click", () => {
					menu.classList.toggle("hidden");
				});
			</script> -->
            @include('cookie-consent::index')  
</body>
</html>
