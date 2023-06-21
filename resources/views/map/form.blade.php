<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('departments_name') }}
            {{ Form::text('departments_name', $map->departments_name, ['class' => 'form-control' . ($errors->has('departments_name') ? ' is-invalid' : ''), 'placeholder' => 'Departments Name']) }}
            {!! $errors->first('departments_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('departments_info') }}
            {{ Form::text('departments_info', $map->departments_info, ['class' => 'form-control' . ($errors->has('departments_info') ? ' is-invalid' : ''), 'placeholder' => 'Departments Info']) }}
            {!! $errors->first('departments_info', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('departments_image') }}
            {{ Form::text('departments_image', $map->departments_image, ['class' => 'form-control' . ($errors->has('departments_image') ? ' is-invalid' : ''), 'placeholder' => 'Departments Image']) }}
            {!! $errors->first('departments_image', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>