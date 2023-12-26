<x-layout page="editar tarefa">
    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">Voltar Home</a>
    </x-slot:btn>
    Tela de editar tarefa ID:{{ $task->id }}
</x-layout>
