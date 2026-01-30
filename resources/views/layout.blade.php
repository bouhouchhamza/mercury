<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <title>Mercury -Contact Manger</title>
</head>
<body>
    <h2>Mercury Contact Manager</h2>

    <nav>
        <a href="{{ route('contacts.index') }}">Contacts</a>
        <a href="{{ route('groups.index') }}">Groups</a>
    </nav>
    <hr>

    @if (session('success'))
        <p style="color:green">{{ session('success')}}</p>
    @endif

    @if ($errors->any())
        <ul style="color:red">
            @foreach ($errors->all() as $error )
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    @yield('content')
</body>
</html>