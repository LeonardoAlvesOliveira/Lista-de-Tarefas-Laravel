<x-layout page="Criar Tarefa">
    <x-slot:btn>
        <a href="{{ route('home') }}"class="btn btn-primary">
            Voltar para Home</a>
    </x-slot:btn>

    <section id="create_task_section">
        <h1>Criar Tarefa</h1>
        <form>
            <div class="inputArea">
                <label for="title">Título da task</label>
                <input type="title" id="title" placeholder="Digite o título da tarefa" required>
            </div>
            <div class="inputArea">
                <label for="title">Data de Realização</label>
                <input type="date" id="due_date" name="due_date" placeholder="Digite a data da tarefa" required>
            </div>
            <div class="inputArea">
                <label for="category">Categoria</label>
                <select name="category" required>
                    <option selected disabled>Selecione a categoria</option>
                    <option>Feito</option>
                    <option>Não Feito</option>
                    <option>Fazendo</option>
                </select>
            </div>
            <div class="inputArea">
                <label for="title">
                    Descrição da Tarefa
                </label>
                <textarea name="description" placeholder="Digite a descrição"></textarea>
            </div>
        </form>
    </section>
</x-layout>
