<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul id="nav">

                <li class="text-muted menu-title">Navigation</li>

                <li class="has_sub">
                    <a href="{{url('/home')}}" class="waves-effect"><i class="ti-home"></i> <span> Dashboard </span></a>
                </li>
                 <li class="text-muted menu-title">Master Data</li>
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-cog fa-spin"></i><span> Master Data</span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="{{url('/jabatan')}}"><i class="fa fa-black-tie"></i>Jabatan</a></li>
                            <li><a href="{{ url('/pangkat') }}"><i class="fa fa-handshake-o"></i>Pangkat</a></li>
                            <li><a href="{{ url('/unit') }}"><i class="fa fa-building-o"></i>Unit</a></li>
                            <li><a href="{{ url('/level') }}"><i class="fa fa-building-o"></i>Level</a></li>
                            <li><a href="{{ url('/grade_jabatan') }}"><i class="fa fa-building-o"></i>Grade Jabatan</a></li>
                        </ul>
                    </li>
        
                    
            <li class="text-muted menu-title">Data</li>
            @foreach (SiteHelpers::main_menu() as $mm)
                <li class="has_sub @if(Request::segment(1)==$mm->url) active @endif">
                    <a href="#" class="waves-effect"><i class="{{$mm->icon}}"></i><span>{{$mm->nama_menu}}</span> <span class="menu-arrow"></span></a>

                    <ul class="list-unstyled">
                        @foreach (SiteHelpers::sub_menu() as $sm)
                            @if ($sm->master_menu == $mm->id)
                            <li><a href="{{url($sm->url)}}"><i class="{{$sm->icon}}"></i>{{$sm->nama_menu}}</a></li>
                            @endif
                        @endforeach
                    </ul>     
                </li>      
            @endforeach

             <li class="text-muted menu-title">Penilaian Dan Peomosi</li>
              @foreach (SiteHelpers::out_menu() as $om)
                 <li> <a href="{{ url($om->url) }}" class="waves-effect"><i class="{{$om->icon}}"></i><span>{{$om->nama_menu}}</span></a></li>
            @endforeach 
                 <li> <a href="{{ url('/nilainki') }}" class="waves-effect"><i class="fa fa-font"></i><span>Nilai NKI</span></a></li>
                  <li> <a href="{{ url('/cuti') }}" class="waves-effect"><i class="fa fa-font"></i><span>Cuti</span></a></li>

                     <li class="text-muted menu-title">Hak Akses Menu User</li>
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-cog fa-spin"></i><span>Hak Akses Menu User</span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="{{url('Hak_akses/menu')}}"><i class="fa fa-black-tie"></i>Menu</a></li>
                            <li><a href="{{url('Hak_akses/levelUser')}}"><i class="fa fa-black-tie"></i>Level Admin</a></li>
                            <li><a href="{{url('Hak_akses/akses')}}"><i class="fa fa-black-tie"></i>Hak Akses Menu</a></li>
                            <li><a href="{{url('Hak_akses/user')}}"><i class="fa fa-black-tie"></i>User</a></li>
                        </ul>     
                    </li>

                <li class="text-muted menu-title">More</li>
                {{-- data karyawan --}}
                <li class="has_sub">
                 <a href="javascript:void(0);"  class="waves-effect"><i class="fa fa-vcard-o"></i><span>Data Karyawan</span><span class="menu-arrow"></span></a>
                 <ul class="list-unstyled">
                    <li> <a href="{{ url('/karyawan/show') }}" id="refres" class="waves-effect"><i class="fa fa-id-card-o"></i><span>Karyawan Organik</span></a></li>
                    <li> <a href="{{ url('/karyawanPkwt') }}" class="waves-effect"><i class="fa fa-id-card"></i><span>Karyawan PKWT</span></a></li>
                   
                </ul>
                </li>

                <li> <a href="{{ url('/penilaianKaryawan') }}" class="waves-effect"><i class="fa fa-font"></i><span>Penilaian Karyawan</span></a></li>
                 <li class="has_sub">
                    <a href="{{url('/promosi')}}" class="waves-effect"><i class="fa fa-bullhorn"></i> <span> Promosi Karyawan </span></a>
                </li>


                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-file-text-o"></i><span class="menu-arrow"></span><span> Rekapitulasi </span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{'/grafikLevel/1'}}"><i class="ti-bar-chart"></i>Level</a></li>
                        <li><a href="{{'/grafikJabatan/11'}}"><i class="fa fa-bar-chart-o"></i>Jabatan</a></li>
                        <li><a href="{{'/grafikPangkat/11'}}"><i class="fa fa-line-chart"></i> Pangkat</a></li>
                        <li><a href="{{'/grafikPkwt'}}"><i class="fa fa-file-text-o"></i>Pkwt</a></li>
                       
                    </ul>
                </li>
               

                 <li class="has_sub">
                    <a href="{{url('/pensiun')}}" class="waves-effect"><i class="fa fa-suitcase"></i> karyawan Pensiun </span></a>
                </li>
               
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>