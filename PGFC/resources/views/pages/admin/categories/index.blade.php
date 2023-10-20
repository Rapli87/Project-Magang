@extends('layouts.admin')

@section('content')
    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">PGFC</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Categories</a>
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Categories </h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                {{-- Konten --}}
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            {{-- <div class="card-header">
                                <h4 class="header-title">Buttons example</h4>
                                <p class="text-muted mb-0">
                                    The Buttons extension for DataTables provides a common set of options, API
                                    methods and styling to display buttons on a page
                                    that will interact with a DataTable. The core library provides the based
                                    framework upon which plug-ins can built.
                                </p>
                            </div>
                            <!-- end card header--> --}}
                            <div class="table-responsive">
                                <div class="card-body">
                                    <table id="fixed-columns-datatable"
                                        class="table table-striped nowrap row-border order-column w-100">
                                        <a href="{{ route('categories.create') }}" class="btn btn-primary mb-2">
                                            <i class="ri-add-circle-line text-ligth"> Tambah Data </i>
                                        </a>
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Slug</th>
                                                <th>Created At</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($categories as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->slug }}</td>
                                                    <td>{{ $item->created_at }}</td>
                                                    <td>
                                                        <a href="{{ route('categories.edit', $item->id) }}"
                                                            class="btn btn-info">
                                                            <i class="ri-pencil-line text-light"></i>
                                                        </a>
                                                        <form action="{{ route('categories.destroy', $item->id) }}"
                                                            method="POST" class="d-inline">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-danger"
                                                                onclick="return confirm('Yakin ingin menghapus data?')">
                                                                <i class="ri-delete-bin-line text-light"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            {{-- @empty
                                                    <tr>
                                                        <td colspan="5" class="text-center">Data Kosong</td>
                                                    </tr>
                                                @endforelse --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div> <!-- end row-->
                {{-- End Konten --}}
            </div>
            <!-- container -->
        </div>
        <!-- content -->
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
    @endsection
