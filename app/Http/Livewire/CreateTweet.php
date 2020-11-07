<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateTweet extends Component
{
    public $input;
    public int $remainingChars;

    public bool $isOver = false;

    public function render()
    {
        $this->remainingChars = 140 - strlen($this->input);

        $this->remainingChars < 0 ? $this->isOver = true : $this->isOver = false;

        return view('livewire.create-tweet');
    }
}
