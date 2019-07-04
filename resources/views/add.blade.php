@extends('layout.layout')

@section('title', 'Add route')

@section('content')
    <div id="content">
        <h2 class="style5">Add api</h2>

        <form action="/api/add" method="POST">
            @csrf
            <label for="api_name">Api name</label>
            <input type="text" class="{{ $errors->has('api_name') ? 'invalid-input' : '' }}" name="api_name" placeholder="Name" value="{{ old('api_name') }}" minlength="3" maxlength="255" required/><br />

            <h2 class="style5">Set database connection to this api</h2>

            <label for="database_host">Host</label>
            <input type="text" class="{{ $errors->has('database_host') ? 'invalid-input' : '' }}" name="database_host" placeholder="127.0.0.1" value="{{ old('database_host') }}" minlength="1" maxlength="255" required/><br />
            <label for="database_username">Username</label>
            <input type="text" class="{{ $errors->has('database_username') ? 'invalid-input' : '' }}" name="database_username" placeholder="admin" value="{{ old('database_username') }}" minlength="1" maxlength="255" required/><br />
            <label for="database_password">Password</label>
            <input type="password" class="{{ $errors->has('database_password') ? 'invalid-input' : '' }}" name="database_password" placeholder="password" value="{{ old('database_password') }}" maxlength="255" /><br />
            <label for="database_database">Database</label>
            <input type="text" class="{{ $errors->has('database_database') ? 'invalid-input' : '' }}" name="database_database" placeholder="database" value="{{ old('database_database') }}" minlength="1" maxlength="255" required/><br />

            @include('partials.test-db-connection')

            <input type="submit" />
        </form>

    </div>
@endsection