<?php

namespace App\Http\Livewire\Learning;

use App\Models\Course;
use Livewire\Component;

class Courses extends Component
{
    public $courses;

    public function mount()
    {
        $this->courses = $this->read();
    }

    public function read()
    {
        return Course::all();
    }

    public function render()
    {
        return view('livewire.learning.courses');
    }
}
