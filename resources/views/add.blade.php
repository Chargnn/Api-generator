@extends('layout.layout')
@extends('partials.header')

@section('title', 'Add route')

@section('content')
    <div id="content">
        <h2 class="style5">Add api!</h2>

        <form action="/api/add" method="POST">
            @csrf
            <input name="api_name" placeholder="Name" required/>
            <input type="submit" />
        </form>

    </div>
@endsection