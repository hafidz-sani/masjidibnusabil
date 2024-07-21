@extends('layouts.app')

@section('content')
    @push('title')
        <div class="row">
            <div class="col-6">
                <h4>Galery Management</h4>
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
                        <h4>Halaman Galeri</h4>
                        <span>Berikut galeri yang ada di website Masjid Ibnu Sabil</span>
                    </div>
                    <div>
                        {{-- <a href="{{ route('dashboard.admin.users.create') }}" class="btn btn-primary">Tambah Galeri</a> --}}
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                            data-bs-target="#tambahuser">Tambah Galeri</button>

                        {{-- MODAL TAMBAH GALERI --}}
                        <div class="modal fade" id="tambahuser" tabindex="-1" role="dialog" aria-labelledby="tooltipmodal"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Buat Pengguna</h5>
                                        <button class="btn-close py-0" type="button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="row g-3" action="{{ route('dashboard.admin.users.store') }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="col-md-12">
                                                <label class="form-label" for="name">Nama</label>
                                                <input class="form-control" id="name" name="name" type="text"
                                                    placeholder="Enter Your Name">
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label" for="email">Email</label>
                                                <input class="form-control" id="email" name="email" type="email"
                                                    placeholder="Enter Your Email">
                                            </div>
                                            <div class="col-12 d-flex justify-content-end">
                                                <button class="btn btn-secondary me-2" type="button"
                                                    data-bs-dismiss="modal">Tutup</button>
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
                                    <th>Juduk</th>
                                    <th>Deskripsi</th>
                                    <th>Url</th>
                                    <th>Kategori</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 0; @endphp
                                @foreach ($users as $user)
                                    <tr id="user-{{$user->id}}">
                                        <td>{{ ++$no }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->roles->first() ? $user->roles->first()->name : 'NULL' }}</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit">
                                                    <a href="javascript:void(0)" class="pe-auto" onclick="editUser({{ $user->id }})">
                                                        <i class="icon-pencil-alt"></i>
                                                    </a>
                                                </li>
                                                <li class="delete">
                                                    <a href="javascript:void(0)" class="pe-auto" onclick="confirmDelete({{ $user->id }})">
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
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Url</th>
                                    <th>Kategori</th>
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

    {{-- MODAL EDIT USER --}}
    <div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="tooltipmodal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Pengguna</h5>
                    <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editUserForm" class="row g-3" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-md-12">
                            <label class="form-label" for="editName">Nama</label>
                            <input class="form-control" id="editName" name="name" type="text"
                                placeholder="Enter Your Name">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label" for="editEmail">Email</label>
                            <input class="form-control" id="editEmail" name="email" type="email"
                                placeholder="Enter Your Email">
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
        function editUser(id) {
            $.ajax({
                url: '/dashboard/admin/users/' + id + '/edit',
                method: 'GET',
                success: function(data) {
                    $('#editName').val(data.name);
                    $('#editEmail').val(data.email);
                    $('#editUserForm').attr('action', '/dashboard/admin/users/' + id);
                    $('#editUserModal').modal('show');
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
                        url: '/dashboard/admin/users/' + id,
                        type: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            $('#user-' + id).remove();
                            Swal.fire(
                                'Deleted!',
                                'User has been deleted.',
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
