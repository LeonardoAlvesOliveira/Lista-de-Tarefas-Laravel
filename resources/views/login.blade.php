<x-layout page="Login">

    <x-slot:btn>
        <a href="{{ route('register') }}"class="btn btn-primary">Registre-se
        </a>
        <a href="{{ route('home') }}" class="btn btn-primary">Ir para home</a>
    </x-slot:btn>

    <section id="task_section">
        <h1>Autenticação</h1>
        @if ($errors->any())
            <ul class="alert alert-error">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form method="POST"action="{{ route('user.login_action') }}">
            @csrf
            <x-form.text_input name="email" type="email" label="Email" placeholder="Email" />
            <x-form.text_input name="password" type="password" label="Senha" placeholder="Senha" />

            <x-form.form_button resetTxt="Limpar" submitTxt="Login" />


        </form>
    </section>

</x-layout>
