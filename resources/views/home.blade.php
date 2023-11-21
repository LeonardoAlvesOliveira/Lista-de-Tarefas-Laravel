<x-layout page="Home">

    <x-slot:btn>
        <a href=""class="btn btn-primary">Criar Tarefa
        </a>
    </x-slot:btn>
    <section class="graph">
        <div class="graph_header">
            <h2>Progresso do dia</h2>
            <div class="graph_header-line"></div>
            <div class="graph_header-date">
                <img src="/assets/images/icon-prev.png" alt="">13 de Dez
                <img src="/assets/images/icon-next.png" alt="">
            </div>
        </div>
        <div class="graph_header-subtitle">Tarefa: <b> 3/6 </b></div>
        <div class="graph-placeholder"></div>
        <div class="tasks_left_footer">
            <img src="/assets/images/icon-info.png" alt="">
            Restam 3 tarefas para serem realizadas
        </div>

    </section>
    <section class="list">
        <div class="list-header">
            <select class="list_header-select">
                <option value="1">Todas as Tarefas</option>
            </select>
        </div>
        <div class="task_list">
            <div class="task">
                <div class="title">
                    <input type="checkbox">
                    <h1>Titulo da tarefa</h1>
                </div>
                <div class="priority">
                    <div class="sphere"></div>
                    <div class="task_title">Titulo da tarefa</div>
                </div>
                <div class="actions">
                    <a href="">
                        <img src="/assets/images/icon-edit.png" alt="">
                    </a>
                    <a href="">
                        <img src="/assets/images/icon-delete.png" alt="">
                    </a>
                </div>
            </div>
    </section>
    </main>
</x-layout>
