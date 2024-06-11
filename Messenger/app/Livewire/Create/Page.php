<?php

namespace App\Livewire\Create;

use Livewire\Component;
use App\Models\_News;

class Page extends Component

{
    public $title;

    public function render()
    {
        return view('livewire.create.page');
    }
    public function save()
    {
        //dd($this->title, $this->short, $this->long);
        _News::create ([
            'title'=>$this->title,
        ]);
        $this->title=null;
    }
}
