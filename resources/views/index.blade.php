@extends('layout.layout')

@section('title', 'Home')

@section('content')
    <div id="content">
        <?php if($api_list && count($api_list) > 0): ?>
        <h2 class="style5">API list <a href="/add"><button>Add</button></a></h2>
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
                    <a href="/edit/{{ $api->id }}"></a><button>Edit</button>
                    <a href="/api/delete/{{ $api->id }}" onclick="return confirm('Are you sure to delete this api?');"><button>Delete</button>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php else: ?>
        <h2 class="style5">No api ! <button>Add</button></h2>
        <?php endif; ?>
    </div>
@endsection