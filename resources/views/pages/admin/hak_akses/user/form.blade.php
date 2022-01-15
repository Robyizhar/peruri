{!! Form::model($model, [
  'route' => $model->exists ? ['user.update', $model->id] : 'user.store',
  'method' => $model->exists ? 'PUT' : 'POST'
]) !!}

  <div class="form-group">
    <label>Np</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fas fa-clipboard-list"></i>
        </div>
      </div>
      <input type="text" class="form-control" placeholder="masukan np " name="np" id="np" value="{{ old('np') ?? $model->np }}">
    </div>
  </div>
  <div class="form-group">
    <label>name karyawan</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fas fa-clipboard-list"></i>
        </div>
      </div>
      <input type="text" class="form-control" placeholder="nama karyawan" name="name" id="name" value="{{ old('name') ?? $model->name }}">
    </div>
  </div>
  <div class="form-group">
    <label>level admin</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fas fa-clipboard-list"></i>
        </div>
      </div>
        <select class="form-control custom-select selectric @error('level_user_id') is-invalid @enderror" name="level_user_id" id="level_user_id">
          @if ($model->exists)
              <option value="{{$model->leveluser ? $model->leveluser->id : 'null'}}" {{$model->leveluser ? 'disabled' : ''}} selected> level :  {{$model->leveluser ? $model->leveluser->nama_level_user : 'name menu Null'}}</option>
            @else 
            <option value="" selected disabled>~ Choose Menu ~</option>
          @endif
          @foreach ($data_admin as $admin)
              <option value="{{$admin->id}}">{{$admin->nama_level_user}}</option>
          @endforeach
        </select>
    </div>
  </div>
  <div class="form-group">
    <label>Email</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fas fa-clipboard-list"></i>
        </div>
      </div>
      <input type="text" class="form-control" placeholder="masukan email karyawan" name="email" id="email" value="{{ old('email') ?? $model->email }}">
    </div>
  </div>
  <div class="form-group">
    <label>Paasword</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fas fa-clipboard-list"></i>
        </div>
      </div>
      <input type="password" class="form-control" placeholder="password" name="password" id="password" value="{{ old('password') ?? $model->password }}">
    </div>
  </div>

{!! Form::close() !!}
