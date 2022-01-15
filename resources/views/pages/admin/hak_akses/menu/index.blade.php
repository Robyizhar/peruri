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
          <li class="breadcrumb-item active"><a href="#">List Menu</a></li>
        </ol>
      </nav>
    </div>

    <div class="section-body">

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header d-flex justify-content-between">
              <h4>Menu List</h4>
              <div>
                <a href="{{ route('menu.create') }}" class="modal-show btn btn-primary">Add Menu</a>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="datatable">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Menu</th> 
                      <th>level menu</th>  
                      <th>url</th>  
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
            ajax: "{{ route('table.menu') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'id'},
                {data: 'nama_menu', name: 'nama_menu'}, 
                {data: 'level_menu', name: 'level_menu'}, 
                {data: 'url', name: 'url'}, 
                {data: 'Action', name: 'Action'}
            ]
        });
    </script>
    {{-- To handle event on b --}}
    <script src="{{ url('js/app.js') }}"></script>
@endpush