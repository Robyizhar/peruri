{!! Form::model($model, [
  'route' => $model->exists ? ['jabatan.update', $model->id] : 'jabatan.store',
  'method' => $model->exists ? 'PUT' : 'POST'
]) !!}

  <div class="form-group">
    <label>kode jabatan</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fas fa-clipboard-list"></i>
        </div>
      </div>
      <input type="text" class="form-control" placeholder="kode jabatan" name="kode_jabatan" id="kode_jabatan" value="{{ old('kode_jabatan') ?? $model->kode_jabatan }}">
    </div>
  </div>
  <div class="form-group">
    <label>nama jabatan</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fas fa-clipboard-list"></i>
        </div>
      </div>
      <input type="text" class="form-control" placeholder="nama jabatan" name="nama_jabatan" id="nama_jabatan" value="{{ old('nama_jabatan') ?? $model->nama_jabatan }}">
    </div>
  </div>


{!! Form::close() !!}
