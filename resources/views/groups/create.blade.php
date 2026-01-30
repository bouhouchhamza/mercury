@extends('layout')
@section('content')
<h3>Ajouter groupe</h3>
<form method="POST" action="{{ route('groups.store') }}">
    @csrf
    <input type="text" name="name" placeholder="Nom du groupe">
    <button>Enregistrer</button>
</form>
@endsection