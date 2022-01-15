{!! Form::model($model, [
  'route' => $model->exists ? ['menu.update', $model->id] : 'menu.store',
  'method' => $model->exists ? 'PUT' : 'POST'
]) !!}

  <div class="form-group">
    <label>nama menu</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fas fa-clipboard-list"></i>
        </div>
      </div>
      <input type="text" class="form-control" placeholder="nama menu" name="nama_menu" id="nama_menu" value="{{ old('nama_menu') ?? $model->nama_menu }}">
    </div>
  </div>
  <div class="form-group">
    <label>level menu</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fas fa-clipboard-list"></i>
        </div>
      </div>
      {{-- <input type="text" class="form-control" placeholder="" name="nama_jabatan" id="nama_jabatan" value="{{ old('nama_jabatan') ?? $model->nama_jabatan }}"> --}}
       <select class="form-control" id="exampleFormControlSelect1" name="level_menu">
        <option value="" selected>== Pilih level menu ==</option>
         <option value="main_menu">main menu</option>
         <option value="sub_menu">sub menu</option>
        </select>
    </div>
  </div>
  <div class="form-group">
      <label>Url</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fas fa-clipboard-list"></i>
          </div>
        </div>
        <input type="text" class="form-control" placeholder="masukan url apabila ada" name="url" id="url" value="{{ old('url') ?? $model->url }}">
      </div>
    </div>

{!! Form::close() !!}
