{!! Form::model($model, [
  'route' => $model->exists ? ['levelUser.update', $model->id] : 'levelUser.store',
  'method' => $model->exists ? 'PUT' : 'POST'
]) !!}

  <div class="form-group">
    <label>Nama Level</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fas fa-clipboard-list"></i>
        </div>
      </div>
      <input type="text" class="form-control" placeholder="input level" name="nama_level_user" id="nama_level_user" value="{{ old('nama_level_user') ?? $model->nama_level_user }}">
       
    </div>
  </div>

{!! Form::close() !!}
