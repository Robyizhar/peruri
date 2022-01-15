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
                url: "{{ url('karyawan/showPkwt') }}"
            },
            columns: [
                { data: 'np', name: 'np' },
                { data: 'nama', name: 'nama' },
                { data: 'id_unit', name: 'id_unit' },
                { data: 'id_kodeBagan', name: 'id_kodeBagan' },
                { data: 'id_status', name: 'id_status' },
                { data: 'kontrak_ke', name: 'kontrak_ke' },
                { data: 'id_nomorSp', name: 'id_nomorSp' },
                { data: 'tanggalSp', name: 'tanggalSp' },
                { data: 'mulai', name: 'mulai' },
                { data: 'berakhir', name: 'berakhir' },
                { data: 'grade', name: 'grade' },
                { data: 'sebelum_adendum', name: 'sebelum_adendum' },
                { data: 'masa_jeda', name: 'masa_jeda' },
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

            url: "/karyawan/deletePkwt/" + dataId, //eksekusi ajax ke url
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