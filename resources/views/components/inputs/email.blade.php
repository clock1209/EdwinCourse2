<div class="form-group row {{ $errors->has($name) ? 'has-error' : '' }}">
    <label class="control-label col-sm-3">
        @if (in_array('required', $attributes))
            <i class="fa fa-xs fa-asterisk asterisk"></i>
        @endif
        {{ $label }}:
    </label>
    <div class="col-sm-8">
        {!! Form::email($name, $object ? $object->$name : null, array_merge(['class' => 'form-control'], $attributes)) !!}
    </div>
    <span class="help-block">{{ $errors->first($name) }}</span>
</div>