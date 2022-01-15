{!! Form::model($model, [
  'route' => $model->exists ? ['karyawanPkwt.update', $model->id] : 'karyawanPkwt.store',
  'method' => $model->exists ? 'PUT' : 'POST'
]) !!}

  <div class="form-group">
    <label>NP</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fas fa-clipboard-list"></i>
        </div>
      </div>
      <input type="text" class="form-control" placeholder="input NP karyawan" name="np" id="np" value="{{ old('np') ?? $model->np }}">
    </div>
  </div>
  <div class="form-group">
    <label>nama karyawan</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fas fa-clipboard-list"></i>
        </div>
      </div>
      <input type="text" class="form-control" placeholder="nama karyawan" name="nama" id="nama" value="{{ old('nama') ?? $model->nama }}">
    </div>
  </div>

   <div class="form-group">
    <label>unit kerja</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fas fa-clipboard-list"></i>
        </div>
      </div>
      {{-- <input type="text" class="form-control" placeholder="nama karyawan" name="nama" id="nama" value="{{ old('nama') ?? $model->nama }}"> --}}
       {{-- <label for="exampleFormControlSelect1">Unit Kerja</label> --}}
        <select class="form-control" id="exampleFormControlSelect1" name="id_unit">
        <option value="" selected>== Pilih Unit kerja ==</option>
          @foreach ($units as $unit)
            <option value="{{$unit->id }}"
                    >{{$unit->unit_kerja}}</option>
          @endforeach  
        </select>
    </div>
  </div>

  <div class="form-group">
    <label>status Karyawan</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fas fa-clipboard-list"></i>
        </div>
      </div>
      <input type="text" class="form-control" placeholder="status karyawan" name="status" id="status" value="{{ old('status') ?? $model->status }}">
    </div>
  </div>

  <div class="form-group">
    <label>kontrak ke</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fas fa-clipboard-list"></i>
        </div>
      </div>
      {{-- <input type="text" class="form-control" placeholder="status karyawan" name="status" id="status" value="{{ old('status') ?? $model->status }}"> --}}
        <select class="form-control" id="exampleFormControlSelect1" name="kontrak_ke">
        <option value="" selected>== Pilih Unit kerja ==</option>
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
        </select>
    </div>
  </div>

{!! Form::close() !!}
