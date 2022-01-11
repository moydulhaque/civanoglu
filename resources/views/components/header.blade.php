<div class="fixed top-0 w-full py-4 px-4 md:px-12 flex justify-between items-center z-30 sticky-header {{request()->routeIs('home') ? '' : 'general-header'}}">
    <div class="min-w-max mr-8 md:mr-0">
        <a href="{{route('home')}}"><img width="100" src="/img/logo.png" alt=""></a>
    </div>

    <div class="w-full hidden md:block">
        <ul class="flex justify-center">
            <li><a class="inline-block p-4 text-white" href="{{route('properties')}}?type=land">Land</a></li>
            <li><a class="inline-block p-4 text-white" href="{{route('properties')}}?type=villa">{{__('Villa')}}</a></li>
            <li><a class="inline-block p-4 text-white" href="{{route('properties')}}?type=apartment">Apartment</a></li>
            <li><a class="inline-block p-4 text-white" href="{{route('page', 'about-us')}}">About Us</a></li>
            <li><a class="inline-block p-4 text-white" href="{{route('page', 'contact-us')}}">Contact Us</a></li>
        </ul>
    </div>
   
    <div class="min-w-max mr-4 md:mr-10 text-1xl">
        <a class="inline-block mr-5 text-white" href="{{route('currency-change', 'usd')}}">$</a>
        <a class="inline-block mr-5 text-white" href="{{route('currency-change', 'tl')}}">₺</a>
    </div>
    
    <div class="min-w-max text-3xl">
        <a href="{{ LaravelLocalization::getLocalizedURL('en') }}">🇺🇸</a>
        <a href="{{ LaravelLocalization::getLocalizedURL('tr') }}">🇹🇷</a>
    </div>
    <div class="min-w-max ml-10 md:hidden">
        <button>
            <i class="text-white" data-feather="menu"></i>
        </button>
    </div>
</div>
