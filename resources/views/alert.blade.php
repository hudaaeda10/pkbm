@if(session()->has('success'))
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        </div>
    </div>
</div>
@endif

@if(session()->has('delete'))
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="alert alert-danger">
                {{ session()->get('delete') }}
            </div>
        </div>
    </div>
</div>
@endif