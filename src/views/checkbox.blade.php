<div class="{{$config['divClass']}} {{$wrapperClass}} @if($errors)f-error @endif">
    <label for="{{$name}}">
        <input
        type="{{$type}}"
        id="{{$name}}"
        name="{{$name}}"
        @if($value)value="{{$value}}" @endif
        @if($required)required @endif
        @if($placeholder)placeholder="{{$placeholder}}"@endif
        @foreach($attr as $key => $value)
        @if(is_int($key)){{$val}}@else{{$key}}="{{$val}}"@endif
        @endforeach
        >
        {!! $label !!} @if($required)<i class="f-required">*</i>@endif
    </label>
    @if($errors)
    <ul class="{{$config['errorMessageClass']}}">
        @foreach ($errors as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
</div>
