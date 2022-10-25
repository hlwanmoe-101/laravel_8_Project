
    <div class="mb-3">
        <label for="input{{$name}}" class="form-label">{{ $title }}</label>
        <input type="{{$type}}"
               class="form-control @error("yourName") is-invalid @enderror"
               value="{{ old($name,$value ? $value : null) }}"
               name="{{$name}}"
               id="input{{$name}}">
        @error($name)
        <p class="invalid-feedback">{{$messge}}</p>
        @enderror
    </div>

