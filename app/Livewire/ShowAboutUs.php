<?php

namespace App\Livewire;

use App\Models\Testmonial;
use Livewire\Component;

class ShowAboutUs extends Component
{
    public function render()
    {
        $testmonials = Testmonial::where('status',1)->orderBy('name' , 'ASC')->get();
        return view('livewire.show-about-us', compact('testmonials'));
    }
}
