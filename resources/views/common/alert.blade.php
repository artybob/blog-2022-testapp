@if (request()->session()->has('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <strong>Success !</strong> {{ session('success') }}
    </div>
@endif

@if (request()->session()->has('error'))
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <strong>Error !</strong> {{ session('error') }}
    </div>
@endif
