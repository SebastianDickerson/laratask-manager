<flux:table :paginate="$this->tasks">
    <flux:table.columns>
        <flux:table.column>Task</flux:table.column>
        <flux:table.column sortable :sorted="$sortBy === 'date'" :direction="$sortDirection" wire:click="sort('date')">Due Date</flux:table.column>
        <flux:table.column sortable :sorted="$sortBy === 'status'" :direction="$sortDirection" wire:click="sort('status')">Status</flux:table.column>
    </flux:table.columns>

    <flux:table.rows>
        @foreach ($this->tasks as $task)
            <flux:table.row :key="$task->id">
                <flux:table.cell class="flex items-center gap-3">
                    {{ $task->name }}
                </flux:table.cell>

                <flux:table.cell class="whitespace-nowrap">{{ $task->due_date }}</flux:table.cell>

                <flux:table.cell>
                    <flux:badge size="sm" :color="$order->status_color" inset="top bottom">{{ $task->status }}</flux:badge>
                </flux:table.cell>

                <flux:table.cell variant="strong">Something</flux:table.cell>

                <flux:table.cell>
                    <flux:button variant="ghost" size="sm" icon="ellipsis-horizontal" inset="top bottom"></flux:button>
                </flux:table.cell>
            </flux:table.row>
        @endforeach
    </flux:table.rows>
</flux:table>