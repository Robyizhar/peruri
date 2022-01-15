<script>
 
    console.log('jabatan');
     //CSRF TOKEN
     $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });

    //Modal tambah pangkat
    $('#tombol-tambah').click(function() {

        $('#button-simpan').val('create-post'); //Value manjadi create post
        $('#id').val(''); //value menjadi kosong
        $('#form-tambah-edit').trigger("reset"); //mereset se,ua input dll
        $('#modal-judul').html("Masukan nomor Sp");
        $('#nama-label').html("Nama nomor Sp");
        $('#tambah-edit').modal('show'); //Menampilkan modal

        });

    //Memanggil data table
    $(document).ready(function() {
        $('#tabel-nomorSp').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('nomorSp.index') }}",
                type: 'GET'
            },
            columns: [
                { data: 'nomor_sp', name: 'nomor_sp' },
                { data: 'action', name: 'action' }
            ],
            order: [ [0, 'asc'] ]
        });
    });



    if ($('#form-tambah-edit').length > 0) {
        $('#form-tambah-edit').validate({
            submitHandler: function(form) {
                var actionType = $('#tombol-simpan').val();
                $('#tombol-simpan').html('Mengirim...');

                $.ajax({
                    data: $('#form-tambah-edit').serialize(),
                    url: "{{ route('nomorSp.store') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function(data) {
                        $('#form-tambah-edit').trigger("reset");
                        $('#tambah-edit').modal("hide");
                        $('#tombol-simpan').html("Menyimpan");
                        var reTable = $('#tabel-nomorSp').dataTable();
                        reTable.fnDraw(false);
                    },
                    error: function(xhr) {
                        var res = xhr.responseJSON;
                        if ($.isEmptyObject(res) == false) {
                            $.each(res.errors, function (key, value) {
                                $('#' + key)
                                    .closest('.form-group')
                                    .addClass('has-error')
                                    .append('<div class="text-danger">' + value + '</div>')
                            });
                        }  
                    }
                });
            }
        });
    }

 
    //Modal tambah pangkat
    $('body').on('click', '.edit-post', function () {
        var data_id = $(this).data('id');
        $.get('nomorSp/' + data_id + '/edit', function (data) {
            $('#modal-judul').html("Edit nomor Sp");
            $('#tombol-simpan').val("edit-post");
            $('#tambah-edit').modal('show');

            //set value masing-masing id berdasarkan data yg diperoleh
            $('#id').val(data.id);
            $('#input_data').val(data.nomor_sp);
        })
    });

    //Modal Hapus
    $(document).on('click', '.delete', function () {
            dataId = $(this).attr('id');
            $('#konfirmasi-modal').modal('show');
        });


    // Lamun tombol hapus di klik,
    $('#tombol-hapus').click(function () {
        $.ajax({

            url: "nomorSp/" + dataId, //eksekusi ajax ke url
            type: 'delete',
            beforeSend: function () {
                $('#tombol-hapus').text('Hapus Data'); //set text untuk tombol hapus
            },
            success: function (data) { //jika sukses
                setTimeout(function () {
                    $('#konfirmasi-modal').modal('hide'); //sembunyikan konfirmasi modal
                    var oTable = $('#tabel-nomorSp').dataTable();
                    oTable.fnDraw(false); //reset datatable
                });
            }
        })
    });
</script>