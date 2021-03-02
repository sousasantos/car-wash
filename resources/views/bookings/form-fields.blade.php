@csrf

<x-forms.input 
    type="text"
    name="name" 
    label="Name" 
    inputSize="col-sm-8"
    :value="$booking->name ?? ''">
</x-forms.input>

<x-forms.input 
    type="email" 
    name="email" 
    label="Email" 
    inputSize="col-sm-8"
    :value="$booking->email ?? ''">
</x-forms.input>

<x-forms.input
    type="text"
    name="contact_number"
    label="Contact Number"
    inputSize="col-sm-4"
    :value="$booking->contact_number ?? ''">
</x-forms.input>

<x-forms.input
    type="date"
    name="booking_date"
    label="Booking Date"
    inputSize="col-sm-4"
    :value="$booking->booking_date ?? ''">
</x-forms.input>

<x-forms.select
    label="Flexibility"
    name="flexibility_id"        
    :values="$flexibilities"
    :selected="$booking->flexibility->id ?? ''">
</x-forms.select>

<x-forms.select
    label="Vehicle Size"
    name="vehicle_size_id"        
    :values="$vehicleSizes"
    :selected="$booking->vehicleSize->id ?? ''">
</x-forms.select>
<div class="d-flex p-4">
    <button type="submit" class="btn btn-success mx-auto">Submit</button>
</div>