@extends('layouts.app')

@section('content')
 <!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Status Pkwt</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Status Pkwt</a></li>
        </ol>
        {{-- <div class="alert alert-danger" role="alert">
            This is a danger alert—check it out!
          </div> --}}
        <div class="row">
            <div class="col-12">
                <div class="card-box table-responsive">
                    <a href="javascript:void(0)" class="btn btn-primary mb-3" id="tombol-tambah">Add status Pkwt</a>
                    <table id="tabel-status" class="table table-bordered">
                        <thead>
                            <tr>
                                <td class="text-center"><strong>Setatus PKWT</strong></td>
                                <td class="text-center" width="12%"><strong>Opsi</strong></td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@include('modal.edit')
@include('modal.hapus')
    
@endsection