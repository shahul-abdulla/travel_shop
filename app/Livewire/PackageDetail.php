<?php

namespace App\Livewire;

use App\Models\Packages;
use Livewire\Component;

class PackageDetail extends Component
{
    public $packagedetail;

    public function mount($slug)
    {
      $this->packagedetail = Packages::where('slug', $slug)->firstOrFail();
    }
    public function render()
    {

        return view('livewire.package-detail' ,[
            'packagedetail' => $this->packagedetail,
        ]);
    }
}
