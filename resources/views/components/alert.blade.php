@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p class="m-0">{{ $message }}</p>
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    <h4>Error</h4>
    <ul class="mb-0">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
