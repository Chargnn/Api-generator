@extends('layout.layout')

@section('title', 'Add route')

@section('content')
    <div id="content">
        <h2 class="style5">Edit api</h2>

        <form action="/api/update/{{ $api->id }}" method="POST">
            @csrf
            {{ method_field('PATCH') }}

            <label for="api_id">Api id (readonly)</label>
            <input type="text" class="{{ $errors->has('api_id') ? 'invalid-input' : '' }}" name="api_id" value="{{ $api->id }}" minlength="1" readonly="readonly"/><br/>
            <label for="api_name">Api name</label>
            <input type="text" class="{{ $errors->has('api_name') ? 'invalid-input' : '' }}" name="api_name" value="{{ $api->name }}" minlength="3" maxlength="255" required/><br/>

            <?php if($database): ?>
                <h2 class="style5">Edit database connection to this api</h2>

                <label for="database_host">Host</label>
                <input type="text" class="{{ $errors->has('database_host') ? 'invalid-input' : '' }}" name="database_host" value="{{ $database->host }}" minlength="1" maxlength="255" required/><br/>
                <label for="database_username">Username</label>
                <input type="text" class="{{ $errors->has('database_username') ? 'invalid-input' : '' }}" name="database_username" value="{{ $database->username }}" minlength="1" maxlength="255" required/><br/>
                <label for="database_password">Password</label>
                <input type="password" class="{{ $errors->has('database_password') ? 'invalid-input' : '' }}" name="database_password" value="{{ $database->password }}" maxlength="255" /><br/>
                <label for="database_database">Database</label>
                <input type="text" class="{{ $errors->has('database_database') ? 'invalid-input' : '' }}" name="database_database" value="{{ $database->database }}" minlength="1" maxlength="255" required/><br/>

                @include('partials.test-db-connection')

                <button type="submit">Submit</button>
            <?php else: ?>
                <h2 class="style5">No database for this api, add it manually in the application db</h2>
            <?php endif; ?>
        </form>
    </div>
@endsection