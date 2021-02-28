<div>
    <div class="row mb-3">
        <label
            for="{{ $name}}"
            class="col-sm-2 col-form-label">{{ $label}}
        </label>
        <div class="{{ $inputSize}}">
            <input
                type="{{ $type }}"
                class="form-control @error($name) is-invalid @enderror"
                name="{{ $name}}"
                id="{{ $name}}"
                value="{{ old($name) }}" 
            />
            @error($name)
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>        
    </div>
</div>