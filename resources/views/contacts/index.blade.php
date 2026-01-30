@extends('layout')
@section('content')

<h3>Contacts</h3>
<a href="{{ route('contacts.create') }}">➕ Ajouter contact</a>
<hr>
<form method="GET">
    <input type="text"
    name="search"
    placeholder="Rechercher par nom"
    value="{{ request('search') }}">
    <select name="group_id">
        <option value="">Tous les groupes</option>
        @foreach ($groups as $group)
            <option value="{{ $group->id }}">
                {{ $group->name }}
            </option>
        @endforeach
    </select>
    <button>Filtrer</button>
</form>
<hr>*
@foreach ($contacts as $contact)
<p>
    <strong>{{ $contact->name }}</strong>|
            {{ $contact->email }}                       |
             {{ $contact->phone }} |
            Groupe:
            {{ $contact->group->name ?? '-'}}
            <a href="{{ route('contacts.edit', $contact) }}">✏️</a>
    <form action="{{ route('contacts.destroy',$contact) }}" method="POST" style="display:inline">
        @csrf
        @method('DELETE')
        <button>🗑️</button>
    </form>
</p>
@endforeach
@endsection