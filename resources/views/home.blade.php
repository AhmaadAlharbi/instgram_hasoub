<x-app-layout>
    <x-slot name="header"></x-slot>
    <div class="grid grid-cols-12 mt-7 gap-4">
        <div class="col-start-3 col-span-5">
            @forelse($posts as $post)
            <div class="flex flex-col border border-solid border-gray-300 mb-14 bg-white">
                <div class="flex flex-row p-3 border-b border-solid border-gray-300 items-center">
                    <a href="/{{$post->user->username}}">
                        <img src="{{$post->user->profile_photo_url}}" alt="avatar" class="rounded-full h-12 w-12 mr-3">
                    </a>
                    <a href="/{{$post->user->username}}" class="hover:underline">{{$post->user->username}}</a>
                </div>
                <div>
                    <a href="/posts/{{$post->id}}"><img src="/storage/{{$post->image_path}}" alt=""></a>
                </div>
                <div>
                    @livewire('like-button',['post_id'=>$post->id],key($post->id))
                </div>
                <div class="border-b border-solid border-gray-200 pl-4 pb-1">
                    <div class="mr-7 mb-2">
                        <a href="/{{$post->user->username}}">{{$post->user->username}}</a>
                        <span>{{$post->post_caption}}</span>
                    </div>
                    @foreach($post->comments as $comment)
                    <div class="mr-7">
                        <a class="font-bold hover:underline"
                            href="/{{$comment->user->username}}">{{$comment->user->username}}</a>
                        <span>{{$comment->comment}}</span>
                    </div>
                    @endforeach
                    <div class="text-gray-500 text-xs">
                        {{$post->created_at->format('M j o')}}
                    </div>
                    <div class="p-4" id="sec4">
                        @if(Auth::check())
                        <form action="/comments" method="post">
                            @csrf
                            <div class="flex items-center justify-between">
                                <input type="text" class="w-full outline-none border-none p-1" id="comment"
                                    placeholder="{{{__('Add comment')}}}" name="comment" autocomplete="off">
                                <input type="hidden" name="post_id" value="{{$post->id}}">
                                <button class="text-blue-500 font-semibold hover:text-blue-700">{{__('Post')}}</button>
                            </div>
                        </form>
                        @else
                        <a href="/login" class="text-blue-500 text-sm">{{__('login')}}</a>
                        <span class="text-sm">{{__('to like or comment')}}</span>
                        @endif
                    </div>
                </div>
            </div>
            @empty
            <div class="m-10">
                <p class="font-semibold">{{__('start your journey, follow your friends')}}</p>
            </div>

            @endforelse
        </div>
        <div class="col-start-8 col-span-3 ml-4">
            <div class="flex items-center">
                <a href="/{{$profile->username}}"><img src="{{$profile->profile_photo_url}}"
                        class="rounded-full h-12 w-12" alt=""></a>
                <div class="flex flex-col">
                    <a href="/{{$profile->username}}" class="text-base hover:underline">{{$profile->username}}</a>
                    <h3 class="text-sm text-gray-400">{{$profile->bio}}</h3>
                    @forelse($iFollow as $follow)
                    <div class="flex flex-col mb-3">
                        <div class="flex justify-between ">
                            <div class="flex ">
                                <a href="/{{$follow->username}}">
                                    <img src="{{$follow->profile_photo_url}}" class="rounded-full w-12 h-12" alt="">
                                </a>
                                <div class="flex flex-col self-center">
                                    <a href="/{{$follow->username}}">{{$follow->username}}</a>
                                    <h3 class="text-sm text-gray-500" style="max-width: 25ch;">{{$follow->bio}}</h3>
                                </div>
                            </div>
                            @livewire('follow-button',['profile_id'=>$follow->id],key($follower->id))
                        </div>
                    </div>
                    @empty
                    <div class="my-10">
                        <p class=" font-semibold ">{{__('Nothing to show right now')}}</p>
                    </div>
                    @endforelse
                    <h3 class="mt-4 mb-4 text-gray-500">{{__('People you may like to folloiw')}}</h3>
                    @forelse($toFollow as $follow)
                    <div class="flex flex-col mb-3">
                        <div class="flex justify-between ">
                            <div class="flex ">
                                <a href="/{{$follow->username}}">
                                    <img src="{{$follow->profile_photo_url}}" class="rounded-full w-12 h-12" alt="">
                                </a>
                                <div class="flex flex-col self-center">
                                    <a href="/{{$follow->username}}">{{$follow->username}}</a>
                                    <h3 class="text-sm text-gray-500" style="max-width: 25ch;">{{$follow->bio}}</h3>
                                </div>
                            </div>
                            @livewire('follow-button',['profile_id'=>$follow->id],key($follower->id))
                        </div>
                    </div>
                    @empty
                    <div class="my-10">
                        <p class=" font-semibold ">{{__('Nothing to show right now')}}</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>