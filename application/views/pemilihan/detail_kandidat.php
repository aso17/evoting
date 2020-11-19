<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                        class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="simpan btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


<script>
$(function() {
    $(document).on('click', '.edit-record', function(e) {
        e.preventDefault();
        $("#myModal").modal('show');
        $.post('hasil.php', {
                id: $(this).attr('data-id')
            },
            function(html) {
                $(".modal-body").html(html);
            }
        );
    });
});
</script>

<!--harviacode.com-->