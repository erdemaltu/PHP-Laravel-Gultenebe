@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <i class="mdi mdi-check-all me-2"></i>
    {{ $message }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div><br>
@endif
@if ($message = Session::get('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <i class="mdi mdi-block-helper me-2"></i>
    {{ $message }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div><br>
@endif
@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <i class="mdi mdi-alert-outline me-2"></i>
    {{ $message }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div><br>
@endif
@if ($message = Session::get('info'))
<div class="alert alert-info alert-dismissible fade show mb-0" role="alert">
    <i class="mdi mdi-alert-circle-outline me-2"></i>
    {{ $message }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div><br>
@endif
@if ($message = Session::get('primary'))
<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <i class="mdi mdi-bullseye-arrow me-2"></i>
    {{ $message }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div><br>
@endif
@if ($message = Session::get('secondary'))
<div class="alert alert-secondary alert-dismissible fade show" role="alert">
    <i class="mdi mdi-grease-pencil me-2"></i>
    {{ $message }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div><br>
@endif
@if ($errors->any())
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    @foreach($errors->all() as $error)
    <dt><i class="mdi mdi-block-helper me-2"></i>{{$error}}</dt>
    @endforeach
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div><br>
@endif