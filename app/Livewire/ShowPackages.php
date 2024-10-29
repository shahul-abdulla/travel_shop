<?php

namespace App\Livewire;

use App\Models\Packages;
use Livewire\Component;

class ShowPackages extends Component
{
    public function render()
    {
        $packages = Packages::orderby('created_at', 'ASC')->where('status',1)->get();
        return view('livewire.show-packages', ['packages' => $packages]);
    }
}
