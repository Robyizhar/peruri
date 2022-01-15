{!! Form::model($model, [
  'route' => $model->exists ? ['nilainki.update', $model->id] : 'nilainki.store',
  'method' => $model->exists ? 'PUT' : 'POST'
]) !!}

  <div class="form-group">
    <label>nama karyawan</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fas fa-clipboard-list"></i>
        </div>
      </div>
     <select class="form-control custom-select selectric @error('id_karyawan') is-invalid @enderror" name="id_karyawan" id="id_karyawan">
        @if ($model->exists)
        <option value="{{ $model->Karyawan ? $model->Karyawan->id  : 'null' }}" {{ $model->Karyawan ? 'disabled'  : '' }} selected> NP Karyawan: {{ $model->Karyawan ? $model->Karyawan->full_name  : 'NP Karyawan is Null'}}</option>
        @else
          <option value="" selected disabled>~ Choose NP Karyawan ~</option>
        @endif
        @foreach ($npKaryawan as $npKaryawan)
          <option value="{{ $npKaryawan->id }}">{{ $npKaryawan->full_name }}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="form-group">
    <label>Tahun</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fas fa-clipboard-list"></i>
        </div>
      </div>
      <input type="text" class="form-control" placeholder="Tahun" name="tahun" id="tahun" value="{{ old('tahun') ?? $model->tahun }}">
    </div>
  </div>
  <div class="form-group">
    <label>Nilai NKI</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fas fa-clipboard-list"></i>
        </div>
      </div>
      <input type="text" class="form-control" placeholder="Nilai NKI" name="nilai_nki" id="nilai_nki" value="{{ old('nilai_nki') ?? $model->nilai_nki }}">
    </div>
  </div>


{!! Form::close() !!}
