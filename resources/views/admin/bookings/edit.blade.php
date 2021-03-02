@extends('layout.base')

@section('content')
<section class="container my-5 p-5 bg-white shadow-sm">
    <div class="col-8 offset-2">
        <h3 class="fw-bold py-4">Edit booking</h3>
        <form method="post" action="{{ route('admin.bookings.update', $booking) }}" class="needs-validation">
            @method('put')
            @include('bookings.form-fields', [
                'booking' => $booking
            ])
        </form>
    </div>    
</section>
@endsection