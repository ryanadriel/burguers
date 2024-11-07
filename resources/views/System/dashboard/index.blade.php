@extends('System.layout.template')

@section('content')
<h2>Voce esta no Dashboard</h2>

<form action="{{route('logout')}}" method="post">
    @csrf
    <button type="submit">Logout</button>
</form>
@endsection
