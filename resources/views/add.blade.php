@extends('layout.layout')

@section('title', 'Add route')

@section('content')
    <div id="content">
        <h2 class="style5">Add api!</h2>

        <form action="/api/add" method="POST">
            @csrf
            <label for="api_name">Api name</label>
            <input name="api_name" placeholder="Name" required/><br />
            <input type="submit" />
        </form>

    </div>
@endsection