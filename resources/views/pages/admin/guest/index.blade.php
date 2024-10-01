@extends('layouts.administrator.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="fw-bold">{{ $title }}</h4>
                {{-- @can('create users') --}}
                <button type="button" name="Add" class="btn btn-primary btn-sm" id="createGuest">
                        <i class="ti-plus"></i>
                        Tambah Tamu
                </button>
                {{-- @endcan --}}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive text-left">
                <table class="table table-bordered dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Link</th>
                            <th width="100px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <x-modal id="modalAction" title="Modal title" size="lg"></x-modal>

@endsection

@push('js')
    <script type="text/javascript">
        $(document).on('click', '.urlCopy', function() {
            // Ambil URL dari atribut data-url
            var url = $(this).data('url');

            // Buat elemen sementara untuk menyalin URL
            var tempInput = document.createElement("input");
            tempInput.style = "position: absolute; left: -1000px; top: -1000px";
            tempInput.value = url;
            document.body.appendChild(tempInput);

            // Salin URL ke clipboard
            tempInput.select();
            document.execCommand("copy");
            document.body.removeChild(tempInput);

            // Tampilkan toast notifikasi
            showToast('success', 'Link berhasil disalin!');
        });

        $(function() {
            // ajax table
            var table = $('.dataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.guests.index') }}",
                columnDefs: [{
                    "targets": "_all",
                    "className": "text-start"
                }],
                columns: [
                    {
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'link',
                        name: 'link',
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ]
            });

            // create
            $('#createGuest').on('click', function() {
                $.get("{{ route('admin.guests.create') }}", function(response) {
                    $('#modalAction .modal-title').html('Tambah Tamu');
                    $('#modalAction .modal-body').html(response);

                    $('#modalAction').modal('show');
                });
            });

            // edit
            $('body').on('click', '.editGuest', function() {
                var guestId = $(this).data('id');
                $.get("{{ route('admin.guests.index') }}" + '/' + guestId + '/edit', function(response) {
                    $('#modalAction .modal-title').html('Edit Tamu');
                    $('#modalAction .modal-body').html(response);

                    $('#modalAction').modal('show');
                })
            });

            // delete
            $('body').on('click', '.deleteGuest', function() {
                var guestId = $(this).data('id');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "Deleted data cannot be restored!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#82868',
                    confirmButtonText: 'Yes, delete!',
                    cancelButtonText: 'Cancel'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: "DELETE",
                            url: "{{ url('admin/guests') }}/" + guestId,
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function(response) {
                                table.draw();
                                showToast('success', response.message);
                            },
                            error: function(response) {
                                var errorMessage = response.responseJSON
                                    .message;
                                showToast('error',
                                    errorMessage);
                            }
                        });
                    }
                });
            });

            // save
            $('#save-modal').click(function(e) {
                e.preventDefault();
                $(this).html('Sending..');
                $(this).addClass('disabled');
                var id = $('#guestId').val();
                var url = id ? `{{ url('admin/guests') }}/${id}` : `{{ url('admin/guests') }}`;

                $.ajax({
                    data: $('#form-modalAction').serialize(),
                    url: url,
                    type: "POST",
                    dataType: 'json',
                    success: function(response) {
                        $('#modalAction').modal('hide');
                        table.draw();
                        showToast('success', response.message);
                        $('#save-modal').html('Save');
                        $('#save-modal').removeClass('disabled');
                    },
                    error: function(response) {
                        var errors = response.responseJSON.errors;
                        if (errors) {
                            Object.keys(errors).forEach(function(key) {
                                var errorMessage = errors[key][0];
                                $('#' + key).siblings('.text-danger').text(
                                    errorMessage);
                            });
                        }
                        $('#save-modal').html('Save');
                        $('#save-modal').removeClass('disabled');
                    }
                });
            });

        });
    </script>
@endpush
