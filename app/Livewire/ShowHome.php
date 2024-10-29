<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\HomeSlideImage;
use App\Models\Packages;
use App\Models\Service;
use App\Models\Testmonial;
use Livewire\Component;

class ShowHome extends Component
{
    public function render()
    {
        $slideImages = HomeSlideImage::orderBy('updated_at', 'DESC')->get();
        $services = Service::orderBy('title','ASC')->get();
        $testmonials = Testmonial::where('status',1)->orderBy('created_at' , 'DESC')->get();
        $articles = Article::where('status', 1)->orderBy('created_at', 'DESC')->take(3)->get(); 
        return view('livewire.show-home',['services' => $services,'testmonials' => $testmonials,'articles' => $articles, 'slideImages' => $slideImages]);
    }
}
