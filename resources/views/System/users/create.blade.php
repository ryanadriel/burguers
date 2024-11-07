

<h2>Create User</h2>

@if(session()->has('message'))
    {{ session()->get('message') }}
@endif

<form action="{{ route('users.store') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Seu Nome" />
    <input type="text" name="email" placeholder="Seu e-mail" />
    <input type="password" name="password" placeholder="Insira sua senha" />

    <button type="submit">create</button>
</form>
