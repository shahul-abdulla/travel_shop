<?php

namespace App\Livewire;

use App\Models\Packages;
use Livewire\Component;

class PackageSearch extends Component
{
    public $searchQuery ='';

    public function render()
    {
        $results = [];
        if (strlen($this->searchQuery) > 2) { 
            $results = Packages::where('name', 'like', '%' . $this->searchQuery . '%')->get();
        }
        return view('livewire.package-search', [
            'results' => $results
        ]);
    }
}
