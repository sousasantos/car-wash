@extends('layout.base')

@section('content')
<section class="container my-5 p-5 bg-white shadow-sm">
    <div class="col-8 offset-2">
        <h3 class="fw-bold py-4">Create booking</h3>
        <form method="post" action="{{ route('admin.bookings.store') }}" class="needs-validation">
            @include('bookings.form-fields')
        </form>
    </div>    
</section>
@endsection