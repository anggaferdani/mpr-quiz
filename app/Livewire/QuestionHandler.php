<?php

namespace App\Livewire;

use Livewire\Component;

class QuestionHandler extends Component
{
    public $question;

    public function mount($question)
    {
        $this->question = $question;
    }

    public function sendToOtherFile()
    {
        // Tulis logika untuk mengirim pertanyaan ke file lain di sini
        // Misalnya: event(new QuestionSelected($this->question));
    }

    public function render()
    {
        return view('livewire.question-handler');
    }
}
