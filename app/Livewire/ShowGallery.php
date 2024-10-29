<?php

namespace App\Livewire;

use App\Models\GalleryItem;
use Livewire\Component;

class ShowGallery extends Component
{
    public function render()
    {
        $galleryimages = GalleryItem::orderBy('updated_at', 'DESC')->get();
        return view('livewire.show-gallery' , [
            'galleryimages' => $galleryimages
        ]);
    }
}
