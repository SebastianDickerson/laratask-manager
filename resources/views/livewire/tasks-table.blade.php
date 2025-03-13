<div>
    <table class="w-full border-collapse">
        <thead>
            <tr class="border-b">
                <th class="py-3 px-3 text-left text-sm font-medium text-zinc-800 dark:text-white">Task</th>
                <th class="py-3 px-3 text-left text-sm font-medium text-zinc-800 dark:text-white">Assigned</th>
                <th class="py-3 px-3 text-left text-sm font-medium text-zinc-800 dark:text-white">Status</th>
                <th class="py-3 px-3 text-left text-sm font-medium text-zinc-800 dark:text-white">Due Date</th>
                <th class="py-3 px-3 text-left text-sm font-medium text-zinc-800 dark:text-white"></th>
            </tr>
        </thead>
        <tbody class="divide-y divide-zinc-800/10 dark:divide-white/20">
            @foreach ($tasks as $task)
                <tr>
                    <td class="py-3 px-3 text-sm text-zinc-500 dark:text-zinc-300 flex items-center gap-3">
                        <p class="text-sm font-medium text-zinc-800 dark:text-white">{{ $task->title }}</p>
                    </td>
                    <td class="py-3 px-3 text-sm text-zinc-500 dark:text-zinc-300 whitespace-nowrap">
                        <div class="size-6 rounded-sm overflow-hidden">
                            <img src="https://i.pravatar.cc/100?img=13" alt="User Avatar">
                        </div>
                    </td>
                    <td class="py-3 px-3 text-sm text-zinc-500 dark:text-zinc-300">
                        <flux:badge varient="pill" color="{{ $task->status_color }}" size="sm">{{ $task->status }}</flux:badge>
                    </td>
                    <td class="py-3 px-3 text-sm font-medium text-zinc-800 dark:text-white">
                        @if ($task->due_date)
                            <time datetime="{{ $task->due_date }}">{{ $task->due_date->format('M d, Y') }}</time>
                        @else
                            <span></span>
                        @endif
                    </td>
                    <td class="py-3 px-3 text-sm text-zinc-500 dark:text-zinc-300">
                        <flux:dropdown>
                            <flux:button icon-trailing="chevron-down"></flux:button>
        
                            <flux:menu>
                                <flux:menu.item icon="plus">Assign</flux:menu.item>
                                <flux:menu.item icon="pencil">Edit</flux:menu.item>

                                <flux:menu.separator />
        
                                <flux:menu.item wire:click="deleteTask" variant="danger" icon="trash">Delete</flux:menu.item>
                            </flux:menu>
                        </flux:dropdown>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-3">
        <flux:button wire:click="$refresh" wire:click="addTask" varitent="primary" icon="plus">Add New Task</flux:button>
    </div>
</div>    
