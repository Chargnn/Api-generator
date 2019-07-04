@extends('layout.layout')

@section('title', 'Add route')

@section('content')
    <div id="content">
        <h2 class="style5">Add route</h2>

        <form action="/routes/add" method="POST">
            @csrf
            <input type="hidden" class="{{ $errors->has('api_id') ? 'invalid-input' : '' }}" name="api_id" value="{{$api_id}}" minlength="1" required/>
            <label for="route_method">Route method</label>
            <input type="text" class="{{ $errors->has('route_method') ? 'invalid-input' : '' }}" name="route_method" placeholder="GET" minlength="3" maxlength="255" value="{{ old('route_method') }}" required/><br />
            <label for="route_route">Route path</label>
            <input type="text" class="{{ $errors->has('route_route') ? 'invalid-input' : '' }}" name="route_route" placeholder="/api/all/user" minlength="1" maxlength="255" value="{{ old('route_routec') }}" required/><br />
            <label for="route_query">Route query</label>
            <textarea class="{{ $errors->has('route_query') ? 'invalid-input' : '' }}" name="route_query" placeholder="SELECT * FROM user" minlength="1" maxlength="255" required>{{ old('route_query') }}</textarea><br />
            <input type="submit" />
        </form>

    </div>
@endsection