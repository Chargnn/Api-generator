@extends('layout.layout')

@section('title', 'Home')

@section('content')
    <div id="content">
        <?php if($api_list && count($api_list) > 0): ?>
        <h2 class="style5">API list <a href="/add">
                <button>Add</button>
            </a></h2>
        <table>
            <tr>
                <th>API name</th>
                <th>Routes count</th>
                <th>Actions</th>
            </tr>
            <?php foreach($api_list as $api): ?>
            <tr>
                <td>{{ $api->name }}</td>
                <td>15</td>
                <td>
                    <a href="/routes/{{ $api->id }}">
                        <button>See routes</button>
                    </a>
                    <a href="/edit/{{ $api->id }}">
                        <button>Edit</button>
                    </a>
                    <!-- TODO: ajax call to delete without href -->
                    <a href="/api/delete/{{ $api->id }}" onclick="return confirm('Are you sure to delete this api?');">
                        <button>Delete</button>
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php else: ?>
        <h2 class="style5">No api ! <a href="/add">
                <button>Add</button>
            </a></h2>
        <?php endif; ?>
        {{ $api_list->links() }}
    </div>
@endsection