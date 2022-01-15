@extends('layouts.app')

@section('content')
 <!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <h4 class="page-title">Jabatan</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Jabatan</a></li>
        </ol>
        {{-- <div class="alert alert-danger" role="alert">
            This is a danger alert—check it out!
          </div> --}}
        <div class="row">
            <div class="col-12">
                <div class="card-box table-responsive">
                    <h4 class="m-t-0 header-title">Data Jabatan</h4>
                    <table id="responsive-datatable" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Kode Jabatan</th>
                            <th>Nama Jabatan</th>
                            <th>Level</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach ($collection as $item)
                                
                            @endforeach
                        {{-- <tr>
                            <td>90</td>
                            <td>DIREKTUR UTAMA</td>
                            <td>DIRUT</td>
                        </tr>
                         <tr>
                            <td>82</td>
                            <td>DIREKTUR</td>
                            <td>DI</td>
                        </tr>
                         <tr>
                            <td>91</td>
                            <td>KA SESPER</td>
                            <td>KA SESPER</td>
                        </tr>
                         <tr>
                            <td>74</td>
                            <td>KADIV</td>
                            <td>KADIV</td>
                        </tr>
                         <tr>
                            <td>73</td>
                            <td>KADIV (Non Struktural)</td>
                            <td>VP</td>
                        </tr>
                         <tr>
                            <td>63</td>
                            <td>KADEV</td>
                            <td>KADEV</td>
                        </tr>
                         <tr>
                            <td>53</td>
                            <td>KADEP (Non Struktural)</td>
                            <td>M</td>
                        </tr>
                         <tr>
                            <td>44</td>
                            <td>KASEK</td>
                            <td>KASEK</td>
                        </tr>
                         <tr>
                            <td>34</td>
                            <td>KASEK (Non Struktural)</td>
                            <td>AM</td>
                        </tr>
                         <tr>
                            <td>25</td>
                            <td>SEKRETARIS I</td>
                            <td>SEK-I</td>
                        </tr>
                         <tr>
                            <td>35</td>
                            <td>SEKRETARIS II</td>
                            <td>SEK-II</td>
                        </tr>
                         <tr>
                            <td>24</td>
                            <td>KAUN</td>
                            <td>KAUN</td>
                        </tr>
                         <tr>
                            <td>23</td>
                            <td>KAUN (Non Struktural)</td>
                            <td>SPV</td>
                        </tr>
                         <tr>
                            <td>22</td>
                            <td>PK. ASISTEN KAUN</td>
                            <td>PK.A. KAUN</td>
                        </tr>
                         <tr>
                            <td>45</td>
                            <td>SEKRETARIS III</td>
                            <td>SEK-III</td>
                        </tr>
                         <tr>
                            <td>0</td>
                            <td>PELAKSANA</td>
                            <td>PEL</td>
                        </tr>
                       --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end row -->
    </div>
</div>
    
@endsection