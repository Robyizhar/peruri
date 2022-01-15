{{-- <script>
    $('body').on('click', '.edit-post', function() {
    var data_url = $(this).data('url');
    var data_id = $(this).data('id');
    var nama_jabatan = $(this).data('nama');
    $.get(data_url + '/' + data_id , function(data) {
        $('#modal-judul').html("Edit "+data_url);
        $('#tombol-simpan').val("edit-post");
        $('#tambah-edit').modal('show');

        //set value masing-masing id berdasarkan data yg diperoleh
        $('#id').val(data_id);
        $('#input_data').val(nama_jabatan);
    })
    });


    


    $(document).on('click', '.delete', function() {
        dataId = $(this).attr('id');
        $('#konfirmasi-modal').modal('show');
    });
</script> --}}

<script>
    console.log('Masuk');
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });


        $('.btn-hapus').click(function(){
        let idHapus = $(this).attr('data-id');
        let title = $(this).attr('data-title');
        let act = $(this).attr('data-url');
            $("#deleteForm").attr('action', '/'+act+'/'+idHapus);
            $("#url").html(act);
            $("#title").html(title);
    })
    // Jika tombol "Ya, Hapus" di klik, submit form
    $('#deleteForm [type="submit"]').click(function(){
        $("#deleteForm").submit();
    });
</script>