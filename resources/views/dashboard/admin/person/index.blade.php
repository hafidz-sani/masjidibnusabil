@extends('layouts.app')

@section('content')
@push('title')
<div class="row">
    <div class="col-6">
        <h4>Manajemen Data Jamaah</h4>
    </div>
    <div class="col-6">
        <x-breadcrumb :values="['users']">
        </x-breadcrumb>
    </div>
</div>
@endpush

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between pb-0 card-no-border">
                <div>
                    <h4>Halaman Data Jamaah</h4>
                    <span>Berikut data jamaah yang ada di website Masjid Ibnu Sabil</span>
                </div>
                <div>
                    {{-- <a href="{{ route('dashboard.admin.person.create') }}" class="btn btn-primary">Tambah Data</a> --}}
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#tambahperson">Tambah Data</button>

                    {{-- MODAL TAMBAH PERSON --}}
                    <div class="modal fade" id="tambahperson" tabindex="-1" role="dialog" aria-labelledby="tooltipmodal" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Tambah</h5>
                                    <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="row g-3" action="{{ route('dashboard.admin.person.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-md-12">
                                            <label class="form-label" for="nama">Nama</label>
                                            <input class="form-control" id="nama" name="nama" type="text" placeholder="Masukan Nama">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="panggilan">Panggilan</label>
                                            <input class="form-control" id="panggilan" name="panggilan" type="text" placeholder="Masukan Panggilan">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="alamat">Alamat</label>
                                            <input class="form-control" id="alamat" name="alamat" type="text" placeholder="Masukan Alamat">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="status">Status</label>
                                            <input class="form-control" id="status" name="status" type="text" placeholder="Masukan Status">
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button class="btn btn-secondary me-2" type="button" data-bs-dismiss="modal">Tutup</button>
                                            <button class="btn btn-primary" type="submit">Tambah</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- END MODAL --}}

                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="display" id="basic-9">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Panggilan</th>
                                <th>Alamat</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 0; @endphp
                            @foreach ($persons as $person)
                            <tr id="person-{{$person->id}}">
                                <td>{{ ++$no }}</td>
                                <td>{{ $person->nama }}</td>
                                <td>{{ $person->panggilan }}</td>
                                <td>{{ $person->alamat }}</td>
                                <td>{{ $person->status }}</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit">
                                            <a href="javascript:void(0)" class="pe-auto" onclick="editPerson({{ $person->id }})">
                                                <i class="icon-pencil-alt"></i>
                                            </a>
                                        </li>
                                        <li class="delete">
                                            <a href="javascript:void(0)" class="pe-auto" onclick="confirmDelete({{ $person->id }})">
                                                <i class="icon-trash"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Panggilan</th>
                                <th>Alamat</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- State saving Ends-->
</div>
<!-- Container-fluid Ends-->

{{-- MODAL EDIT Person --}}
<div class="modal fade" id="editPersonModal" tabindex="-1" role="dialog" aria-labelledby="tooltipmodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Person</h5>
                <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editPersonForm" class="row g-3" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-md-12">
                        <label class="form-label" for="editNama">Nama</label>
                        <input class="form-control" id="editNama" name="nama" type="text" placeholder="Masukan Nama">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label" for="editPanggilan">Panggilan</label>
                        <input class="form-control" id="editPanggilan" name="panggilan" type="text" placeholder="Masukan Panggilan">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label" for="editAlamat">Alamat</label>
                        <input class="form-control" id="editAlamat" name="alamat" type="text" placeholder="Masukan Alamat">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label" for="editStatus">Status</label>
                        <input class="form-control" id="editStatus" name="status" type="text" placeholder="Masukan Status">
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <button class="btn btn-secondary me-2" type="button" data-bs-dismiss="modal">Tutup</button>
                        <button class="btn btn-primary" type="submit">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- END MODAL --}}
@endsection

@push('custom-scripts')
<script src="{{ asset('cuba/assets/js/clock.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    function editPerson(id) {
        $.ajax({
            url: '/dashboard/admin/person/' + id + '/edit',
            method: 'GET',
            success: function(data) {
                $('#editNama').val(data.nama);
                $('#editPanggilan').val(data.panggilan);
                $('#editAlamat').val(data.alamat);
                $('#editStatus').val(data.status);

                $('#editPersonForm').attr('action', '/dashboard/admin/person/' + id);
                $('#editPersonModal').modal('show');
            }
        });
    }

    function confirmDelete(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '/dashboard/admin/person/' + id,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        $('#person-' + id).remove();
                        Swal.fire(
                            'Deleted!',
                            'Person has been deleted.',
                            'success'
                        );
                    },
                    error: function(response) {
                        Swal.fire(
                            'Error!',
                            'There was an error deleting the person.',
                            'error'
                        );
                    }
                });
            }
        });
    }
</script>
@endpush