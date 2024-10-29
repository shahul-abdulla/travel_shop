<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ShowBlog extends Component
{
    public function render()
    {
        $paginate = 6;
        $articles = Article::where('status', 1)->orderBy('created_at','DESC')->paginate($paginate);
        return view('livewire.show-blog',[
            'articles' => $articles
        ]);
    }
}
