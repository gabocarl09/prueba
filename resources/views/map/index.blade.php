@extends('layouts.app')

@section('template_title')
    Map
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Map') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('maps.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Departments Name</th>
										<th>Departments Info</th>
										<th>Departments Image</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($maps as $map)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $map->departments_name }}</td>
											<td>{{ $map->departments_info }}</td>
											<td>{{ $map->departments_image }}</td>

                                            <td>
                                                <form action="{{ route('maps.destroy',$map->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('maps.show',$map->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('maps.edit',$map->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $maps->links() !!}
            </div>
        </div>
    </div>
@endsection
