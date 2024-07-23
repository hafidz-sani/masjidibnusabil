@extends('layouts.app')

@section('content')
@push('title')
<div class="row">
    <div class="col-6">
        <h4>Manajemen Agenda</h4>
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
                    <h4>Halaman Agenda</h4>
                    <span>Berikut agenda yang ada di website Masjid Ibnu Sabil</span>
                </div>
                <div>
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#tambahEvent">Tambah Data</button>

                    {{-- MODAL TAMBAH EVENT --}}
                    <div class="modal fade" id="tambahEvent" tabindex="-1" role="dialog" aria-labelledby="tooltipmodal" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Tambah</h5>
                                    <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="row g-3" action="{{ route('dashboard.admin.event.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-md-12">
                                            <label class="form-label" for="date">Date</label>
                                            <input class="form-control" id="date" name="date" type="date">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="time">Time</label>
                                            <input class="form-control" id="time" name="time" type="time">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="picture">Picture</label>
                                            <input class="form-control" id="picture" name="picture" type="file">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="title">Title</label>
                                            <input class="form-control" id="title" name="title" type="text" placeholder="Masukan Title">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="subtitle">Subtitle</label>
                                            <input class="form-control" id="subtitle" name="subtitle" type="text" placeholder="Masukan Subtitle">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="content">Content</label>
                                            <textarea class="form-control" id="content" name="content" placeholder="Masukan Content"></textarea>
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
                                <th>Date</th>
                                <th>Time</th>
                                <th>Picture</th>
                                <th>Title</th>
                                <th>Subtitle</th>
                                <th>Content</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 0; @endphp
                            @foreach ($events as $event)
                            <tr id="event-{{$event->id}}">
                                <td>{{ ++$no }}</td>
                                <td>{{ $event->date }}</td>
                                <td>{{ $event->time }}</td>
                                <td><img src="{{ asset($event->picture) }}" alt="{{ $event->title }}" width="50">
                                </td>
                                <td>{{ $event->title }}</td>
                                <td>{{ $event->subtitle }}</td>
                                <td>{{ $event->content }}</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit">
                                            <a href="javascript:void(0)" class="pe-auto" onclick="editEvent({{ $event->id }})">
                                                <i class="icon-pencil-alt"></i>
                                            </a>
                                        </li>
                                        <li class="delete">
                                            <a href="javascript:void(0)" class="pe-auto" onclick="confirmDelete({{ $event->id }})">
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
                                <th>Date</th>
                                <th>Time</th>
                                <th>Picture</th>
                                <th>Title</th>
                                <th>Subtitle</th>
                                <th>Content</th>
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

{{-- MODAL EDIT EVENT --}}
<div class="modal fade" id="editEventModal" tabindex="-1" role="dialog" aria-labelledby="tooltipmodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Event</h5>
                <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editEventForm" class="row g-3" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-md-12">
                        <label class="form-label" for="editDate">Date</label>
                        <input class="form-control" id="editDate" name="date" type="date">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label" for="editTime">Time</label>
                        <input class="form-control" id="editTime" name="time" type="time">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label" for="editPicture">Picture</label>
                        <input class="form-control" id="editPicture" name="picture" type="file">
                        <img id="currentPicture" src="" alt="Current Picture" width="100" class="mt-2">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label" for="editTitle">Title</label>
                        <input class="form-control" id="editTitle" name="title" type="text" placeholder="Masukan Title">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label" for="editSubtitle">Subtitle</label>
                        <input class="form-control" id="editSubtitle" name="subtitle" type="text" placeholder="Masukan Subtitle">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label" for="editContent">Content</label>
                        <textarea class="form-control" id="editContent" name="content" placeholder="Masukan Content"></textarea>
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
    function editEvent(id) {
        $.ajax({
            url: '/dashboard/admin/event/' + id + '/edit',
            method: 'GET',
            success: function(data) {
                $('#editDate').val(data.date);
                $('#editTime').val(data.time);
                $('#editTitle').val(data.title);
                $('#editSubtitle').val(data.subtitle);
                $('#editContent').val(data.content);
                $('#currentPicture').attr('src', '/storage/' + data.picture);

                $('#editEventForm').attr('action', '/dashboard/admin/event/' + id);
                $('#editEventModal').modal('show');
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
                    url: '/dashboard/admin/event/' + id,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        $('#event-' + id).remove();
                        Swal.fire(
                            'Deleted!',
                            'Event item has been deleted.',
                            'success'
                        );
                    },
                    error: function(response) {
                        Swal.fire(
                            'Error!',
                            'There was an error deleting the event item.',
                            'error'
                        );
                    }
                });
            }
        });
    }
</script>
@endpush