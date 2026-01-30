@extends('layout')
@section('content')

<h3>Modifier groupe</h3>

<form method="POST" action="{{ route('groups.update', $group) }}" >
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{old('name',$group->name)}}">
    <button>Modifier</button>
</form>
@endsection