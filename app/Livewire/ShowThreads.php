<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Thread;
use Livewire\Component;

class ShowThreads extends Component
{
    public $search = "";

    public function render()
    {
        $categories = Category::get();

        $threads = Thread::query();
        $threads -> where('title', 'like', "%$this->search%"); //- search by title
        $threads -> withCount('replies'); // - count the number of replies
        $threads -> latest(); // - order by latest

        return view('livewire.show-threads',[
            'categories' => $categories,
            'threads' => $threads->get() // - get the results
        ]);
    }
}
