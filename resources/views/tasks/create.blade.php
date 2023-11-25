<x-layout page="Criar Tarefa">
    <x-slot:btn>
        <a href="{{ route('home') }}"class="btn btn-primary">
            Voltar para Home</a>
    </x-slot:btn>

    <section id="create_task_section">
        <h1>Criar Tarefa</h1>
        <form>

            <div class="inputArea">
                <label for="title">
                    Titulo da Tarefa
                </label>
                <input id="title" name="title"placeholder="Digite o título da tarefa" required>
            </div>

            <x-form.text_input name="title"label="Título da Tarefa" required="required" />

            <x-form.text_input type="date" name="due_date" label="Data de Realização"
                placeholder="Escolha a data da tarefa" />

            <x-form.select_input name="category" label="Categoria" placeholder="Selecione uma categoria">
                <option>Valor qualquer</option>
            </x-form.select_input>

            <x-form.textarea_input name="description" placeholder="Digite a descrição da tarefa" />
            <div class="inputArea">
                <button type="reset" class="btn">Resetar</button>
                <button type="submit" class="btn btn-primary">Criar Tarefa</button>
            </div>
        </form>
    </section>

</x-layout>
