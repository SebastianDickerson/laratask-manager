<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;

class TasksTable extends Component
{

    public $tasks;

    public function mount()
    {
        $this->tasks = Task::all();
    }

    public function addTask()
    {
        Task::create([
            'title' => 'Tester Task',
            'description' => 'Description of the new task'
        ]);

        $this->tasks = Task::all();
    }

    public function deleteTask($id)
    {
        Task::destroy($id);

        $this->tasks = Task::all();
    }

    public function render()
    {
        return view('livewire.tasks-table', [
            'tasks' => $this->tasks
        ]);
    }
}
