@extends('layout.layout')

@section('title', 'Add route')

@section('content')
    <div id="content">
        <h2 class="style5">Edit route</h2>

        <form action="/routes/update/{{ $route->id }}" method="POST">
            @csrf
            {{ method_field('PATCH') }}

            <label for="route_id">Route id (readonly)</label>
            <input type="text" name="route_id" value="{{ $route->id }}" readonly="readonly" required/><br />
            <label for="route_method">Route method</label>
            <input type="text" name="route_method" placeholder="GET" value="{{ $route->method }}" required/><br />
            <label for="route_route">Route path</label>
            <input type="text" name="route_route" placeholder="/api/all/user" value="{{ $route->route }}" required/><br />
            <label for="route_query">Route query</label>
            <textarea name="route_query" placeholder="SELECT * FROM user" required>{{ $route->query }}</textarea><br />
            <label for="route_active">Route active</label>
            <input type="text" name="route_active"  value="{{ $route->active }}" required/><br />
            <input type="submit" />
        </form>
    </div>
@endsection