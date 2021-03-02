<div>
    <div class="row mb-3">
        <label 
            for="{{ $name}}" 
            class="col-sm-2 col-form-label">{{ $label }}</label>
        <div class="col-sm-4">
            <select
                name="{{ $name}}"
                class="form-select @error($name) is-invalid @enderror">
                @foreach ($values as $value)
                    <option
                        value="{{ $value->id }}"                        
                        @if(old($name) === $value->id || $selected === $value->id) selected @endif>
                        {{  $value->description }}
                    </option>
                @endforeach
            </select>
            @error($name)
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
</div>