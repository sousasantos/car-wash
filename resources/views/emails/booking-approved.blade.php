@component('mail::message')
# Booking Approved

Your booking has been approved!

data: {{ $booking->booking_date }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent