@extends('layouts.admin')

@section('title', 'Latest Videos | PGFC Admin')

@push('addon-style')
    <!-- Datatables css -->
    <link href="{{ url('backend/assets/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ url('backend/assets/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ url('backend/assets/vendor/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ url('backend/assets/vendor/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ url('backend/assets/vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <link href="{{ url('backend/assets/vendor/datatables.net-select-bs5/css/select.bootstrap5.min.css') }}" rel="stylesheet"
        type="text/css" />
@endpush

@section('content')
    <!-- Start Page Content here -->

    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">PGFC</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Latest Videos</a></li>
                                </ol>
                            </div>
                            <h4 class="page-title">Latest Videos </h4>
                        </div>
                    </div>
                </div>

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive">
                                <div class="card-body">
                                    <table id="fixed-columns-datatable"
                                        class="table table-striped nowrap row-border order-column w-100">
                                        <a href="{{ route('latest-videos.create') }}" class="btn btn-primary mb-2">
                                            <i class="ri-add-circle-line text-ligth"> Tambah Data </i>
                                        </a>
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Thumbnail</th>
                                                <th>Url</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($latestVideos as $latestVideo)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        <img src="{{ url($latestVideo->thumbnail) }}"
                                                            alt="{{ $latestVideo->title }}" width="100px">
                                                    </td>
                                                    <td>{{ $latestVideo->url }}</td>
                                                    <td>
                                                        <a href="{{ route('latest-videos.edit', $latestVideo->id) }}"
                                                            class="btn btn-warning">
                                                            <i class="ri-pencil-line text-light"></i>
                                                        </a>
                                                        <form
                                                            action="{{ route('latest-videos.destroy', $latestVideo->id) }}"
                                                            method="POST" class="d-inline">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-danger">
                                                                <i class="ri-delete-bin-line text-light"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div> <!-- end row-->

            </div>
            <!-- container -->
        </div>
        <!-- content -->
    </div>
    <!-- End Page content -->

@endsection

@push('addon-script')
    <!-- Datatables js -->
    <script src="{{ url('backend/assets/vendor/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('backend/assets/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ url('backend/assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ url('backend/assets/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}">
    </script>
    <script src="{{ url('backend/assets/vendor/datatables.net-fixedcolumns-bs5/js/fixedColumns.bootstrap5.min.js') }}">
    </script>
    <script src="{{ url('backend/assets/vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ url('backend/assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ url('backend/assets/vendor/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ url('backend/assets/vendor/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ url('backend/assets/vendor/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ url('backend/assets/vendor/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ url('backend/assets/vendor/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ url('backend/assets/vendor/datatables.net-select/js/dataTables.select.min.js') }}"></script>

    <!-- Datatable Demo App js -->
    <script src="{{ url('backend/assets/js/pages/datatable.init.js') }}"></script>
@endpush
