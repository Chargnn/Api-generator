@if($errors->any())
<div class="error">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if(session()->has('success'))
    <div class="success">
        <ul>
            @foreach (session()->get('success') as $success)
                <li>{{ $success }}</li>
            @endforeach
        </ul>
    </div>
@endif