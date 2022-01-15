{!! Form::model($model, [
  'route' => $model->exists ? ['akses.update', $model->id] : 'akses.store',
  'method' => $model->exists ? 'PUT' : 'POST'
]) !!}

  <div class="form-group">
    <label>Admin</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fas fa-clipboard-list"></i>
        </div>
      </div>
      {{-- <input type="text" class="form-control" placeholder="kode jabatan" name="level_user_id" id="level_user" value="{{ old('kode_jabatan') ?? $model->kode_jabatan }}"> --}}
       <select class="form-control custom-select selectric @error('level_user_id') is-invalid @enderror" name="level_user_id" id="level_user_id">
        @if ($model->exists)
        <option value="{{ $model->leveluser ? $model->leveluser->id  : 'null' }}" {{ $model->leveluser ? 'disabled'  : '' }} selected>Prev. Name: {{ $model->leveluser ? $model->leveluser->nama_level_user  : 'name admin is Null'}}</option>
        @else
          <option value="" selected disabled>~ Choose Admin ~</option>
        @endif
        @foreach ($data_leveluser as $leveluser)
          <option value="{{ $leveluser->id }}">{{ $leveluser->nama_level_user }}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="form-group">
    <label>Akses Menu</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fas fa-clipboard-list"></i>
        </div>
      </div>
        <select class="form-control custom-select selectric @error('menu_id') is-invalid @enderror" name="menu_id" id="menu_id">
          @if ($model->exists)
              <option value="{{$model->menu ? $model->menu->id : 'null'}}" {{$model->menu ? 'disabled' : ''}} selected> Daf.Menu {{$model->menu ? $model->menu->nama_menu : 'name menu Null'}}</option>
            @else 
            <option value="" selected disabled>~ Choose Menu ~</option>
          @endif
          @foreach ($data_menu as $menu)
              <option value="{{$menu->id}}">{{$menu->nama_menu}}</option>
          @endforeach
        </select>
    </div>
  </div>
 


{!! Form::close() !!}
