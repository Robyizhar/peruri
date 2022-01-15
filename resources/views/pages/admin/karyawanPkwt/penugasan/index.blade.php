@extends('layouts.app')

@section('title')
    Course || Category
@endsection

@section('content')
    <!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Penugasan</a></div>
        <div class="breadcrumb-item"><a href="#">penugasan</a></div>
        <div class="breadcrumb-item">List</div>
      </div>
    </div>

    <div class="section-body">

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header d-flex justify-content-between">
              <h4>penugasan List</h4>
              <div>
                <a href="{{ route('PenugasanPkwt.create') }}" class="modal-show btn btn-primary">Add Penugasan</a>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="datatable">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>kontrak_ke</th> 
                      <th>id_nomorSp</th> 
                      <th>tanggalSp</th> 
                      <th>tanggal_mulai</th> 
                      <th>tanggal_berakhir</th> 
                      <th>sebelum_adendum</th> 
                      <th>masa_jeda</th> 
                      <th>Action</th> 
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
  <script src="{{ url('backend') }}/node_modules/sweetalert/dist/sweetalert.min.js"></script>
@endpush
@push('addon-script')
    <script>
        $('#datatable').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: "{{ route('table.PenugasanPkwt') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'id'},
                {data: 'kontrak_ke', name: 'kontrak_ke'}, 
                {data: 'id_nomorSp', name: 'id_nomorSp'}, 
                {data: 'tanggalSp', name: 'tanggalSp'}, 
                {data: 'tanggal_mulai', name: 'tanggal_mulai'}, 
                {data: 'tanggal_berakhir', name: 'tanggal_berakhir'}, 
                {data: 'sebelum_adendum', name: 'sebelum_adendum'}, 
                {data: 'masa_jeda', name: 'masa_jeda'}, 
                {data: 'Action', name: 'Action'}
            ]
        });
    </script>
    {{-- To handle event on b --}}
    <script src="{{ url('js/app.js') }}"></script>
@endpush