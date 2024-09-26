<?php

namespace App\Livewire;

use App\Models\Reply;
use Livewire\Component;

class ShowReply extends Component
{
    public Reply $reply;
    public $body ="";
    public $is_creating = false;
    public $is_editing = false;

    public function updatedIsCreating()
    {
        $this->is_editing= false; # close the edit form
        $this->body = ""; # clear the body
    }

    public function updatedIsEditing()
    {
        $this->is_creating = false; # close the create form
        $this->body = $this->reply->body; # set the body to the current reply body
    }

    public function updateReply()
    {
        //- validate
        $this->validate([
            'body' => 'required',
        ]);

        // Crear una nueva respuesta
        $this->reply->update([
            'body' => $this->body,
        ]);

        //- refresh
        $this->is_editing = false; # close the edit form
    }

    public function postChild()
    {
        if(!is_null($this->reply->reply_id)) return; # only the first level replies can have children

        //- validate
        $this->validate([
            'body' => 'required',
        ]);

        // Crear una nueva respuesta
        auth()->user()->replies()->create([
            'reply_id' => $this->reply->id,
            'thread_id' => $this->reply->thread->id,
            'body' => $this->body,
        ]);

        //- refresh the thread
        $this->body = "";
        $this->is_creating = false;
    }

    public function render()
    {
        return view('livewire.show-reply');
    }
}
