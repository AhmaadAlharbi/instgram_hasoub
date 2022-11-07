<div class="max-w-4xl my-0 mx-auto">
    <div class="grid grid-cols-3 gap-4 mx-0 mt-0 mb-10">
        <div>
            <p class="text-center">{{__('original')}}</p>
            <img src="/storage/{{$image_path}}" class="w-64 h-64 cursor-pointer " wire:model="filters"
                wire:click="applyFilter(0)">
        </div>
        <div>
            <p class="text-center">{{__('filter 1')}}</p>
            <img src="/storage/uploads/1.jpeg" class="w-64 h-64 cursor-pointer" wire:model="filters"
                wire:click="applyFilter(1)">
        </div>
        <div>
            <p class="text-center">{{__('filter 2')}}</p>
            <img src="/storage/uploads/2.jpeg" class="w-64 h-64 cursor-pointer" wire:model="filters"
                wire:click="applyFilter(2)">
        </div>
        <div>
            <p class="text-center">{{__('filter 3')}}</p>
            <img src="/storage/uploads/3.jpeg" class="w-64 h-64 cursor-pointer" wire:model="filters"
                wire:click="applyFilter(3)">
        </div>
        <div>
            <p class="text-center">{{__('filter 4')}}</p>
            <img src="/storage/uploads/4.jpeg" class="w-64 h-64 cursor-pointer" wire:model="filters"
                wire:click="applyFilter(4)">
        </div>
        <div>
            <p class="text-center">{{__('filter 5')}}</p>
            <img src="/storage/uploads/5.jpeg" class="w-64 h-64 cursor-pointer" wire:model="filters"
                wire:click="applyFilter(5)">
        </div>
        <div>
            <p class="text-center">{{__('filter 6')}}</p>
            <img src="/storage/uploads/6.jpeg" class="w-64 h-64 cursor-pointer" wire:model="filters"
                wire:click="applyFilter(6)">
        </div>
        <div>
            <p class="text-center">{{__('filter 7')}}</p>
            <img src="/storage/uploads/7.jpeg" class="w-64 h-64 cursor-pointer" wire:model="filters"
                wire:click="applyFilter(7)">
        </div>
        <div>
            <p class="text-center">{{__('filter 8')}}</p>
            <img src="/storage/uploads/8.jpeg" class="w-64 h-64 cursor-pointer" wire:model="filters"
                wire:click="applyFilter(8)">
        </div>
        <div>
            <p class="text-center">{{__('filter 9')}}</p>
            <img src="/storage/uploads/9.jpeg" class="w-64 h-64 cursor-pointer" wire:model="filters"
                wire:click="applyFilter(9)">
        </div>
        <div>
            <p class="text-center">{{__('filter 10')}}</p>
            <img src="/storage/uploads/10.jpeg" class="w-64 h-64 cursor-pointer" wire:model="filters"
                wire:click="applyFilter(10)">
        </div>
        <div>
            <p class="text-center">{{__('filter 11')}}</p>
            <img src="/storage/uploads/11.jpeg" class="w-64 h-64 cursor-pointer" wire:model="filters"
                wire:click="applyFilter(11)">
        </div>
        <div>
            <p class="text-center">{{__('filter 12')}}</p>
            <img src="/storage/uploads/12.jpeg" class="w-64 h-64 cursor-pointer" wire:model="filters"
                wire:click="applyFilter(12)">
        </div>
        <div>
            <p class="text-center">{{__('filter 13')}}</p>
            <img src="/storage/uploads/13.jpeg" class="w-64 h-64 cursor-pointer" wire:model="filters"
                wire:click="applyFilter(13)">
        </div>
    </div>
</div>