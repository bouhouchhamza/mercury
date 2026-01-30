@extends('layout')
@section('content')

<h3>
    Modifier contact
</h3>
<form method="POST" action="{{ route('contacts.update',$contact)}}">
@csrf
@method('PUT')
<input type="text" name="name" value="{{ $contact->name }}"><br>
<input type="email" name="email" value="{{ $contact->email }}"><br>
<input type="email" name="email" value="{{ $contact->phone }}"><br>


<select name="group_id" >
    <option value="">---Groupe---</option>
    @foreach ($groups as $group)
        <option value="{{$group->id}}"
        {{ $contact->group_id === $group->id ? 'selected' : '' }}>
        {{ $group->name }}
        </option>
    @endforeach
</select>
    <br><br>
        <button>Modifier</button>
</form>
@endsection