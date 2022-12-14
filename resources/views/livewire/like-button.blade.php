<div class="flex flex-col items-start ps-4 pb-1 mt-1">
    <div class="flex items-center">
        <button class="text-2xl me-3 focus:outline-none" wire:model="like-button" wire:click="ToggleLike({{$post_id}})">
            <i class="{{$isLiked ? " fas text-red-500" : "far" }} fa-heart"></i></button>
        <button class="text-2xl me-3 focus:outline-none"
            onclick="document.getElementById('comment{{$post_id}}').focus()"><i class="far fa-comment"></i></button>
        <button class="text-2xl me-3 focus:outline-none" onclick="copyToClipboard({{$post_id}})" id="{{$post_id}}"
            value="{{url('')}}/posts/{{$post_id}}"><i class="far fa-share-square"></i></button>
    </div>
    <span>{{__('Liked by')}} {{$likeCount}}</span>
</div>