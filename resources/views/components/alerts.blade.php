@if ($message = session()->get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button class="close" type="button" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="alert-heading">Success</h4>
        <p>{{ $message }}</p>
    </div>
@endif

@if ($message = session()->get('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button class="close" type="button" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="alert-heading">Error</h4>
        <p>{{ $message }}</p>
    </div>
@endif
@if ($message = session()->get('warning'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <button class="close" type="button" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="alert-heading">Warning</h4>
        <p>{{ $message }}</p>
    </div>
@endif
@if ($message = session()->get('info'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <button class="close" type="button" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="alert-heading">Info</h4>
        <p>{{ $message }}</p>
    </div>
@endif
