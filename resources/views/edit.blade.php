@extends('layout.layout')

@section('title', 'Add route')

@section('content')
    <div id="content">
        <h2 class="style5">Edit api</h2>

        <form action="/api/update" method="POST">
            @csrf
            <label for="api_id">Api id (readonly)</label>
            <input type="text" name="api_id" value="{{ $api->id }}" readonly="readonly"/><br/>
            <label for="api_name">Api name</label>
            <input type="text" name="api_name" value="{{ $api->name }}" required/><br/>

            <?php if($database): ?>
                <h2 class="style5">Edit database connection to this api</h2>

                <label for="database_host">Host</label>
                <input type="text" name="database_host" value="{{ $database->host }}" required/><br/>
                <label for="database_username">Username</label>
                <input type="text" name="database_username" value="{{ $database->username }}" required/><br/>
                <label for="database_password">Password</label>
                <input type="password" name="database_password" value="{{ $database->password }}" /><br/>
                <label for="database_database">Database</label>
                <input type="text" name="database_database" value="{{ $database->database }}" required/><br/>
                <label for="database_charset">Charset</label>
                <input type="text" name="database_charset" value="{{ $database->charset }}" required/><br/>

                @include('partials.test-db-connection')

                <input type="submit"/>
            <?php else: ?>
                <h2 class="style5">No database for this api, add it manually in the application db</h2>
            <?php endif; ?>
        </form>
    </div>
@endsection