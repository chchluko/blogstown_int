<div class="card">
    @if($updateMode)
        @include('livewire.update')
    @else
        @include('livewire.create')
    @endif
    <div class="card-header">
      <h3 class="card-title">Contactos</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">#</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($data as $item)
            <tr class="text-center">
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>
                    <button wire:click="edit({{ $item->id }})" class="btn btn-primary">Editar</button>
                    <button wire:click="destroy({{ $item->id }})" class="btn btn-danger">Borrar</button>
                </td>
            </tr>
        @empty
        <tr class="text-center">
            <td colspan="4" class="py-3 italic">No hay información</td>
        </tr>
        @endforelse
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
    </div>
  </div>
