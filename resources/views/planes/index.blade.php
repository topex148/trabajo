@extends('layouts.menuInicio')

@section('content')
<div class="container">
  <header class="text-center mb-60">
    <h2>Lista de Planes</h2>
    <p class="lead font-lato">Esta es la lista de los Planes registrados en el sistema.</p>
  </header>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">

                  <tr width="10px">
                    <td><strong>  Planes </strong></td>
                  </th>

                  @can('planes.create')
                      <a href="{{route('planes.create')}}" class="pull-right btn btn-primary btn-sm"><i class="fa fa-check"></i> Crear </a>
                  @endcan

                </div>

                <div class="panel-body">
                        <table class="table table-striped table-hover">
                          <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Fecha Inicio</th>
                                <th>Fecha Final</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach($planes as $plane)
                              <tr>
                                <td>{{$plane->id}}</td>
                                <td>{{$plane->Fecha_Inicio}}</td>
                                <td>{{$plane->Fecha_Final}}</td>
                                <td width="10px">
                                    @can('planes.show')
                                    <a href="{{route('planes.show', $plane->id)}}"
                                      class="btn btn-primary btn-sm"><i class="fa fa-check"></i>
                                        Ver
                                    </a>
                                    @endcan
                                </td>
                                <td width="10px">
                                    @can('planes.edit')
                                    <a href="{{route('planes.edit', $plane->id)}}"
                                      class="btn btn-primary btn-sm"><i class="fa fa-check"></i>
                                        Editar
                                    </a>
                                    @endcan
                                </td>
                                <td width="10px">
                                    @can('planes.destroy')
                                    {!! Form::open(['route' => ['planes.destroy', $plane->id],
                                    'method' => 'DELETE'])!!}
                                        <button class="btn btn-danger btn-sm"><i class="fa fa-check"></i>
                                          Eliminar
                                        </button>
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                              </tr>
                              @endforeach
                          </tbody>
                        </table>
                        {{ $planes->render()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
