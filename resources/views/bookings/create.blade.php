<form method="post" action="{{ $route }}" class="needs-validation">
    @csrf
    <x-forms.input 
        type=text 
        name=name 
        label=Name 
        inputSize=col-sm-8>
    </x-forms.input>

    <x-forms.input 
        type=email 
        name=email 
        label=Email 
        inputSize=col-sm-8>
    </x-forms.input>

    <x-forms.input
        type=text
        name=contact_number
        label="Contact Number"
        inputSize=col-sm-4>
    </x-forms.input>

    <x-forms.input
        type=date
        name=booking_date
        label="Booking Date"
        inputSize=col-sm-4>
    </x-forms.input>

    <x-forms.select
        label="Flexibility"
        name=flexibility_id        
        :values=$flexibilities>
    </x-forms.select>

    <x-forms.select
        label="Vehicle Size"
        name=vehicle_size_id        
        :values=$vehicleSizes>
    </x-forms.select>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>