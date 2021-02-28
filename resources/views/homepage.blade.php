@extends('layout.base')

@section('content')
<section class="container py-5">
    <div class="col-8 offset-2">
        @include('bookings.create')
    </div>    
</section>

@endsection
