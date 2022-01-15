@extends('layouts.app')

@section('content')
 <!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Karyawan Pkwt</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Karyawan Pkwt</a></li>
        </ol>
        {{-- <div class="alert alert-danger" role="alert">
            This is a danger alert—check it out!
          </div> --}}
        <div class="row">
            <div class="col-12">
                 <div class="btn-group pull-right m-t-15">
                     <a href="{{ route('karyawanPkwt.create') }}" class="modal-show btn btn-primary mb-3">Add Karyawan</a>
                </div>
                <div class="card-box table-responsive">
                    <h4 class="m-t-0 header-title">Data Karyawan Pkwt</h4>
                    <table id="datatable" class="modal-show " cellspacing="0" width="100%">
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
{{-- referensi form dengan radio button --}}
{{-- https://www.myphptutorials.com/questions/cara-manampilkan-form-tapi-setelah-pilih-radio-button_91.html --}}