@extends('layouts.app')

@section('template_title')
    {{ $food->name ?? "{{ __('Show') Food" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Food</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('food.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Food Name:</strong>
                            {{ $food->food_name }}
                        </div>
                        <div class="form-group">
                            <strong>Food Recipes:</strong>
                            {{ $food->food_recipes }}
                        </div>
                        <div class="form-group">
                            <strong>Relevant Info:</strong>
                            {{ $food->relevant_info }}
                        </div>
                        <div class="form-group">
                            <strong>Section Comments:</strong>
                            {{ $food->section_comments }}
                        </div>
                        <div class="form-group">
                            <strong>Id Maps:</strong>
                            {{ $food->id_maps }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
