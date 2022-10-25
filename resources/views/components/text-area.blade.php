
<div class="mb-3">
    <label for="input{{$name}}" class="form-label">{{ $title }}</label>
    <textarea type="{{$type}}"
           class="form-control @error("yourName") is-invalid @enderror"
           name="{{$name}}"
              id="input{{$name}}" rows="{{$rows}}">
        {{ old($name,$value ? $value : null) }}
    </textarea>
    @error($name)
    <p class="invalid-feedback">{{$messge}}</p>
    @enderror
</div>

