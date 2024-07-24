@extends('layouts.app')

@section('content')
@push('title')
<div class="row">
    <div class="col-6">
        <h4>Manajemen Kajian</h4>
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
                    <h4>Halaman Kajian</h4>
                    <span>Berikut kajian yang ada di website Masjid Ibnu Sabil</span>
                </div>
                <div>
                    {{-- <a href="{{ route('dashboard.admin.lecture.create') }}" class="btn btn-primary">Tambah Data</a> --}}
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#tambahkajian">Tambah Data</button>

                    {{-- MODAL TAMBAH KAJIAN --}}
                    <div class="modal fade" id="tambahkajian" tabindex="-1" role="dialog" aria-labelledby="tooltipmodal" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Tambah</h5>
                                    <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="row g-3" action="{{ route('dashboard.admin.lecture.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-md-12">
                                            <label class="form-label" for="url">Url</label>
                                            <input class="form-control" id="url" name="url" type="text" placeholder="Masukan Link Embed">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="judul">Judul</label>
                                            <input class="form-control" id="judul" name="judul" type="text" placeholder="Masukan Judul">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="kategori">Kategori</label>
                                            <input class="form-control" id="kategori" name="kategori" type="text" placeholder="Masukan Kategori">
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
                                <th>Url</th>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 0; @endphp
                            @foreach ($lectures as $lecture)
                            <tr id="lecture-{{$lecture->id}}">
                                <td>{{ ++$no }}</td>
                                <td>{{ $lecture->url }}</td>
                                <td>{{ $lecture->judul }}</td>
                                <td>{{ $lecture->kategori }}</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit">
                                            <a href="javascript:void(0)" class="pe-auto" onclick="editLecture({{ $lecture->id }})">
                                                <i class="icon-pencil-alt"></i>
                                            </a>
                                        </li>
                                        <li class="delete">
                                            <a href="javascript:void(0)" class="pe-auto" onclick="confirmDelete({{ $lecture->id }})">
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
                                <th>Url</th>
                                <th>Judul</th>
                                <th>Kategori</th>
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

{{-- MODAL EDIT Kajian --}}
<div class="modal fade" id="editLectureModal" tabindex="-1" role="dialog" aria-labelledby="tooltipmodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Kajian</h5>
                <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editLectureForm" class="row g-3" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-md-12">
                        <label class="form-label" for="editUrl">Url</label>
                        <input class="form-control" id="editUrl" name="url" type="text" placeholder="Masukan Link Embed">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label" for="editJudul">Judul</label>
                        <input class="form-control" id="editJudul" name="judul" type="text" placeholder="Masukan Judul">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label" for="editKategori">Kategori</label>
                        <input class="form-control" id="editKategori" name="kategori" type="text" placeholder="Masukan Judul">
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
    function editLecture(id) {
        $.ajax({
            url: '/dashboard/admin/lecture/' + id + '/edit',
            method: 'GET',
            success: function(data) {
                $('#editUrl').val(data.url);
                $('#editJudul').val(data.judul);
                $('#editKategori').val(data.kategori);
               
                $('#editLectureForm').attr('action', '/dashboard/admin/lecture/' + id);
                $('#editLectureModal').modal('show');
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
                    url: '/dashboard/admin/lecture/' + id,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        $('#lecture-' + id).remove();
                        Swal.fire(
                            'Deleted!',
                            'Lecture has been deleted.',
                            'success'
                        );
                    },
                    error: function(response) {
                        Swal.fire(
                            'Error!',
                            'There was an error deleting the user.',
                            'error'
                        );
                    }
                });
            }
        });
    }
</script>
@endpush