{!! Form::model($model, [
  'route' => $model->exists ? ['level.update', $model->id] : 'level.store',
  'method' => $model->exists ? 'PUT' : 'POST'
]) !!}

  <div class="form-group">
    <label>Nama level</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fas fa-clipboard-list"></i>
        </div>
      </div>
      <input type="text" class="form-control" placeholder="nama level" name="nama_level" id="nama_level" value="{{ old('nama_level') ?? $model->nama_level }}">
    </div>
  </div>

{!! Form::close() !!}
