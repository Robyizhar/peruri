<script>
    console.log('halo');
     //CSRF TOKEN
     $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });

    //Memanggil data table
    $(document).ready(function() {

        $('#tabel-karyawan').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ url('karyawan/show') }}"
            },
            columns: [
                { data: 'np', name: 'np' },
                { data: 'full_name', name: 'full_name' },
                { data: 'tanggal_lahir', name: 'tanggal_lahir' },
                { data: 'tanggal_masuk', name: 'tanggal_masuk' },
                { data: 'tanggal_mpp', name: 'tanggal_mpp' },
                { data: 'tanggal_pensiun', name: 'tanggal_pensiun' },
                { data: 'jabatan_id', name: 'jabatan_id' },
                { data: 'unit_kerja_id', name: 'unit_kerja_id' },
                { data: 'posisi_id', name: 'posisi_id' },
                { data: 'pangkat_id', name: 'pangkat_id' },
                { data: 'grade', name: 'grade' },
                { data: 'T_to_pensiun', name: 'T_to_pensiun' },
                { data: 'brithplace', name: 'brithplace' },
                { data: 'Tmt', name: 'Tmt' },
                { data: 'level_id', name: 'level_id' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ],
        });
    });

    //Modal Hapus
    $(document).on('click', '.delete', function () {
            dataId = $(this).attr('id');
            $('#konfirmasi-modal').modal('show');
        });


    // Lamun tombol hapus di klik,
    $('#tombol-hapus').click(function () {
        $.ajax({

            url: "/karyawan/delete/" + dataId, //eksekusi ajax ke url
            type: 'delete',
            beforeSend: function () {
                $('#tombol-hapus').text('Hapus Data'); //set text untuk tombol hapus
            },
            success: function (data) { //jika sukses
                setTimeout(function () {
                    $('#konfirmasi-modal').modal('hide'); //sembunyikan konfirmasi modal
                    var oTable = $('#tabel-karyawan').dataTable();
                    oTable.fnDraw(false); //reset datatable
                });
            }
        })
    });

    $('select').on('change', function() {
        alert( this.value );
        });
</script>