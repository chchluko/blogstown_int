@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Notas</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Bordered Table</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
                <th>ID</th>
                <th>Título</th>
                <th>Acción</th>
            </thead>
            <tbody>
                @foreach ($notes as $note)
                <tr>
                    <td>{{ $note->id }}</td>
                    <td>{{ $note->title }}</td>
                    <td>
                        @can('destroy_notes')
                            <a href="{{ route('notes.destroy', $note->id) }}">Eliminar nota</a>
                        @else
                            Usted no puede eliminar esta nota
                        @endcan
                    </td>
                </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">

        </div>
      </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop



