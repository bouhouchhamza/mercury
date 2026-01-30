@extends('layout')
@section('content')

<h3>Liste des groupes</h3>

<<a href="{{ route('groups.create') }}">Ajouter groupe</a>

@foreach ($groups as $group )
<div class="card">
    {{ $group->name }}

    <a href="{{ route('groups.edit',$group)}}">✏️Edit</a>
    <form action="{{ route('groups.destroy',$group)}}" method="POST" style="display:inline" @csrf @method('DELETE')><button></button>🗑️
</form>
</div>
@endforeach
@endsection