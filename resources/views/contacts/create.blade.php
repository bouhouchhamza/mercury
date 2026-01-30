@extends('layout')
@section('content')

<h3>Ajouter contact</h3>
<form method="POST" action="{{ route('contacts.store') }}">
    @csrf
    <input type="text" name="name" placeholder="Nom"><br>
    <input type="text" name="email" placeholder="Email"><br>
    <input type="text" name="phone" id="Téléphone"><br>
    <select name="group_id" >
        <option value="">---Groupe---</option>
        @foreach ($groups as $group)
            <option value="{{ $group->id }}">
                {{ $group->name}}
            </option>
        @endforeach
    </select>
    <br>
    <button>Enregitrer</button>
</form>

@endsection