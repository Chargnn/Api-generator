@extends('layout.layout')

@section('title', 'Add route')

@section('content')
    <div id="content">
        <h2 class="style5">Edit api!</h2>

        <form action="/api/update" method="POST">
            @csrf
            <input type="text" name="api_id" value="{{ $api->id }}" readonly="readonly" />
            <input type="text" name="api_name" value="{{ $api->name }}" required/>
            <input type="submit" />
        </form>
    </div>
@endsection