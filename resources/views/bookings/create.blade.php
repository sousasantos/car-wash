@dump($errors)

<form method="post" action="{{ route('booking.store') }}" class="needs-validation">
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

    <div class="row mb-3">
        <label for="flexibility_id" class="col-sm-2 col-form-label">Flexibility</label>
        <div class="col-sm-4">
            <select class="form-select" name="flexibility_id">
                @foreach ($flexibilities as $flexibility)
                    <option value="{{  $flexibility->id }}">{{  $flexibility->description }}</option>
                @endforeach
            </select>
            @error('vehicle_size_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label for="vehicle_size_id" class="col-sm-2 col-form-label">Vehicle Size</label>
        <div class="col-sm-4">
            <select class="form-select" name="vehicle_size_id">
                @foreach ($vehicleSizes as $vehicleSize)
                    <option value="{{  $vehicleSize->id }}">{{  $vehicleSize->description }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>