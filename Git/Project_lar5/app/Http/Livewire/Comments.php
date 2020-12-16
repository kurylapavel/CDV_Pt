<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Comments extends Component
{   
    public $Name = "Janusz";

    public $comments=[
        [
            'body'=>'Tresc komentzrza',
            'creator'=>'CDV',
            'created'=>'5 min temu',
        ]
    ];

    public function addComment(){

        return $comments[0]['body'] = 'some new comment';

    }



    public function render()
    {
        return view('livewire.comments');
    }
}
