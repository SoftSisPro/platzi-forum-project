<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Thread;
use Livewire\Component;

class ShowThreads extends Component
{
    public $search = "";
    public $category = "";

    public function filterByCategory($category)
    {
        $this->category = $category;
    }

    public function render()
    {
        # Get all categories
        $categories = Category::get();

        $threads = Thread::query();
        $threads -> where('title', 'like', "%$this->search%"); //- search by title
        if($this->category) {
            $threads -> where('category_id', $this->category); // - filter by category
        }
        $threads -> with('category', 'user'); // - eager load category
        $threads -> withCount('replies'); // - count the number of replies
        $threads -> latest(); // - order by latest


        return view('livewire.show-threads',[
            'categories' => $categories,
            'threads' => $threads->paginate(5) // - paginacion del resultado
        ]);
    }
}
