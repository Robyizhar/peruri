@extends('layouts.app')

@section('title')
    Course || Category
@endsection

@section('content')
    <!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      
    </div>

    <div class="section-body">

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header d-flex justify-content-between">
              <h4>Cuti Karyawan List</h4>
              
              <div>
                <a href="{{ route('cuti.create') }}" class="btn btn-primary">Add Cuti</a>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="datatable">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>nama karyawan</th> 
                      <th>jenis cuti</th>
                      <th>jumlah cuti</th>  
                      <td>action</td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=1;?>
                    @foreach ($data as $item)
                        <tr>
                          <td>{{$i}}</td>
                          <td>{{$item->karyawan->full_name}}</td>
                          <td>{{$item->jenis_cuti}}</td>
                          <td>{{$item->jumlah_cuti}}</td>
                          <td>
                              <a href="{{url('karyawan/edit/'.$item->id)}}" data-toggle="tooltip" class="btn btn-info btn-sm"><i class="ti-pencil-alt"></i></a>
                              <form action="{{url('/karyawan/delete/'.$item->id)}}" method="post" class="d-inline">
                                  @method('delete')
                                  @csrf
                                  <button type="submit" onclick="return confirm('apakah anda ingin menghapus data ini ? ')"class="delete btn btn-danger btn-sm"><i class="ti-trash"></i></button>
                              </form>
                          </td>
                        </tr>
                        <?php $i++;?>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection

@push('sweetalert-script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10" ></script> 
@endpush