<?php

namespace App\Livewire\Read;

use Livewire\Component;
use App\Models\_News;

class Page extends Component
{
    
    public $news;
    public function render()
    {
        $this->news = News::all();
        return view('livewire.read.page');
    }
}
