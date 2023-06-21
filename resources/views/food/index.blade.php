@extends('layouts.app')

@section('template_title')
    Food
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Food') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('foods.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Food Name</th>
										<th>Food Recipes</th>
										<th>Relevant Info</th>
										<th>Section Comments</th>
										<th>Id Maps</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($food as $food)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $food->food_name }}</td>
											<td>{{ $food->food_recipes }}</td>
											<td>{{ $food->relevant_info }}</td>
											<td>{{ $food->section_comments }}</td>
											<td>{{ $food->id_maps }}</td>

                                            <td>
                                                <form action="{{ route('food.destroy',$food->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('food.show',$food->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('food.edit',$food->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $food->links() !!}
            </div>
        </div>
    </div>
@endsection
