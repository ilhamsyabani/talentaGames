<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;

class Score extends Component
{
    public $studentId;

    public function mount($studentId)
    {
        $this->studentId = $studentId;
    }

    public function render()
    {
        $studentData = Student::find($this->studentId);

        return view('livewire.score', ['selectedStudent' => $studentData]);
    }
}
