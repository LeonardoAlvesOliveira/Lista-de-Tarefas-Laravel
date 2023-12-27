<x-layout page="registro">

    <x-slot:btn>
        <a href="{{ route('home') }}"class="btn btn-primary">
            Voltar para Home</a>
    </x-slot:btn>

    <section id="task_section">
        <h1>Registrar-se</h1>
        <form method="POST"action="{{ route('user.register_action') }}">
            @csrf

            <x-form.text_input name="name" label="Nome" placeholder="Nome" />
            <x-form.text_input name="email" type="email" label="Email" placeholder="Email" />
            <x-form.text_input name="password" type="password" label="Senha" placeholder="Senha" />
            <x-form.text_input name="password_confirmation" type="password" label="Confirme sua senha"
                placeholder="Confirme sua senha" />

            <x-form.form_button resetTxt="Limpar" submitTxt="Registrar-se" />


        </form>
    </section>

</x-layout>
