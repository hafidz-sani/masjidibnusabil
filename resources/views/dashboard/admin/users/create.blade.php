@extends('layouts.app')

@section('content')
    @push('title')
        <div class="row">
            <div class="col-6">
                <h4>Users Management</h4>
            </div>
            <div class="col-6">
                <x-breadcrumb :values="['users', 'edit']"></x-breadcrumb>
            </div>
        </div>
    @endpush

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>Create User</h4>
                    <p class="f-m-light mt-1">
                        Use the <code>.form-label </code>and <code>.form-control </code>through create basic form.</p>
                </div>
                <div class="card-body">
                    <div class="card-wrapper border rounded-3">
                        <form class="row g-3">
                            <div class="col-md-12">
                                <label class="form-label" for="">Nama Pengguna</label>
                                <input class="form-control" id="" type="email" placeholder="Enter Your Email">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="inputEmail4">Email</label>
                                <input class="form-control" id="inputEmail4" type="email" placeholder="Enter Your Email">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="inputPassword4">Password</label>
                                <input class="form-control" id="inputPassword4" type="password"
                                    placeholder="Enter Your Password">
                            </div>
                            <div class="col-12">
                                <div class="form-check checkbox-checked">
                                    <input class="form-check-input" id="gridCheck1" type="checkbox">
                                    <label class="form-check-label" for="gridCheck1">Check me out</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Sign in </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@push('custom-scripts')
    <script src="{{ asset('cuba/assets/js/clock.js') }}"></script>
@endpush
