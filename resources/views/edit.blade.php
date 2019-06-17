@extends('layout.layout')

@section('title', 'Add route')

@section('content')
    <div id="content">
        <h2 class="style5">Edit api!</h2>

        <form action="/api/update" method="POST">
            @csrf
            <label for="api_id">Api id (readonly)</label>
            <input type="text" name="api_id" value="{{ $api->id }}" readonly="readonly" /><br />
            <label for="api_name">Api name</label>
            <input type="text" name="api_name" value="{{ $api->name }}" required/><br />
            <input type="submit" />
        </form>
    </div>
@endsection