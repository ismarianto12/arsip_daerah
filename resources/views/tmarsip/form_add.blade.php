 Tambah arsip
 <hr />

 <div class="demo-form-wrapper">
     <form class="form-horizontal" id="simpan" enctype="multipart/form-data" method="POST">
         <div class="panel m-b-lg">
             <ul class="nav nav-tabs nav-justified">
                 <li class="active"><a href="#arsip" data-toggle="tab">Data Arsip</a></li>
                 <li><a href="#satuan" data-toggle="tab">Satuan Dan jenis</a></li>
             </ul>
             <div class="tab-content">
                 <div class="tab-pane fade active in" id="arsip">
                     <div class="form-group">
                         <label class="col-sm-3 control-label" for="form-control-1">Jenis arsip</label>
                         <div class="col-sm-6">
                             <select class="form-control" id="trarsip_id" name="trarsip_id">
                                 @foreach ($jenis as $vl)
                                     <option value="{{ $vl['id'] }}">{{ $vl['jenis_arsip'] }}</option>
                                 @endforeach
                             </select>
                         </div>
                     </div>

                     <div class="form-group">
                         <label class="col-sm-3 control-label" for="form-control-1">Pejabat pertanggung jawab
                             arsip</label>
                         <div class="col-sm-6">
                             <select class="form-control" id="tmpegawai_id" name="tmpegawi_id">
                                 @foreach ($tmpegawai as $key => $peg)
                                     <option value="{{ $peg->id }}">{{ $peg->nama }}</option>
                                 @endforeach
                             </select>
                         </div>
                     </div>

                     <div class="form-group">
                         <label class="col-sm-3 control-label" for="form-control-1">Nama arsip</label>
                         <div class="col-sm-6">
                             <input type="text" class="form-control" name="nama_arsip">
                         </div>
                     </div>


                     <div class="form-group">
                         <label class="col-sm-3 control-label" for="form-control-1">File arsip</label>
                         <div class="col-sm-6">
                             <input type="file" class="form-control" name="file">
                         </div>
                     </div>

                     <div class="form-group">
                         <label class="col-sm-3 control-label" for="form-control-1">Jumlah arsip</label>
                         <div class="col-sm-6">
                             <input type="text" class="form-control" name="nama_arsip">
                         </div>
                     </div>


                 </div>
                 <div class="tab-pane fade" id="satuan">
                     <div class="form-group">
                         <label class="col-sm-3 control-label" for="form-control-1">Satuan</label>
                         <div class="col-sm-6">
                             <select class="form-control" id="tmsatuan_id" name="tmsatuan_id">
                                 @foreach ($satuan as $sat)
                                     <option value="{{ $sat->id }}">{{ $sat->nama_satuan }}</option>
                                 @endforeach
                             </select>
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

             //  $("#foto").change(function() {
             //      var ext = $('#file').val().split('.').pop().toLowerCase();
             //      //Allowed file types
             //      if ($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
             //          swal('File Error', 'tidak bisa upload', 'warning');
             //          $('#foto').val('');
             //      } else {
             //          readURL(this);
             //      }
             //  });
             var dataString = new formData(this);
             $.ajax({
                 url: '{{ route('arsip.store') }}',
                 method: 'post',
                 data: dataString,
                 cache: false,
                 contentType: false,
                 processData: false,
                 dataType: 'json',
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
                     $('#datatable').DataTable().ajax.reload();

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
                     $('#datatable').DataTable().ajax.reload();

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
