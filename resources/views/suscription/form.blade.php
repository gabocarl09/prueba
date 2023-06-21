<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('type') }}
            {{ Form::text('type', $suscription->type, ['class' => 'form-control' . ($errors->has('type') ? ' is-invalid' : ''), 'placeholder' => 'Type']) }}
            {!! $errors->first('type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('start_date') }}
            {{ Form::text('start_date', $suscription->start_date, ['class' => 'form-control' . ($errors->has('start_date') ? ' is-invalid' : ''), 'placeholder' => 'Start Date']) }}
            {!! $errors->first('start_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('end_date') }}
            {{ Form::text('end_date', $suscription->end_date, ['class' => 'form-control' . ($errors->has('end_date') ? ' is-invalid' : ''), 'placeholder' => 'End Date']) }}
            {!! $errors->first('end_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('payment_type') }}
            {{ Form::text('payment_type', $suscription->payment_type, ['class' => 'form-control' . ($errors->has('payment_type') ? ' is-invalid' : ''), 'placeholder' => 'Payment Type']) }}
            {!! $errors->first('payment_type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('payment_ammount') }}
            {{ Form::text('payment_ammount', $suscription->payment_ammount, ['class' => 'form-control' . ($errors->has('payment_ammount') ? ' is-invalid' : ''), 'placeholder' => 'Payment Ammount']) }}
            {!! $errors->first('payment_ammount', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_foods') }}
            {{ Form::text('id_foods', $suscription->id_foods, ['class' => 'form-control' . ($errors->has('id_foods') ? ' is-invalid' : ''), 'placeholder' => 'Id Foods']) }}
            {!! $errors->first('id_foods', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>