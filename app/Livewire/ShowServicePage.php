<?php

namespace App\Livewire;

use App\Models\Packages;
use App\Models\Service;
use Livewire\Component;

class ShowServicePage extends Component
{
    public function render()
    {
        $services = Service::orderBy('title', 'ASC')->get();
        $packages = Packages::orderby('created_at', 'ASC')->where('status',1)->get();
        return view('livewire.show-service-page', [
            'services' => $services ,'packages' =>$packages
        ]);
    }
}
