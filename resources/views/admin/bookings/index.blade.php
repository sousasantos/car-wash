@extends('layout.base')

@section('content')
<section class="container my-5 p-5 bg-white shadow-sm">
    <div class="col-12 col-md-10 offset-md-1">
    <div class="d-flex">
        <h3 class="fw-bold py-4">Bookings</h3>
        <a
            href="{{ route('admin.bookings.create') }}"
            class="btn btn-outline-success ms-auto my-auto h-100">Create</a>
    </div>
    
        <table class="table table-hover">
            <thead class="table-light">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">Booking Date</th>
                    <th scope="col">Flexibility</th>
                    <th scope="col">Vehicle Size</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                    <tr @if($booking->approved) class="table-success" @endif>
                        <td>{{ $booking->name }}</td>
                        <td>{{ $booking->email }}</td>
                        <td>{{ $booking->contact_number }}</td>
                        <td>{{ $booking->booking_date }}</td>
                        <td>+/- {{ $booking->flexibility->description }}</td>
                        <td>{{ $booking->vehicleSize->description }}</td>
                        <td class="d-flex">
                            <form action="{{ route('admin.bookings.approve', $booking) }}" method="post">
                                @csrf
                                @method('patch')
                                <button
                                    type="submit"
                                    title="Accept Booking"
                                    class="btn btn-link btn shadow-none " >
                                    <i class="bi-check2-circle text-success"></i>
                                </button>
                            </form>
                            <a
                                title="Edit Booking"
                                href="{{ route('admin.bookings.edit', $booking->id) }}"
                                class="btn shadow-none">
                                <i class="bi bi-pencil text-primary"></i>
                            </a>
                            <form action="{{ route('admin.bookings.destroy', $booking) }}" method="post">
                                @csrf
                                @method('delete')
                                <button
                                    type="submit"
                                    title="Delete Booking"
                                    class="btn btn-link btn shadow-none">
                                    <i class="bi-trash text-danger"></i>
                                </button>
                            </form>                            
                        </td>
                    </tr>
                @endforeach
        </table>
        <div class="d-flex justify-content-center pt-5">
            {{ $bookings->links() }}
        </div>
        
    </div>    
</section>
@endsection