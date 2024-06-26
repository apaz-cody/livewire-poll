<?php

namespace App\Http\Livewire;

use App\Models\Option;
use Livewire\Component;

class Polls extends Component
{
    protected $listeners = [
        'pollCreated' => 'render'
    ];

    public function render()
    {
        $polls = \App\Models\Poll::with('options.votes')->where('user_id',auth()->user()->id)
            ->latest()->get();

        return view('livewire.polls', ['polls' => $polls]);
    }

    public function vote(Option $option)
    {
        $option->votes()->create();
    }

    public function unvote(Option $option)
    {
        $option->votes()->limit(1)->delete();
    }
}