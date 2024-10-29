<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class BlogDetail extends Component
{
    public $article;

    public function mount($slug)
    {
        $this->article = Article::where('slug', $slug)->firstOrFail();
    }
    public function render()
    {
        return view('livewire.blog-detail', [
            'article' => $this->article,
        ]);    }
}
