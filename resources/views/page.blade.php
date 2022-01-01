<x-guest-layout>
    <div class="shadow-md border-2 border-gray-300 py-2 bg-white mt-28">
        <div class="container mx-auto">
            <ul class="flex items-center">
                <li><a class="text-base text-red-800" href="{{route('home')}}">Home - </a></li>
                <li class="mx-3"><i class="fa fa-angle-right"></i></li>
                <li>{{$page->name}}</li>
            </ul>
        </div>
    </div>

    <div class="container py-14 min-h-screen">
    {{$page->content}}
    </div>
</x-guest-layout>
