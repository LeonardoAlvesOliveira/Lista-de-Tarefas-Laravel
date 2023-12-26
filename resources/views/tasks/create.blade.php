<x-layout page="Criar Tarefa">
    <x-slot:btn>
        <a href="{{ route('home') }}"class="btn btn-primary">
            Voltar para Home</a>
    </x-slot:btn>

    <section id="create_task_section">
        <h1>Criar Tarefa</h1>
        <form method="POST"action="{{ route('task.create_action') }}">
            @csrf

            <div class="inputArea">
                <label for="title">
                    Titulo da Tarefa
                </label>
                <input id="title" name="title"placeholder="Digite o título da tarefa" required>
            </div>

            <x-form.text_input name="title"label="Título da Tarefa" required="required" />

            <x-form.text_input type="date" name="due_date" label="Data de Realização"
                placeholder="Escolha a data da tarefa" />

            <x-form.select_input name="category_id" label="Categoria" placeholder="Selecione uma categoria">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </x-form.select_input>

            <x-form.textarea_input name="description" placeholder="Digite a descrição da tarefa" />

            <x-form.form_button resetTxt="Resetar" submitTxt="Criar Tarefa" />


        </form>
    </section>

</x-layout>
