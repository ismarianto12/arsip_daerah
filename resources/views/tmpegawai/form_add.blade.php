Tambah arsip
<hr />
<div class="demo-form-wrapper">
    <form class="form form-horizontal" id="simpan">
        <div class="panel m-b-lg">
            <ul class="nav nav-tabs nav-justified">
                <li class="active"><a href="#dataumum" data-toggle="tab">Pribadi</a></li>
                <li><a href="#datapersonal" data-toggle="tab">Profesi</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade active in" id="dataumum">
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-control-1">Nip</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="nip">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-control-1">Nama</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="nama">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-control-1">No Hanphone</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="no_hp">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-control-1">Alamat</label>
                        <div class="col-sm-6">
                            <textarea class="form-control" name="alamat"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-control-1">Jenis Kelamin</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="jk">
                                <option value="1">Laki - laki </option>
                                <option value="2">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-control-1">Agama</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="agama">
                                <option value="1">Islam </option>
                                <option value="2">Kristen</option>
                                <option value="3">Protestan</option>
                                <option value="4">Hindu</option>
                                <option value="5">Budha</option>
                                <option value="6">Konghucu</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-control-1">Tanggal lahir</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="tanggal_lahir">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-control-1">Tempat Lahir</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="tempat_lahir">
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="datapersonal">
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-control-1">Golongan * Pegawai<small> jika ada
                            </small></label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="golongan">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-control-1">Tanggal Pengukuhan Golongan *
                            Pegawai<small> jika ada
                            </small></label>
                        <div class="col-sm-6">
                            <input type="date" class="form-control" name="golongan_tanggal">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-control-1">Jabatan</label>
                        <div class="col-sm-6">
                            <select name="tmjabatan_id" class="form-control">
                                @foreach ($jabatan as $jab)
                                    <option value="{{ $jab['id'] }}"> {{ $jab['nama'] }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-control-1">Tangal Serah Terima Jabatan</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="jabatan_tanggal">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-control-1">Tahun masuk kerja</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="kerja_tahun">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-control-1">Nip</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="kerja_bulan">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-control-1">Pendidikan </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="pendidikan">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-control-1">Lulus Pendikan</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="pendidikan_lulus">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-control-1"></label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="pendidikan_ijazah">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-control-1">Catatan Mutaasi <small> Jika ada
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="catatn_mutasi">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="form-control-1">Ket</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="keterangan">
                        </div>
                    </div>

                </div>
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

            $.ajax({
                url: '{{ route('pegawai.store') }}',
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
        });
    });

</script>
