<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Filters extends Component
{
    public $post_caption;
    public $image_path;

    public function mount($post_caption, $image_path)
    {
        $this->post_caption = $post_caption;
        $this->image_path = $image_path;
        $img = imagecreatefromstring(file_get_contents("storage/" . $this->image_path));
        imagefilter($img, IMG_FILTER_NEGATE);
        imagejpeg($img, './storage/uploads/1.jpeg', 100);
        imagedestroy($img);
    }
    public function render()
    {
        return view('livewire.filters');
    }
}