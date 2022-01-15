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
        <div class="breadcrumb-item active"><a href="#">Jabatan</a></div>
        <div class="breadcrumb-item"><a href="#">Jabaatan</a></div>
        <div class="breadcrumb-item">List</div>
      </div>
    </div>

    <div class="section-body">

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header d-flex justify-content-between">
              <h4>Jabatan List</h4>
               {{SiteHelpers::cek_akses()}}
              <div>
                <a href="{{ route('jabatan.create') }}" class="modal-show btn btn-primary">Add Penugasan</a>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="datatable">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>kode Jabatan</th> 
                      <th>nama jabatan</th>  
                      <td>action</td>
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
            ajax: "{{ route('table.jabatan') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'id'},
                {data: 'kode_jabatan', name: 'kode_jabatan'}, 
                {data: 'nama_jabatan', name: 'nama_jabatan'}, 
                {data: 'Action', name: 'Action'}
            ]
        });
    </script>
    {{-- To handle event on b --}}
    <script src="{{ url('js/app.js') }}"></script>
@endpush