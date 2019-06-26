@extends('layout.layout')

@section('title', 'Add route')

@section('content')
    <div id="content">
        <h2 class="style5">Add api</h2>

        <form action="/api/add" method="POST">
            @csrf
            <label for="api_name">Api name</label>
            <input name="api_name" placeholder="Name" required/><br />

            <h2 class="style5">Set database connection to this api</h2>

            <label for="database_host">Host</label>
            <input type="text" name="database_host" placeholder="127.0.0.1" required/><br />
            <label for="database_username">Username</label>
            <input type="text" name="database_username" placeholder="admin" required/><br />
            <label for="database_password">Password</label>
            <input type="password" name="database_password" placeholder="password" required/><br />
            <label for="database_database">Database</label>
            <input type="text" name="database_database" placeholder="database" required/><br />
            <label for="database_charset">Charset</label>
            <input type="text" name="database_charset" placeholder="utf8" required/><br />

            <input type="submit" />
        </form>

    </div>
@endsection