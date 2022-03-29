@extends('layouts.app')

@section('title', 'Singapore-based Retirement planning firm for expatriate British citizens ')

@section('description', 'Singapore-based Retirement planning firm for expatriate British citizens we specialise in UK inheritance tax, and creative estate planning.')

@section('content')
<!-- Start of Header -->
<div class="relative bg-white overflow-hidden">
  <div class="max-w-7xl mx-auto">
    <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
      <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
        <polygon points="50,0 100,0 50,100 0,100" />
      </svg>

      <div>
      <nav class = "bg-white  mb-10">
    <div x-data="{ isOpen: false }" class="md:max-w-7xl lg:max-w-5xl mx-auto py-6 px-6 md:px-0 md:flex md:justify-between md:items-center">
        <div class="flex justify-between items-center">
            <div class="flex items-center md:ml-4">
            <a href="/">
            <span class="sr-only">Westcott Dyson</span>
            <img class="h-8 w-auto sm:h-10" src="/images/WCTT-Site-Image-NavLogo.png" alt="">
          </a>
            </div>
            <div class="flex md:hidden">
                <button type="button"
                 class="bg-gray-50 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-100 focus:outline-none focus:ring-2 focus-ring-inset focus:ring-grape-500"
                 aria-label="toggle menu"
                 x-on:click="isOpen = !isOpen">
                <span class="sr-only">Open main menu</span>
                <!-- Heroicon name: outline/menu -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                </button>
            </div>
            <div class="hidden md:block md:ml-4 space-x-10 lg:flex lg:ml-4">
              <a href="/contact" class="font-medium text-gray-900 hover:text-gray-900">Contact Us</a>
        </div>
        </div>
        <!-- Menu Mobile -->
        <div x-show="isOpen" class="md:flex items-center">
            <div class="flex flex-wrap justify-around content-around md:hidden flex-col md:flex-row md:ml-6">
            <a href="/contact" class="font-medium text-gray-900 hover:text-gray-900 mt-4">Contact Us</a>
            </div>
        </div>
    </div>

</nav>
      </div>

      <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
        <div class="sm:text-center lg:text-left">
          <h1 class="lg:text-7xl leading-none tracking-tight font-extrabold font-ptsans text-gray-900 sm:text-5xl md:text-6xl">
            <span class=" xl:inline text-deep-800">Wealth Advisory for </span>
            <span class=" text-deep-800 xl:inline">New Realities</span>
          </h1>
          <p class="mt-3  font-copy text-lg leading-8  text-deep-600 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
          Westcott Dyson Pte Ltd is a consultancy practice for British citizens living outside the United Kingdom.  
          <br>
          We specialise in retirement design for British citizens, UK inheritance tax, and creative estate planning. 
          </p>
          <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
            <div class="rounded-md shadow">
              <a href="/contact" class="w-full flex font-ptsans items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-chelsea-500 hover:bg-chelsea-500 md:py-4 md:text-lg md:px-10">
              Learn More
              </a>
            </div>
            <!-- <div class="mt-3 sm:mt-0 sm:ml-3">
              <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10">
                Live demo
              </a>
            </div> -->
          </div>
        </div>
      </main>
    </div>
  </div>
  <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
    <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="images/WCTT-Site-Image-Hero.jpg" alt="">
  </div>
</div>
</div>
<!-- End of Header -->


<!-- 2nd Section -->

<div class="bg-chelsea-500">
  <div class="max-w-7xl mx-auto pt-8 pb-4 px-4 sm:px-6 lg:px-8">
    <div class="flex justfiy-around justify-center">
      <img class = "w-2/5" src = 'images/WCTT - ID - LogoPP - ColorStack - Green.svg'/>
    </div>
  </div>
</div>
<!-- End of 2nd Section -->


<div class="py-12 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="lg:text-center">
      <h2 class="text-base text-deep-500 font-semibold tracking-wide uppercase">OUR EXPERTISE</h2>
      <p class="mt-2 text-4xl leading-loose font-ptsans font-extrabold tracking-tight text-deep-800 sm:text-4xl">
      A New Era for Wealth Management
      </p>
      <p class="mt-4 leading-relaxed font-copy  max-w-2xl text-xl text-deep-700 lg:mx-auto">
      Established by a seasoned estate and retirement planning expert, Westcott Dyson distils three decades of insights and experience into wealth solutions for citizens of the United Kingdom. 
      We advise clients on the complexities specific to British expatriates living abroad or expecting to return to the UK in the future.   </p>
      <p class="mt-4 leading-relaxed font-copy  max-w-2xl text-xl text-deep-700 lg:mx-auto">
      As global events move in new and unexpected directions, making wise decisions about your financial future is only prudent. Westcott Dyson invests its engagements with exhaustive research, instinct borne of deep experience, and a commitment to maximising your wealth.  </p>
    </div>

    <div class="lg:text-center">
      <h2 class="text-base mt-6 text-deep-500 font-semibold tracking-wide uppercase">COMMON PITFALLS</h2>
      <p class="text-4xl leading-loose font-ptsans font-extrabold tracking-tight text-deep-800 sm:text-4xl">
      Retirement Planning
      </p>
      <p class="mt-4 leading-relaxed font-copy  max-w-2xl text-xl text-deep-700 lg:mx-auto">
      We frequently see these mistakes that can harm your retirement plan or create unforeseen challenges down the road when you are the least prepared to confront the unexpected.  </p>
    </div>

    <div class="mt-10">
      <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
        <div class="relative">
          <dt>
            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-chelsea-500 text-white">
              <!-- Heroicon name: outline/globe-alt -->
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
</svg>
            </div>
            <p class="ml-16 text-2xl leading-6 font-medium text-deep-500">If you have a will, it’s wrong</p>
          </dt>
          <dd class="mt-2 leading-relaxed ml-16 text-xl font-copy  text-deep-700">
          Maybe you have a will, but it was drafted incorrectly or not properly current. 
          A blind survey conducted by the Solicitor Regulation Authority in the UK found that 25% of all wills written (including those written by a solicitor) are invalid, inadequate, or don’t reflect your intent.
          </dd>
        </div>

        <div class="relative">
          <dt>
            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-chelsea-500 text-white">
              <!-- Heroicon name: outline/scale -->
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 9a2 2 0 10-4 0v5a2 2 0 01-2 2h6m-6-4h4m8 0a9 9 0 11-18 0 9 9 0 0118 0z" />
</svg>
            </div>
            <p class="ml-16 text-2xl leading-6 font-medium text-deep-500">Poor Asset Management</p>
          </dt>
          <dd class="mt-2 ml-16 leading-relaxed  font-copy text-xl text-deep-700">
          You are holding assets incorrectly, or they are not structured to maximise estate planning opportunities and tax efficiency. 
          Some held assets avoid inheritance tax, but clients are often not informed about these asset options.
          </dd>
        </div>

        <div class="relative">
          <dt>
            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-chelsea-500 text-white">
              <!-- Heroicon name: outline/lightning-bolt -->
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
</svg>
            </div>
            <p class="ml-16 text-2xl leading-6 font-medium text-deep-500">Improperly Structured Trusts</p>
          </dt>
          <dd class="mt-2 ml-16 leading-relaxed  font-copy text-xl text-deep-700">
          It’s wise to use a trust as part of your estate planning, but it is too common to find that it does not fit the purpose or is incorrect.
          </dd>
        </div>

        <div class="relative">
          <dt>
            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-chelsea-500 text-white">
              <!-- Heroicon name: outline/annotation -->
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
</svg>
            </div>
            <p class="ml-16 text-2xl leading-6 font-medium text-deep-500">Life Insurance Wrongly Included in the Estate</p>
          </dt>
          <dd class="mt-2 ml-16 leading-relaxed  font-copy text-xl text-deep-700">
          People often use life insurance to pay UK inheritance tax liabilities and guarantee family protection. However, planners often neglect the critical step of setting up the insurance policy in trust. 
          This oversight will result in the benefits being potentially taxed at 40%, adding needless tax and potential long delays in payment.
          </dd>
        </div>
      </dl>
    </div>
  </div>
</div>

<!-- Start of CTA -->
<div class="bg-wedgewood-500">
  <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-24 lg:px-8 lg:flex lg:items-center lg:justify-between">
    <h2 class="text-7xl font-extrabold tracking-tight md:text-4xl">
      <span class="block text-white font-ptsans text-7xl font-serif">
Schedule a consultation today.</span>
      <!-- <span class="block text-indigo-600">Start your free trial today.</span> -->
    </h2>
    <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
      <div class="inline-flex rounded-md shadow">
        <a href="/contact" class="inline-flex font-ptsans items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-chelsea-500 hover:bg-chelsea-500">
      Start Now
        </a>
      </div>
    </div>
  </div>
</div>
<!-- End of CTA -->

<!-- Alternating -->

<div class="relative bg-white pt-16 pb-32 overflow-hidden">
  <div class="relative">
    <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
      <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-10 lg:max-w-none lg:mx-0 lg:px-0">
        <div>
          <div>
            <span class="h-12 w-12 rounded-md flex items-center justify-center bg-chelsea-500">
              <!-- Heroicon name: outline/inbox -->
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="white">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
</svg>
            </span>
          </div>
          <div class="mt-6">
            <h2 class="text-3xl font-extrabold tracking-tight text-deep-700">
            Informed, Professional Advice
            </h2>
            <p class="mt-4 font-copy text-xl leading-loose text-deep-600 font-normal">
            British expatriates often have misconceptions about the complex estate and inheritance tax rules.
A common fallacy is that UK inheritance tax does not apply to long-term expatriates. This is usually incorrect: UK Domicile law means that you may not be subject to UK income tax while living abroad, but you are still subject to inheritance tax.
You are subject to bad estate planning without current, accurate advice. Ill-informed advice has serious implications for your estate and family
            </p>
            
          </div>
        </div>
        <div class="mt-8  border-gray-200 pt-6">
          
        </div>
      </div>
      <div class="mt-12 sm:mt-16 lg:mt-0">
        <div class="pl-4 -mr-48 sm:pl-6 md:-mr-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
          <img class="w-full lg:absolute lg:left-0 lg:h-full lg:w-auto lg:max-w-none" src="images/WCTT-Site-Image-Info1.jpg" alt="Inbox user interface">
        </div>
      </div>
    </div>
  </div>
  <div class="mt-24">
    <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
      <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-10 lg:max-w-none lg:mx-0 lg:px-0 lg:col-start-2">
        <div>
          <div>
            <span class="h-12 w-12 rounded-md flex items-center justify-center bg-chelsea-500">
              <!-- Heroicon name: outline/sparkles -->
              <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
              </svg>
            </span>
          </div>
          <div class="mt-6">
            <h2 class="text-3xl font-extrabold tracking-tight text-deep-700">
            Smart Pension Decisions
            </h2>
            <p class="mt-4 font-copy text-xl leading-loose text-deep-600 font-normal">
            Perhaps you’ve been advised to move your UK pensions abroad. There are definite benefits to moving a UK pension overseas in exceptional cases. However, this depends on where you move it to and, more importantly, what benefits you are giving up with your pension in the UK.
            <br> 
            There are many different types of UK pensions and some with significant benefits and guarantees. We work with many clients who have been improperly advised by so-called international advisers to transfer their UK pension abroad. They are not qualified nor understand the intricate details of a UK pension. Clients have not received a balanced view of the pros and cons in these situations. Acting on advice informed by self-interest, clients transfer pensions abroad only to lose valuable benefits and protections — often reducing income guarantees, losing fee restrictions, and lowering their asset value in the bargain.
            <br>
            Schedule a meeting to discuss your personal and family circumstances. We understand that everyone’s needs are different, and so we tailor individual solutions to fit your specific requirements.
            </p>
           
          </div>
        </div>
      </div>
      <div class="mt-12 sm:mt-16 lg:mt-0 lg:col-start-1">
        <div class="pr-4 -ml-48 sm:pr-6 md:-ml-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
          <img class="w-full lg:absolute lg:right-0 lg:h-full lg:w-auto lg:max-w-none" src="/images/WCTT-Site-Image-Info2.jpg" alt="Customer profile user interface">
        </div>
      </div>
    </div>
  </div>
</div>


<!-- End of Alternating -->


@endsection