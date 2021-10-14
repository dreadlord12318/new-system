@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-white">
  <header class="relative z-10">
    <div class="bg-gray-50">
      <nav class="relative max-w-7xl mx-auto flex items-center justify-between pt-8 px-6 xl:px-8" aria-label="Global">
        <div class="flex items-center justify-between w-full lg:w-auto">
          <a href="/">
            <span class="sr-only">Workflow</span>
            <img class="h-8 w-auto sm:h-10" src="/images/WCTT-Site-Image-NavLogo.png" alt="">
          </a>
          <div class="-mr-2 flex items-center lg:hidden">
            <button type="button" class="bg-gray-50 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-100 focus:outline-none focus:ring-2 focus-ring-inset focus:ring-grape-500" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <!-- Heroicon name: outline/menu -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
            </button>
          </div>
        </div>
        <div class="hidden space-x-10 lg:flex lg:ml-10">
              <a href="/contact" class="font-medium text-gray-900 hover:text-gray-900">Contact Us</a>
        </div>
        <div class="hidden lg:flex lg:items-center lg:space-x-6">
         
        </div>
      </nav>
    </div>

    <!--
      Mobile menu, show/hide based on menu open state.

      Entering: "duration-150 ease-out"
        From: "opacity-0 scale-95"
        To: "opacity-100 scale-100"
      Leaving: "duration-100 ease-in"
        From: "opacity-100 scale-100"
        To: "opacity-0 scale-95"
    -->
    <div class="absolute top-0 inset-x-0 p-2 transition transform origin-top lg:hidden">
      <div class="rounded-lg shadow-lg bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
        <div class="px-5 pt-4 flex items-center justify-between">
          <div>
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=purple&shade=600" alt="">
          </div>
          <div class="-mr-2">
            <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-grape-500">
              <span class="sr-only">Close menu</span>
              <!-- Heroicon name: outline/x -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>
        <div class="pt-5 pb-6">
          <div class="px-2 space-y-1">
          

<a href="/contact" class="font-medium text-gray-900 hover:text-gray-900">Contact Us</a>
          </div>
         
        </div>
      </div>
    </div>
  </header>



  <div class="py-16 xl:py-36 px-4 sm:px-6 lg:px-8 bg-white overflow-hidden">
  <div class="max-w-max lg:max-w-7xl mx-auto">
    <div class="relative z-10 mb-8 md:mb-2 md:px-6">
      <div class="text-base max-w-prose lg:max-w-none">
        <h2 class="leading-6 text-indigo-600 font-semibold tracking-wide uppercase">Transactions</h2>
        <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">A better way to send money</p>
      </div>
    </div>
    <div class="relative">
      <svg class="hidden md:block absolute top-0 right-0 -mt-20 -mr-20" width="404" height="384" fill="none" viewBox="0 0 404 384" aria-hidden="true">
        <defs>
          <pattern id="95e8f2de-6d30-4b7e-8159-f791729db21b" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
          </pattern>
        </defs>
        <rect width="404" height="384" fill="url(#95e8f2de-6d30-4b7e-8159-f791729db21b)" />
      </svg>
      <svg class="hidden md:block absolute bottom-0 left-0 -mb-20 -ml-20" width="404" height="384" fill="none" viewBox="0 0 404 384" aria-hidden="true">
        <defs>
          <pattern id="7a00fe67-0343-4a3c-8e81-c145097a3ce0" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
          </pattern>
        </defs>
        <rect width="404" height="384" fill="url(#7a00fe67-0343-4a3c-8e81-c145097a3ce0)" />
      </svg>
      <div class="relative md:bg-white md:p-6">
        <div class="lg:grid lg:grid-cols-2 lg:gap-6">
          <div class="prose prose-indigo prose-lg text-gray-500 lg:max-w-none">
            <p>Ultrices ultricies a in odio consequat egestas rutrum. Ut vitae aliquam in ipsum. Duis nullam placerat cursus risus ultrices nisi, vitae tellus in. Qui non fugiat aut minus aut rerum. Perspiciatis iusto mollitia iste minima soluta id.</p>
            <p>Erat pellentesque dictumst ligula porttitor risus eget et eget. Ultricies tellus felis id dignissim eget. Est augue <a href="#">maecenas</a> risus nulla ultrices congue nunc tortor. Eu leo risus porta integer suspendisse sed sit ligula elit.</p>
            <ol role="list">
              <li>Integer varius imperdiet sed interdum felis cras in nec nunc.</li>
              <li>Quam malesuada odio ut sit egestas. Elementum at porta vitae.</li>
            </ol>
            <p>Amet, eu nulla id molestie quis tortor. Auctor erat justo, sed pellentesque scelerisque interdum blandit lectus. Nec viverra amet ac facilisis vestibulum. Vestibulum purus nibh ac ultricies congue.</p>
          </div>
          <div class="mt-6 prose prose-indigo prose-lg text-gray-500 lg:mt-0">
            <p>Erat pellentesque dictumst ligula porttitor risus eget et eget. Ultricies tellus felis id dignissim eget. Est augue maecenas risus nulla ultrices congue nunc tortor.</p>
            <p>Eu leo risus porta integer suspendisse sed sit ligula elit. Elit egestas lacinia sagittis pellentesque neque dignissim vulputate sodales. Diam sed mauris felis risus, ultricies mauris netus tincidunt. Mauris sit eu ac tellus nibh non eget sed accumsan. Viverra ac sed venenatis pulvinar elit. Cras diam quis tincidunt lectus. Non mi vitae, scelerisque felis nisi, netus amet nisl.</p>
            <p>Eu eu mauris bibendum scelerisque adipiscing et. Justo, elementum consectetur morbi eros, posuere ipsum tortor. Eget cursus massa sed velit feugiat sed ut. Faucibus eros mauris morbi aliquam nullam. Scelerisque elementum sit magna ullamcorper dignissim pretium.</p>
          </div>
        </div>
     
      </div>
    </div>
  </div>
</div>
@endsection