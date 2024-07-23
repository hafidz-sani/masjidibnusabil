@extends('layouts.app')

@section('content')
@push('title')
<div class="row">
    <div class="col-6">
        <h4>Manajemen Galeri</h4>
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
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#tambahGallery">Tambah Data</button>

                    {{-- MODAL TAMBAH GALERI --}}
                    <div class="modal fade" id="tambahGallery" tabindex="-1" role="dialog" aria-labelledby="tooltipmodal" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Tambah</h5>
                                    <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="row g-3" action="{{ route('dashboard.admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-md-12">
                                            <label class="form-label" for="category">Category</label>
                                            <select class="form-select" id="category" name="category">
                                                <option value="image">Image</option>
                                                <option value="video">Video</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="url">Url</label>
                                            <input class="form-control" id="url" name="url" type="text" placeholder="Masukan Link Embed">
                                        </div>
                                        <div class="col-md-12 d-none" id="imageContainer">
                                            <label class="form-label" for="image">Image</label>
                                            <input class="form-control" id="image" name="image" type="file">
                                        </div>

                                        <div class="col-md-12">
                                            <label class="form-label" for="title">Title</label>
                                            <input class="form-control" id="title" name="title" type="text" placeholder="Masukan Title">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="description">Description</label>
                                            <textarea class="form-control" id="description" name="description" placeholder="Masukan Description"></textarea>
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
                                <th>Title</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 0; @endphp
                            @foreach ($galleries as $gallery)
                            <tr id="gallery-{{$gallery->id}}">
                                <td>{{ ++$no }}</td>
                                <td>{{ $gallery->url }}</td>
                                <td>{{ $gallery->title }}</td>
                                <td>{{ $gallery->description }}</td>
                                <td>{{ $gallery->category }}</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit">
                                            <a href="javascript:void(0)" class="pe-auto" onclick="editGallery({{ $gallery->id }})">
                                                <i class="icon-pencil-alt"></i>
                                            </a>
                                        </li>
                                        <li class="delete">
                                            <a href="javascript:void(0)" class="pe-auto" onclick="confirmDelete({{ $gallery->id }})">
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
                                <th>Title</th>
                                <th>Description</th>
                                <th>Category</th>
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

{{-- MODAL EDIT GALERI --}}
<div class="modal fade" id="editGalleryModal" tabindex="-1" role="dialog" aria-labelledby="tooltipmodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Galeri</h5>
                <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editGalleryForm" class="row g-3" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-md-12">
                        <label class="form-label" for="editCategory">Category</label>
                        <select class="form-select" id="editCategory" name="category">
                            <option value="image">Image</option>
                            <option value="video">Video</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label" for="editUrl">Url</label>
                        <input class="form-control" id="editUrl" name="url" type="text" placeholder="Masukan Link Embed">
                    </div>
                    <div class="col-md-12 d-none" id="editImageContainer">
                        <label class="form-label" for="editImage">Image</label>
                        <input class="form-control" id="editImage" name="image" type="file">
                    </div>

                    <div class="col-md-12">
                        <label class="form-label" for="editTitle">Title</label>
                        <input class="form-control" id="editTitle" name="title" type="text" placeholder="Masukan Title">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label" for="editDescription">Description</label>
                        <textarea class="form-control" id="editDescription" name="description" placeholder="Masukan Description"></textarea>
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
    $(document).ready(function() {
        // Handle category change in 'Tambah' modal
        $('#category').on('change', function() {
            var selectedCategory = $(this).val();
            if (selectedCategory === 'image') {
                $('#imageContainer').removeClass('d-none');
                $('#url').prop('disabled', true);
            } else {
                $('#imageContainer').addClass('d-none');
                $('#url').prop('disabled', false);
            }
        });

        // Handle category change in 'Edit' modal
        $('#editCategory').on('change', function() {
            var selectedCategory = $(this).val();
            if (selectedCategory === 'image') {
                $('#editImageContainer').removeClass('d-none');
                $('#editUrl').prop('disabled', true);
            } else {
                $('#editImageContainer').addClass('d-none');
                $('#editUrl').prop('disabled', false);
            }
        });

        // Initialize modal state on page load for 'Tambah' modal
        var initialCategory = $('#category').val();
        if (initialCategory === 'image') {
            $('#imageContainer').removeClass('d-none');
            $('#url').prop('disabled', true);
        } else {
            $('#imageContainer').addClass('d-none');
            $('#url').prop('disabled', false);
        }

        // Initialize modal state on page load for 'Edit' modal
        var initialEditCategory = $('#editCategory').val();
        if (initialEditCategory === 'image') {
            $('#editImageContainer').removeClass('d-none');
            $('#editUrl').prop('disabled', true);
        } else {
            $('#editImageContainer').addClass('d-none');
            $('#editUrl').prop('disabled', false);
        }
    });

    function editGallery(id) {
        $.ajax({
            url: '/dashboard/admin/gallery/' + id + '/edit',
            method: 'GET',
            success: function(data) {
                $('#editUrl').val(data.url);
                $('#editTitle').val(data.title);
                $('#editDescription').val(data.description);
                $('#editCategory').val(data.category).trigger('change'); // Trigger change event to update field visibility

                $('#editGalleryForm').attr('action', '/dashboard/admin/gallery/' + id);
                $('#editGalleryModal').modal('show');
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
                    url: '/dashboard/admin/gallery/' + id,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        $('#gallery-' + id).remove();
                        Swal.fire(
                            'Deleted!',
                            'Gallery item has been deleted.',
                            'success'
                        );
                    },
                    error: function(response) {
                        Swal.fire(
                            'Error!',
                            'There was an error deleting the gallery item.',
                            'error'
                        );
                    }
                });
            }
        });
    }
</script>

@endpush