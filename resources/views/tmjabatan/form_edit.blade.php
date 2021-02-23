Tambah data jenis arsip
<hr />
<div class="demo-form-wrapper">
    <form class="form form-horizontal" id="simpan">
        <div class="form-group">
            <label class="col-sm-3 control-label" for="form-control-1">Data Jabatan</label>
            <div class="col-sm-6">
                <input id="form-control-1" class="form-control" type="text" name="nama" value="{{ $nama }}">
            </div>
        </div>

        <div class="col-md-6 col-md-offset-3">
            <button class="btn btn-primary" type="submit" id="save"><span id="icon_form"
                    class="icon icon-save icon-lg"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Save</button>
            <button class="btn btn-warning" type="button" id="cancel"><span
                    class="sidenav-icon icon icon-works">G</span>Cancel</button>

        </div>
    </form>
</div>


<script>
    $(function() {
        $('#cancel').click(function(e) {
            e.preventDefault();
            $('.formcontent').slideUp().hide();
        });

        $('#simpan').submit(function(e) {
            e.preventDefault();
            if ($('input[name="nama"]').val() == '') {
                toastr.error('<i class="fa fa-close"></i>nama jabatan tidak boleh kosong');
            } else {

                $.ajax({
                    url: '{{ route('jabatan.store') }}',
                    dataType: 'json',
                    method: 'post',
                    data: $(this).serialize(),
                    asych: false,
                    chace: false,
                    beforeSend: function(data) {
                        $('#save').prop('disabled', true);
                        $('#icon_form').removeClass(
                            'icon icon-save icon-lg');
                        $('#icon_form').addClass(
                            'spinner spinner-default spinner-sm input-icon');

                    },
                    success: function(data) {
                        toastr.success(
                            '<i class="fa fa-close"></i>data berhasil di simpan');
                        $('#trjenis').DataTable().ajax.reload();

                        $('#save').removeAttr('disabled');
                        $('#icon_form').removeClass(
                            'spinner spinner-default spinner-sm input-icon');
                        $('#icon_form').addClass(
                            'icon icon-save icon-lg');
                    },
                    error: function(data) {
                        err = '';
                        respon = data.responseJSON;
                        $.each(respon.errors, function(index, value) {
                            err += "<li>" + value + "</li>";
                        });
                        toastr.error(
                            respon.message + ": <br />" + err);
                        $('#trjenis').DataTable().ajax.reload();

                        $('#save').removeAttr('disabled');
                        $('#icon_form').removeClass(
                            'spinner spinner-default spinner-sm input-icon');
                        $('#icon_form').addClass(
                            'icon icon-save icon-lg');
                    }
                })
            }
        });
    });

</script>
