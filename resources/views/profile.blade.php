<x-app-layout>
    <x-slot name="header">
        <header >
            <div class="grid grid-cols-5 gap-4">
                <div class="col-start-2 col-span-1 flex justify-center w-auto mt-5">
                    <img src="{{$profile->profile_photo_url}}"  class="w-40 h-40 rounded-full" alt="{{$profile->username}}">
                </div>
                <div class="col-start-3 col-span-2 flex items-center w-auto mt-0">
                    <div class="flex items-center">
                        <h1 class="font-light text-3xl mr-14">{{$profile->username}}</h1>
                        <a href="{{route('profile.show')}}" class="border border-sloid border-gray-300 rounded-md py-0 px-5 mr-16 whitespace-nowrap">
                            Edit Profile
                        </a>
                        <a href="">
                            <x-jet-button class="ml-8 leading-none whitespace-nowrap">
                                {{__('Add post')}}
                            </x-jet-button>
                        </a>

                    </div>

                </div>
            </div>
            <div class="flex flex-col justify-center items-center">
                <ul class="flex flex-row mb-5">
                    <li class="mr-10 cursor-pointer"><span class="font-semibold">15</span>Posts</li>
                    <li class="mr-10 cursor-pointer"><span class="font-semibold">33</span>followers</li>
                    <li class="mr-10 cursor-pointer"><span class="font-semibold">40</span>following</li>
                </ul>
                <p class="mb-1 font-black ">{{$profile->name}}</p>
                <p>{{$profile->bio}}</p>
                <p class="text-blue-500">{{$profile->url}}</p>
            </div>
        </header>
    </x-slot>

{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">--}}
{{--                <x-jet-welcome />--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="max-w-4xl my-0 mx-auto">
        <hr class="mb-10">
        <div class="grid grid-cols-3 gap-4 mx-0 mt-0 mb-6">
            <div class="post">
                <a href="" class="w-full h-full">
                    <img src="{{asset('networking.png')}}" class="w-full h-full object-cover" alt="">
                    <div class="post-info">
                        <ul>
                            <li class="inline-block font-semibold mr-7">
                                <span class="absolute h-1 w-1 overflow-hidden">Likes:</span>
                                <i class="fas fa-heart"></i>33
                            </li>
                            <li class="inline-block font-semibold mr-7">
                                <span class="absolute h-1 w-1 overflow-hidden">Comments:</span>
                                <i class="fas fa-comment"></i>3333
                            </li>
                        </ul>
                    </div>
                </a>
            </div>
            <div class="post">
                <a href="" class="w-full h-full">
                    <img src="{{asset('networking.png')}}" class="w-full h-full object-cover" alt="">
                    <div class="post-info">
                        <ul>
                            <li class="inline-block font-semibold mr-7">
                                <span class="absolute h-1 w-1 overflow-hidden">Likes:</span>
                                <i class="fas fa-heart"></i>33
                            </li>
                            <li class="inline-block font-semibold mr-7">
                                <span class="absolute h-1 w-1 overflow-hidden">Comments:</span>
                                <i class="fas fa-comment"></i>3333
                            </li>
                        </ul>
                    </div>
                </a>
            </div>
            <div class="post">
                <a href="" class="w-full h-full">
                    <img src="{{asset('networking.png')}}" class="w-full h-full object-cover" alt="">
                    <div class="post-info">
                        <ul>
                            <li class="inline-block font-semibold mr-7">
                                <span class="absolute h-1 w-1 overflow-hidden">Likes:</span>
                                <i class="fas fa-heart"></i>33
                            </li>
                            <li class="inline-block font-semibold mr-7">
                                <span class="absolute h-1 w-1 overflow-hidden">Comments:</span>
                                <i class="fas fa-comment"></i>3333
                            </li>
                        </ul>
                    </div>
                </a>
            </div>
            <div class="post">
                <a href="" class="w-full h-full">
                    <img src="{{asset('networking.png')}}" class="w-full h-full object-cover" alt="">
                    <div class="post-info">
                        <ul>
                            <li class="inline-block font-semibold mr-7">
                                <span class="absolute h-1 w-1 overflow-hidden">Likes:</span>
                                <i class="fas fa-heart"></i>33
                            </li>
                            <li class="inline-block font-semibold mr-7">
                                <span class="absolute h-1 w-1 overflow-hidden">Comments:</span>
                                <i class="fas fa-comment"></i>3333
                            </li>
                        </ul>
                    </div>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
