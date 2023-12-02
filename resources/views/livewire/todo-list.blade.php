<div class="container">
    <div>
        <input type="text" wire:model="task" wire:keydown.enter="addTodo" placeholder="add task">

        @forelse ($todos as $key=>$todo)
            <div>
                @if ($todo->status == 'open')
                    <input type="checkbox" id="markAsDone-{{ $todo->id }}"
                        wire:change="markAsDone({{ $todo->id }})">
                @endif
                <label for="markAsDone-{{ $todo->id }}"
                    style="{{ $todo->status == 'done' ? 'text-decoration: line-through' : '' }}">{{ $key + 1 }}.
                    {{ $todo->task }}</label>
                @if ($todo->status == 'done')
                    <button wire:click="deleteTask({{ $todo->id }})"><i class="fa fa-trash"></i></button>
                @endif
            </div>

        @empty
            <p>No task yet!</p>
        @endforelse
    </div>
</div>
