<x-layout page="Home">

    <x-slot:btn>
        <a href="{{ route('task.create') }}"class="btn btn-primary">Criar Tarefa
        </a>
        <a href="{{ route('logout') }}"class="btn btn-primary">Sair
        </a>
    </x-slot:btn>

    <section class="graph">
        <div class="graph_header">
            <h2>Progresso do dia - </h2>
            <div class="graph_header-line"></div>
            <div class="graph_header-date">
                <a href="{{ route('home', ['date' => $date_prev_button]) }}"> <img src="/assets/images/icon-prev.png"
                        alt="">{{ $date_as_string }}</a>
                <a href="{{ route('home', ['date' => $date_next_button]) }}"> <img src="/assets/images/icon-next.png"
                        alt=""></a>
            </div>
        </div>
        <div class="graph_header-subtitle">Tarefa: <b>{{ $tasks_count - $undone_tasks_count }}/{{ $tasks_count }}</b>
        </div>
        <div class="graph-placeholder"></div>
        <div class="tasks_left_footer">
            <img src="/assets/images/icon-info.png" alt="">
            Restam {{ $undone_tasks_count }} tarefas para serem realizadas
        </div>

    </section>
    <section class="list">
        <div class="list-header">
            <select class="list_header-select">
                <option value="1">Todas as Tarefas</option>
            </select>
        </div>
        <div class="task_list">

            @foreach ($tasks as $task)
                <x-task :data='$task' />
            @endforeach
    </section>


    <script>
        async function taskUpdate(element) {
            let = isDone = element.checked
            let taskId = element.dataset.id
            let url = '{{ route('task.update') }}'
            let rawResult = await fetch(url, {
                method: 'POST',
                headers: {
                    'Content-type': 'application/json',
                    'accept': 'application/json'
                },
                body: JSON.stringify({
                    status,
                    taskId,
                    _token: '{{ csrf_token() }}'
                })
            })
            result = await rawResult.json()
            if (result.success) {
                alert('task atualizada com sucesso!')

            } else {
                element.checked = !status
            }
        }
    </script>
    </main>
</x-layout>
