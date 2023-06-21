<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('food_name') }}
            {{ Form::text('food_name', $food->food_name, ['class' => 'form-control' . ($errors->has('food_name') ? ' is-invalid' : ''), 'placeholder' => 'Food Name']) }}
            {!! $errors->first('food_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('food_recipes') }}
            {{ Form::text('food_recipes', $food->food_recipes, ['class' => 'form-control' . ($errors->has('food_recipes') ? ' is-invalid' : ''), 'placeholder' => 'Food Recipes']) }}
            {!! $errors->first('food_recipes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('relevant_info') }}
            {{ Form::text('relevant_info', $food->relevant_info, ['class' => 'form-control' . ($errors->has('relevant_info') ? ' is-invalid' : ''), 'placeholder' => 'Relevant Info']) }}
            {!! $errors->first('relevant_info', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('section_comments') }}
            {{ Form::text('section_comments', $food->section_comments, ['class' => 'form-control' . ($errors->has('section_comments') ? ' is-invalid' : ''), 'placeholder' => 'Section Comments']) }}
            {!! $errors->first('section_comments', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_maps') }}
            {{ Form::text('id_maps', $food->id_maps, ['class' => 'form-control' . ($errors->has('id_maps') ? ' is-invalid' : ''), 'placeholder' => 'Id Maps']) }}
            {!! $errors->first('id_maps', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>