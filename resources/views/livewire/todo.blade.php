<div>
    <div class="row">
        <div class="col-6">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Body</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($todos as $todo)
                    <tr>
                        <th scope="row">{{ $todo->id }}</th>
                        <td>{{ $todo->body }}</td>
                        <td>
                            <button wire:click="delete({{ $todo->id }})" class="btn btn-danger mb-3">Delete</button>
                        </td>
                    </tr>
                    <p></p>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-6">
            <form wire:submit.prevent="save">
                <div class="mb-3">
                    <label for="body" class="form-label">Body</label>
                        <input type="text" class="form-control" id="body" wire:model="todo.body">
                    </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary mb-3">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

