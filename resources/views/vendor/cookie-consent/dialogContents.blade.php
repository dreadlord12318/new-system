<div class="js-cookie-consent cookie-consent  fixed bottom-0 inset-x-0 z-40 ">
    <div class="max-w-full ">
        <div class="p-5  bg-gray-900 ">
            <div class="flex items-center justify-between flex-wrap">
                <div class="w-0 flex-1 items-center hidden md:inline">
                    <p class="ml-3 text-white cookie-consent__message">
                        {!! trans('cookie-consent::texts.message') !!}
                    </p>
                </div>
                <div class="mt-2 flex-shrink-0 w-full sm:mt-0 sm:w-auto">
                    <a class="js-cookie-consent-agree cookie-consent__agree cursor-pointer flex items-center justify-center py-2 px-8 bg-chelsea-500 hover:bg-deep-500 text-white rounded font-bold text-sm shadow-xl mr-3">
                        {{ trans('cookie-consent::texts.agree') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
