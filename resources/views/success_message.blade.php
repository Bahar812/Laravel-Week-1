@extends("template.main")
@section('title', 'Message')
@section('body')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="alert alert-success" role="alert">
                <p class="text-center">{{ $message }}</p>
                <div class="text-center">
                    <a href="{{ $contactListRoute }}" class="btn btn-success mr-2">See Contact List</a>
                    <a href="{{ $formRoute }}" class="btn btn-primary">Go Back to Form</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
