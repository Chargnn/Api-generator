@extends('layout.layout')

@section('title', 'Add route')

@section('content')
    <div id="content">
        <h2 class="style5">Api routes <a href="/routes/add/{{$api_id}}"><button>Add</button></a></h2>
        <table>
            <tr>
                <th>Method</th>
                <th>Route</th>
                <th>Active</th>
                <th>Action</th>
            </tr>
            <?php foreach($routes as $route): ?>
            <tr>
                <td>{{ $route->method }}</td>
                <td>{{ $route->route }}</td>
                <td>{{ $route->active }}</td>
                <td>
                    <a href="/routes/edit/{{ $route->id }}"><button>Edit</button></a>
                    <button onclick="deleteRoute({{ $route->id }}, '{{ csrf_token() }}')">Delete</button>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>

        {!! $routes->links() !!}
    </div>
@endsection