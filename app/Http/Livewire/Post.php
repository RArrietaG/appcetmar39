<?php

namespace App\Http\Livewire;

use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Post extends Component
{
    public $post;

    public $search;
    public function render()
    {

        return view('livewire.post',[
            $posts = Post::all()

        ]);
    }
}
