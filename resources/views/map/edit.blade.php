@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Map
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Map</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('maps.update', $map->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('map.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
