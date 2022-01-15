@extends('layouts.app')

@section('title')
    Course || Category
@endsection

@section('content')
    <!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
     <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>
    </div>

    <div class="section-body">

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header d-flex justify-content-between">
              <h4>Karyawan PKWT List</h4>
              <div>
                <a href="{{ route('karyawanPkwt.create') }}" class="modal-show btn btn-primary">Add Karyawan Pkwt</a>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="datatable">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>NP</th>
                      <th>Full Name</th>
                      <th>Unit Kerja</th>
                      {{-- <th>Kode Unit</th> --}}
                      <th>Setatus</th>
                      <th>kontrak ke</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  <tbody>

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
{{-- <script src="{{ url('backend') }}/node_modules/sweetalert/dist/sweetalert.min.js"></script> --}}
@endpush
@push('addon-script')
     <script>
        $('#datatable').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: "{{ route('table.karyawanpkwt') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'id'},
                {data: 'np', name: 'np'}, 
                {data: 'nama', name: 'nama'}, 
                {data: 'id_unit', name: 'id_unit'}, 
                {data: 'status', name: 'status'}, 
                {data: 'kontrak_ke', name: 'kontrak_ke'}, 
                {data: 'Action', name: 'Action'}
            ]
        });
    </script>
    {{-- To handle event on b --}}
    <script src="{{ url('js/app.js') }}"></script>
@endpush