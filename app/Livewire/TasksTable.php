<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;

class TasksTable extends Component
{
    public function render()
    {
        // Fetch all tasks from the database
        $tasks = Task::all();
        return view('livewire.tasks-table', ['tasks' => $tasks]);
    }
}
