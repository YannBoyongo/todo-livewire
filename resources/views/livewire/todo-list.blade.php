<div class="flex justify-center">
    <div>
        <input type="text" wire:model="task" wire:keydown.enter="addTodo" placeholder="add task">

        @forelse ($todos as $todo)
            <div>
                @if ($todo->status == 'open')
                    <input type="checkbox" id="markAsDone" wire:change="markAsDone({{ $todo->id }})">
                @endif
                <label for="markAsDone"
                    style="{{ $todo->status == 'done' ? 'text-decoration: line-through' : '' }}">{{ $todo->task }}</label>
            </div>

        @empty
            <p>No task yet!</p>
        @endforelse
    </div>
</div>
