<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Agregar contacto</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
      <div class="card-body">
        <div class="form-group">
          <label for="name">Nombre</label>
          <input class="form-control {{ $errors->has('name') ? ' border-red-500' : 'border-gray-200' }}" id="name" wire:model="name" type="text" placeholder="Nombre completo...">
          @error('name')
          <span class="help-block">{{ $message }}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input class="form-control {{ $errors->has('email') ? ' border-red-500' : 'border-gray-200' }}" id="email" wire:model="email" type="text" placeholder="Correo electrónico...">
          @error('email')
          <span class="help-block">{{ $message }}</span>
          @enderror
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button wire:click="store()" class="btn btn-primary">Agregar contacto</button>
      </div>
  </div>
