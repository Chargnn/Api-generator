@extends('layout.layout')

@section('title', 'Add route')

@section('content')
    <div id="content">
        <h2 class="style5">Edit route</h2>

        <form action="/routes/update/{{ $route->id }}" method="POST">
            @csrf
            {{ method_field('PATCH') }}

            <label for="route_id">Route id (readonly)</label>
            <input type="text" class="{{ $errors->has('route_id') ? 'invalid-input' : '' }}" name="route_id" value="{{ $route->id }}" minlength="1" readonly="readonly" required/><br />
            <label for="route_method">Route method</label>
            <input type="text" class="{{ $errors->has('route_method') ? 'invalid-input' : '' }}" name="route_method" placeholder="GET" minlength="1" maxlength="255" value="{{ $route->method }}" required/><br />
            <label for="route_route">Route path</label>
            <input type="text" class="{{ $errors->has('route_route') ? 'invalid-input' : '' }}" name="route_route" placeholder="/api/all/user" minlength="1" maxlength="255" value="{{ $route->route }}" required/><br />
            <label for="route_query">Route query</label>
            <textarea class="{{ $errors->has('route_query') ? 'invalid-input' : '' }}" name="route_query" placeholder="SELECT * FROM user" minlength="1" maxlength="255" required>{{ $route->query }}</textarea><br />
            <label for="route_active">Route active</label>
            <input type="checkbox" class="{{ $errors->has('route_active') ? 'invalid-input' : '' }}" name="route_active" value="{{ $route->active ? 'true' : 'false' }}"  {{ $route->active ? 'checked' : '' }} required/><br />
            <input type="submit" />
        </form>
    </div>
@endsection