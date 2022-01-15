{{-- Modal hapus --}}
<div id="DeleteModal" class="modal fade" role="dialog">
    <div class="modal-dialog ">
        <!-- Modal content-->
        <form action="" id="deleteForm" method="post">
            @csrf
            @method('DELETE')
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title text-center">Konfirmasi</h3>
                    <button type="button" class="close" data-dismiss="modal">
                    &times;</button>
                </div>
                <div class="modal-body">
                    <h4 class="text-center">Konfirmasi untuk menghapus <strong id="url"></strong> <strong id="title"></strong></h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger" data-dismiss="modal">Ya</button>
                </div>
            </div>
        </form>
    </div>
</div>