<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Todo;

class TodoComponent extends Component
{
    public Todo $todo;

    protected $rules = [
        'todo.body' => 'required|string|min:6',
    ];

    public function mount()
    {
        $this->todo = new Todo();
    }

    public function render()
    {
        $todos = Todo::all();
        return view('livewire.todo', compact('todos'));
    }

    public function save()
    {
        $this->todo->status = true;
        $this->todo->save();
        $this->mount();
//       dd($this->todo);
    }

    public function delete(Todo $todo)
    {
        $this->emit('todoDeleted', $todo->id);
        $todo->delete();

    }
}
