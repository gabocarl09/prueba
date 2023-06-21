@extends('layouts.app')

@section('template_title')
    {{ $suscription->name ?? "{{ __('Show') Suscription" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Suscription</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('suscriptions.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Type:</strong>
                            {{ $suscription->type }}
                        </div>
                        <div class="form-group">
                            <strong>Start Date:</strong>
                            {{ $suscription->start_date }}
                        </div>
                        <div class="form-group">
                            <strong>End Date:</strong>
                            {{ $suscription->end_date }}
                        </div>
                        <div class="form-group">
                            <strong>Payment Type:</strong>
                            {{ $suscription->payment_type }}
                        </div>
                        <div class="form-group">
                            <strong>Payment Ammount:</strong>
                            {{ $suscription->payment_ammount }}
                        </div>
                        <div class="form-group">
                            <strong>Id Foods:</strong>
                            {{ $suscription->id_foods }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
