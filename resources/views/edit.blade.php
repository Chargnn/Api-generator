@extends('layout.layout')

@section('title', 'Add route')

@section('content')
    <div id="content">
        <h2 class="style5">Edit api</h2>

        <form action="/api/update" method="POST">
            @csrf
            <label for="api_id">Api id (readonly)</label>
            <input type="text" name="api_id" value="{{ $api->id }}" readonly="readonly" /><br />
            <label for="api_name">Api name</label>
            <input type="text" name="api_name" value="{{ $api->name }}" required/><br />
            <input type="submit" />
        </form>

        <?php if($database): ?>
            <h2 class="style5">Edit database connection to this api</h2>

            <form action="/database/update" method="POST">
                @csrf
                <label for="database_host">Host</label>
                <input type="text" name="database_host" value="" required/><br />
                <label for="database_username">Username</label>
                <input type="text" name="database_username" value="" required/><br />
                <label for="database_password">Password</label>
                <input type="password" name="database_password" value="" required/><br />
                <label for="database_charset">Charset</label>
                <input type="text" name="database_charset" value="" required/><br />

                <input type="submit" />
            </form>
        <?php else: ?>
            <h2 class="style5">No database for this api, add it manually in the application db</h2>
        <?php endif; ?>
    </div>
@endsection