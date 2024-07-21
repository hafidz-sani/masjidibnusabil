@extends('layouts.app')

@section('content')
@push('title')
<div class="row">
    <div class="col-6">
        <h4>Finance Management</h4>
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
                    <h4>Halaman Keuangan</h4>
                    <span>Berikut pemasukan yang ada di website Masjid Ibnu Sabil</span>
                </div>
                <div>
                    {{-- <a href="{{ route('dashboard.admin.finance.create') }}" class="btn btn-primary">Tambah Pemasukan</a> --}}
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#tambahkeuangan">Tambah Pemasukan</button>

                    {{-- MODAL TAMBAH KEUANGAN --}}
                    <div class="modal fade" id="tambahkeuangan" tabindex="-1" role="dialog" aria-labelledby="tooltipmodal" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Tambah</h5>
                                    <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="row g-3" action="{{ route('dashboard.admin.finance.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-md-12">
                                            <label class="form-label" for="bulan">Bulan</label>
                                            <input class="form-control" id="bulan" name="bulan" type="text" placeholder="Enter Your Name">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="minggu">Minggu</label>
                                            <input class="form-control" id="minggu" name="minggu" type="text" placeholder="Enter Your Name">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="operasional">Operasional</label>
                                            <input class="form-control" id="operasional" name="operasional" type="number" placeholder="Enter Your Name">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="yatim">Yatim</label>
                                            <input class="form-control" id="yatim" name="yatim" type="number" placeholder="Enter Your Name">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="dhuafa">Dhuafa</label>
                                            <input class="form-control" id="dhuafa" name="dhuafa" type="number" placeholder="Enter Your Name">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="jumat">Jumat</label>
                                            <input class="form-control" id="jumat" name="jumat" type="number" placeholder="Enter Your Name">
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
                                <th>Bulan</th>
                                <th>Minggu</th>
                                <th>Operasional</th>
                                <th>Yatim</th>
                                <th>Dhuafa</th>
                                <th>Jumat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 0; @endphp
                            @foreach ($finances as $finance)
                            <tr id="finance-{{$finance->id}}">
                                <td>{{ ++$no }}</td>
                                <td>{{ $finance->bulan }}</td>
                                <td>{{ $finance->minggu }}</td>
                                <td>{{ $finance->operasional }}</td>
                                <td>{{ $finance->yatim }}</td>
                                <td>{{ $finance->dhuafa }}</td>
                                <td>{{ $finance->jumat }}</td>
                                <td>
                                    <ul class="action">
                                        <li class="edit">
                                            <a href="javascript:void(0)" class="pe-auto" onclick="editFinance({{ $finance->id }})">
                                                <i class="icon-pencil-alt"></i>
                                            </a>
                                        </li>
                                        <li class="delete">
                                            <a href="javascript:void(0)" class="pe-auto" onclick="confirmDelete({{ $finance->id }})">
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
                                <th>Bulan</th>
                                <th>Minggu</th>
                                <th>Operasional</th>
                                <th>Yatim</th>
                                <th>Dhuafa</th>
                                <th>Jumat</th>
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

{{-- MODAL EDIT KEUANGAN --}}
<div class="modal fade" id="editFinanceModal" tabindex="-1" role="dialog" aria-labelledby="tooltipmodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Keuangan</h5>
                <button class="btn-close py-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editFinanceForm" class="row g-3" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-md-12">
                        <label class="form-label" for="editBulan">Bulan</label>
                        <input class="form-control" id="editBulan" name="bulan" type="text" placeholder="Enter Your Name">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label" for="editMinggu">Minggu</label>
                        <input class="form-control" id="editMinggu" name="minggu" type="text" placeholder="Enter Your Email">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label" for="editOperasional">Operasional</label>
                        <input class="form-control" id="editOperasional" name="operasional" type="number" placeholder="Enter Your Email">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label" for="editYatim">Yatim</label>
                        <input class="form-control" id="editYatim" name="yatim" type="number" placeholder="Enter Your Email">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label" for="editDhuafa">Dhuafa</label>
                        <input class="form-control" id="editDhuafa" name="dhuafa" type="number" placeholder="Enter Your Email">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label" for="editJumat">Jumat</label>
                        <input class="form-control" id="editJumat" name="jumat" type="number" placeholder="Enter Your Email">
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
    function editFinance(id) {
        $.ajax({
            url: '/dashboard/admin/finance/' + id + '/edit',
            method: 'GET',
            success: function(data) {
                $('#editBulan').val(data.bulan);
                $('#editMinggu').val(data.minggu);
                $('#editOperasional').val(data.operasional);
                $('#editYatim').val(data.yatim);
                $('#editDhuafa').val(data.dhuafa);
                $('#editJumat').val(data.jumat);
                $('#editFinanceForm').attr('action', '/dashboard/admin/finance/' + id);
                $('#editFinanceModal').modal('show');
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
                    url: '/dashboard/admin/finance/' + id,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        $('#finance-' + id).remove();
                        Swal.fire(
                            'Deleted!',
                            'Finance has been deleted.',
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