@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-white">
@include('header')

  <main>
    <!-- Header -->
  

    <!-- Contact Section -->
    <div class="relative bg-white">
      <div class="lg:absolute lg:inset-0">
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
          <img class="h-56 w-full object-cover lg:absolute lg:h-full" src="images/WCTT-Site-Image-Contact.jpg" alt="">
        </div>
      </div>
      <div class="relative py-16 px-4 sm:py-24 sm:px-6 lg:px-8 lg:max-w-7xl lg:mx-auto lg:py-32 lg:grid lg:grid-cols-2">
        <div class="lg:pr-8">
          <div class="max-w-md mx-auto sm:max-w-lg lg:mx-0">
            <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">
              Let's work together
            </h2>
            <p class="mt-4 text-lg leading-relaxed text-deep-700 sm:mt-3">
            Schedule a meeting to discuss your personal and family circumstances. We understand that everyone’s needs are different, and so we tailor individual solutions to fit your specific requirements.
            </p>
            @if (session('status'))
            <div class="bg-indigo-900 text-center py-4 lg:px-4">
              <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
                      <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">New</span>
                      <span class="font-semibold mr-2 text-left flex-auto">{{ session('status') }}</span>
                      <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
              </div>
            </div>
@endif
                 
            <form action="/contact" method="POST" class="mt-9 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
          
              <div>
                <label for="first-name" class="block text-sm font-medium text-deep-700">First name</label>
                <div class="mt-1">
                  <input type="text" name="first-name" id="first-name"  autocomplete="given-name" class="block w-full shadow-sm sm:text-sm focus:ring-grape-500 focus:border-grape-500 border-gray-300 rounded-md">
                </div>
              </div>
              <div>
                <label for="last-name" class="block text-sm font-medium text-deep-700">Last name</label>
                <div class="mt-1">
                  <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full shadow-sm sm:text-sm focus:ring-grape-500 focus:border-grape-500 border-gray-300 rounded-md">
                </div>
              </div>
              <div class="sm:col-span-2">
                <label for="email" class="block text-sm font-medium text-deep-700">Email</label>
                <div class="mt-1">
                  <input id="email" name="email" type="email" autocomplete="email" class="block w-full shadow-sm sm:text-sm focus:ring-grape-500 focus:border-grape-500 border-gray-300 rounded-md">
                </div>
              </div>
              <div class="sm:col-span-2">
              <div class="flex justify-between">
                <label for="company" class="block text-sm font-medium text-deep-700">Company</label>
                <span id="phone-description" class="text-sm text-gray-500">Optional</span>
              </div>
                <div class="mt-1">
                  <input type="text" name="company" id="company" autocomplete="organization" class="block w-full shadow-sm sm:text-sm focus:ring-grape-500 focus:border-grape-500 border-gray-300 rounded-md">
                </div>
              </div>
              <div class="sm:col-span-2">
                <div class="flex justify-between">
                  <label for="phone" class="block text-sm font-medium text-deep-700">Phone</label>
                  <span id="phone-description" class="text-sm text-gray-500">Optional</span>
                </div>
                <div class="mt-1">
                  <input type="text" name="phone" id="phone" autocomplete="tel" aria-describedby="phone-description" class="block w-full shadow-sm sm:text-sm focus:ring-grape-500 focus:border-grape-500 border-gray-300 rounded-md">
                </div>
              </div>
              <div class="sm:col-span-2">
                <div class="flex justify-between">
                  <label for="how-can-we-help" class="block text-sm font-medium text-gray-700">How can we help you?</label>
                  <span id="how-can-we-help-description" class="text-sm text-gray-500">Optional</span>
                  <!-- <span id="how-can-we-help-description" class="text-sm text-gray-500">Max. 500 characters</span> -->
                </div>
                <div class="mt-1">
                  <textarea id="how-can-we-help" name="how-can-we-help" aria-describedby="how-can-we-help-description" rows="4" class="block w-full shadow-sm sm:text-sm focus:ring-grape-500 focus:border-grape-500 border border-gray-300 rounded-md"></textarea>
                </div>
              </div>
              @csrf
              <div class="text-right sm:col-span-2">
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-chelsea-500 hover:bg-chelsea-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-grape-500">
                  Submit
                </button>
              </div>
           
              </div>
             
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- CTA Section -->

  </main>
</div>


@endsection