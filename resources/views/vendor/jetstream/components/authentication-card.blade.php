<div class="min-h-screen flex flex-row sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div>
        <img src="networking.png" class="w-40 mx-12" alt="">
    </div>
    <div class="flex flex-col">

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>

        @if(str_contains(url()->current(),'login'))
        <div
            class="w-full sm:max-w-md mt-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg flex justify-center items-center ">
            <div class="text-sm text-gray-600 pe-5">{{__('Do not have an account')}} <a href="{{route('register')}}"
                    class="text-blue-700 hover:text-blue-900 text-base font-bold mx-2">{{__('Sign up')}}</a></div>
        </div>
        @endif
    </div>

</div>