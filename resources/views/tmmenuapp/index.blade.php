@extends('layouts.template')

@section('title', 'Setting Menu dan hak akses')

@section('content')
    <link href="{{ asset('assets/plugins/css/menu.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" />


    <div class="row gutter-xs">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h4>Seetting menu akses.</h4>
                    <div class="formcontent"></div>
                    <div class="clearfix"></div>
                    <br />
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-lg-8">
                                <div class="dd" id="nestable">
                                    <div class="listmenu">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">

                                <div class="ibox">
                                    <div class="ibox-title">
                                        <h3>Setting Modul & Akses</h3>
                                    </div><!-- /.box-header -->
                                    <div class="ibox-content">
                                        <table class="table">
                                            <tr>
                                                <td><input class='form-control' id="label" type="text"
                                                        placeholder="Nama Menu" required><br /><button
                                                        class="btn btn-success" id="label_cr"><i
                                                            class="fa fa-search"></i>Cari Menu.</button></td>
                                            </tr>
                                            <tr>
                                                <td><input class='form-control link' type="text" id="link"
                                                        placeholder="example.com" autocomplete='off' required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div id="icon">
                                                        <a class="btn btn-primary" id="pilih_icon">Pilih Icon Menu</a>
                                                    </div>

                                                    <div class="tampil"></div>
                                                </td>
                                            </tr>
                                            <tr>

                                                <td style="margin-left: 30px">
                                                    <h4>Level Akses</h4>
                                                    <br />
                                                    @foreach ($level as $s)

                                                        <div class="form-group">
                                                            <div class="checkbox checkbox-success">
                                                                <div id="level_akses_otp"></div>

                                                                <input id="checkbox{{ $s['id'] }}" type="checkbox"
                                                                    name="checkbox" value="{{ $s['id'] }}">
                                                                <label
                                                                    for="checkbox{{ $s['id'] }}">{{ ucfirst($s['level']) }}</label>

                                                            </div>
                                                        </div>
                                                    @endforeach

                                                </td>
                                            </tr>
                                            <tr>
                                                <td><button class='btn btn-sm btn-success' id="submit">Submit</button>
                                                    <button class='btn btn-sm btn-default' id="reset">Reset</button>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@section('script')
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div>

@endsection
@include('include')



<script src="{{ asset('assets/plugins/js/jquery.nestable.js') }}"></script>
<script>
    $(function() {
        $('.listmenu').html('Loading ...').load('{{ route('menuapp_app') }}');
    });

</script>




<script>
    $(function() {

        $('#pilih_icon').on('click', function() {
            alert('data di pilih');
            $('#exampleModal').modal('show');
        });

    })

</script>
@endsection
