@extends('layout.layout')

@section('title', 'Home')

@section('content')
    <div id="content">
        <?php if($api_list && count($api_list) > 0): ?>
        <h2 class="style5">API list <a href="/api/add">
                <button>Add</button>
            </a>
            <a href="/export">
            <button>Export all</button>
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
                <td>todo</td>
                <td>
                    <a href="/routes/{{ $api->id }}">
                        <button>See routes</button>
                    </a>
                    <a href="/api/edit/{{ $api->id }}">
                        <button>Edit</button>
                    </a>
                    <button onclick="deleteApi({{ $api->id }}, '{{ csrf_token() }}')">Delete</button>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php else: ?>
        <h2 class="style5">No api ! <a href="/add">
                <button>Add</button>
            </a></h2>
        <?php endif; ?>
        {!! $api_list->links() !!}
    </div>
@endsection