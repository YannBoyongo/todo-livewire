<div class="flex justify-center">
    <div>
        <input type="text" wire:model="task" wire:keydown.enter="addTodo" placeholder="add task">

        @forelse ($todos as $todo)
            {{ $todo->task }}
        @empty
            <p>No task yet!</p>
        @endforelse
    </div>
</div>
