@extends('layouts.template')

@section('title', 'List Sifat Surat')
@section('content')

    <div class="row gutter-xs">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h4>Master Sifat surat .</h4>
                    <div class="formcontent"></div>
                    <div class="clearfix"></div>
                    <br />
                    <br />
                </div>
                <div class="card-body">
                    @include('toolbars')
                    <table id="datatable" class="table table-hover table-striped table-nowrap dataTable" cellspacing="0"
                        width="100%">
                        <thead>
                            <tr>
                                <th><input type='checkbox' name='cbox[]'></th>
                                <th>Nama</th>
                                <th>User Create</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th>Nama</th>
                                <th>User Create</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- action script was here --}}
    </div>
    @include('include')
    <script>
        var table = $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            order: [1, 'asc'],
            pageLength: 50,
            ajax: {
                url: "{{ route('api.sifatsurat') }}",
                method: 'POST',
                _token: "{{ csrf_token() }}",
            },
            columns: [{
                    data: 'id',
                    name: 'id',
                    orderable: false,
                    searchable: false,
                    align: 'center',
                    className: 'text-center'
                },
                {
                    data: 'nama',
                    name: 'nama'
                },
                {
                    data: 'usercreate',
                    name: 'usercreate'
                },
                {
                    data: 'action',
                    name: 'action'
                }
            ]
        });


        // action add 
        $('#tambah').click(function(e) {
            e.preventDefault();
            $('.formcontent').html('Loading ..').load('{{ route('sifatsurat.create') }}').slideDown();
        });

        $('#datatable').on('click', '#edit', function(e) {
            e.preventDefault();
            var edit_id = $(this).data('id');
            var urledit = '{{ route('sifatsurat.edit', ':id') }}'.replace(':id', edit_id);
            $('.formcontent').html('Loading edit data ..').load(urledit).slideDown();
        });
        // action delete method function data 
        $('#datatable').on('click', '#delete', function(event) {
            event.preventDefault();
            Swal.fire({
                title: "Dat akan di hapus",
                text: 'Konfirmasi pengahapusan data ?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Delete Data'
            }).then((result) => {
                if (result.isConfirmed) {
                    var data_id = $(this).data('id');
                    // alert(data);
                    $.ajax({
                        url: '{{ route('sifatsurat.destroy', ':id') }}'.replace(':id', data_id),
                        data: {
                            id: data_id,
                        },
                        chace: false,
                        method: 'DELETE',
                        asynch: false,
                        success: function(data) {
                            toastr.success(
                                '<i class="fa fa-close"></i>Data berhasil di hapus');
                            table.ajax.reload();

                        },
                        error: function(data) {

                        }

                    })
                }
            });

        });

    </script>



@endsection
