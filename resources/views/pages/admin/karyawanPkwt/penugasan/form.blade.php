{!! Form::model($model, [
  'route' => $model->exists ? ['PenugasanPkwt.update', $model->id] : 'PenugasanPkwt.store',
  'method' => $model->exists ? 'PUT' : 'POST'
]) !!}

  <div class="form-group">
    <label>Kontrak ke</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fas fa-clipboard-list"></i>
        </div>
      </div>
      <input type="text" class="form-control" placeholder="Kontrak ke" name="kontrak_ke" id="kontrak_ke" value="{{ old('kontrak_ke') ?? $model->kontrak_ke }}">
    </div>
  </div>

  <div class="form-group">
    <label>Nomor Sp</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fas fa-clipboard-list"></i>
        </div>
      </div>
      <input type="text" class="form-control" placeholder="Kontrak ke" name="id_nomorSp" id="id_nomorSp" value="{{ old('id_nomorSp') ?? $model->id_nomorSp }}">
    </div>
  </div>
  <div class="form-group">
    <label>tanggalSp</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fas fa-clipboard-list"></i>
        </div>
      </div>
      <input type="text" class="form-control" placeholder="tanggalSp" name="tanggalSp" id="tanggalSp" value="{{ old('tanggalSp') ?? $model->tanggalSp }}">
    </div>
  </div>
  <div class="form-group">
    <label>tanggal_mulai</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fas fa-clipboard-list"></i>
        </div>
      </div>
      <input type="text" class="form-control" placeholder="tanggal_mulai" name="tanggal_mulai" id="tanggal_mulai" value="{{ old('tanggal_mulai') ?? $model->tanggal_mulai }}">
    </div>
  </div>
  <div class="form-group">
    <label>tanggal_berakhir</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fas fa-clipboard-list"></i>
        </div>
      </div>
      <input type="text" class="form-control" placeholder="tanggal_berakhir" name="tanggal_berakhir" id="tanggal_berakhir" value="{{ old('tanggal_berakhir') ?? $model->tanggal_berakhir }}">
    </div>
  </div>
  <div class="form-group">
    <label>sebelum_adendum</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fas fa-clipboard-list"></i>
        </div>
      </div>
      <input type="text" class="form-control" placeholder="sebelum_adendum" name="sebelum_adendum" id="sebelum_adendum" value="{{ old('sebelum_adendum') ?? $model->sebelum_adendum }}">
    </div>
  </div>
  <div class="form-group">
    <label>masa_jeda</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fas fa-clipboard-list"></i>
        </div>
      </div>
      <input type="text" class="form-control" placeholder="masa_jeda" name="masa_jeda" id="masa_jeda" value="{{ old('masa_jeda') ?? $model->masa_jeda  }}">
    </div>
  </div>

{!! Form::close() !!}
