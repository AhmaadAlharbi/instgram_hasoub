<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="grid grid-cols-5 mt-7 gap-4">
        <div class=" col-start-2 col-span-3 border border-solid border-gray-300 ">
            <div class="grid grid-cols-5 ">
                <div class="col-span-3">
                    <div class="flex justify-center">
                        <img id="postImage" style="max-height:80vh;" src="/storage/{{$post->image_path}}" alt="">
                    </div>
                </div>
                <div class="col-span-2 bg-white flex flex-col">
                    <div class="flex p-3 border-b border-solid border-gray-300 item-center justify-between" id=sec1>
                        <div class="flex justify-center items-center ">
                            <img src="{{$post->user->profile_photo_url}}" alt="{{$post->user->username}}"
                                class="rounded-full h-10 w-10 me-3">
                            <a href="/{{$post->user->username}}">{{$post->user->username}}</a>
                        </div>
                        @can('update',$post)
                        <a href="/posts/{{$post->id}}/edit"
                            class="rounded-lg shadow px-4 py-2  bg-gray-900 text-white"><i class="fas fa-edit"></i></a>
                        <form action="{{route('posts.destroy',$post->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="rounded-lg shadow px-4 py-2  bg-red-600 text-white" type="submit"
                                onclick="return confirm('Are you sure you want to delete this post?')">
                                <i class="fa fa-trash"></i></button>
                        </form>
                        @endcan
                        @cannot('update',$post)
                        <div>
                            @livewire('follow-button',['profile_id'=>$post->user->id],key($post->user->id))
                        </div>
                        @endcannot


                    </div>
                    <div class="border-b border-solid border-gray-300 h-full">
                        <div class="grid grid-cols-5 overflow-y-auto" id="commentArea">
                            <div class="col-span-1 m-3">
                                <img src="{{$post->user->profile_photo_url}}" alt="{{$post->user->username}}"
                                    class="rounded-full h-10 w-10">
                            </div>
                            <div class="col-span-4 mt-5 me-7">
                                <a href="/{{$post->user->username}}">{{$post->user->username}}</a>
                                <span>{{$post->post_caption}}</span>
                            </div>
                            @foreach($post->comments as $comment)
                            <div class="col-span-1 m-3">
                                <img class="rounded-full h-10 w-10" src="{{$comment->user->profile_photo_url}}"
                                    alt="{{$comment->user->username}}">
                            </div>
                            <div class="col-span-4 mt-5 me-7">
                                <a href="/{{$comment->user->username}}"
                                    class="font-bold hover:underline">{{$comment->user->username}}</a>
                                <span>{{$comment->comment}}</span>
                                <div class="text-gray-500 text-xs">{{$comment->created_at->format('M j o')}}
                                    @can('update',$comment)
                                    <a href="/comments/{{$comment->id}}/edit" class="text-xs mx-2"><i
                                            class="fas fa-edit hover:text-red-500"></i></a>
                                    @endcan
                                    @can('delete',$comment)
                                    <form class="inline-block" action="/comments/{{$comment->id}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="text-xs mx-2" type="submit"
                                            onclick="return confirm('Are you sure you want to delete this comment?')">
                                            <i class="fas fa-trash hover:text-red-500"></i>
                                        </button>
                                    </form>
                                    @endcan
                                </div>

                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="flex flex-col" id="sec3">

                        @livewire('like-button',['post_id'=>$post->id],key($post->id))

                        <div class="border-b border-solid border-gray-300 ps-4 pb-1 text-xs">
                            {{$post->created_at->format('M j o')}}
                        </div>
                        <div class="p-4" id="sec4">
                            @if(Auth::check())
                            <form action="/comments" method="post">
                                @csrf
                                <div class="flex items-center justify-between">
                                    <input id="comment{{$post->id}}" type="text"
                                        class="w-full outline-none border-none p-1" id="comment"
                                        placeholder="{{{__('Add comment')}}}" name="comment" autocomplete="off">
                                    <input type="hidden" name="post_id" value="{{$post->id}}">
                                    <button
                                        class="text-blue-500 font-semibold hover:text-blue-700">{{__('Post')}}</button>
                                </div>
                            </form>
                            @else
                            <a href="/login" class="text-blue-500 text-sm">{{__('login')}}</a>
                            <span class="text-sm">{{__('to like or comment')}}</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>