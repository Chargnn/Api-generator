@extends('layout.layout')

@section('title', 'Add route')

@section('content')
    <div id="content">
        <h2 class="style5">Add route!</h2>

        <form action="/api/add/route" method="POST">
            @csrf
            <input type="hidden" name="api_id" value="{{$api_id}}" required/>
            <input type="text" name="route_method" placeholder="GET" required/>
            <input type="text" name="route_route" placeholder="/api/all/user" required/>
            <input type="text" name="route_query" placeholder="SELECT * FROM user" required/>
            <input type="submit" />
        </form>

    </div>
@endsection