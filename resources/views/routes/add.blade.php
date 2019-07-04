@extends('layout.layout')

@section('title', 'Add route')

@section('content')
    <div id="content">
        <h2 class="style5">Add route</h2>

        <form action="/routes/add" method="POST">
            @csrf
            <input type="hidden" name="api_id" value="{{$api_id}}" required/>
            <label for="route_method">Route method</label>
            <input type="text" name="route_method" placeholder="GET" required/><br />
            <label for="route_route">Route path</label>
            <input type="text" name="route_route" placeholder="/api/all/user" required/><br />
            <label for="route_query">Route query</label>
            <textarea name="route_query" placeholder="SELECT * FROM user" required></textarea><br />
            <input type="submit" />
        </form>

    </div>
@endsection