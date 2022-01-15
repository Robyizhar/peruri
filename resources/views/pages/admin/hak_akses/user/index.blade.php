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
              <h4>User List</h4>
              <div>
                <a href="{{ route('user.create') }}" class="modal-show btn btn-primary">Add User</a>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="datatable">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>np</th> 
                      <th>nama</th> 
                      <th>email</th>
                      <th>level user</th> 
                      {{-- <th>password</th> --}}
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
            ajax: "{{ route('table.user') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'id'},
                {data: 'np', name: 'np'}, 
                {data: 'name', name: 'name'}, 
                {data: 'email', name: 'email'}, 
                {data: 'leveluser.nama_level_user', name: 'leveluser.nama_level_user'}, 
                // {data: 'password', name: 'password'}, 
                {data: 'Action', name: 'Action'}
            ]
        });
    </script>
    {{-- To handle event on b --}}
    <script src="{{ url('js/app.js') }}"></script>
@endpush