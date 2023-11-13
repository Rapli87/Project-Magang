@extends('layouts.admin')

@section('title', 'Articles | PGFC Admin')

@push('addon-style')
    <!-- Datatables css -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
@endpush

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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Articles</a>
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Articles </h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                {{-- Konten --}}
                {{-- alert success --}}
                <div class="swal" data-swal="{{ session('success') }}"></div>

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
                                    <table id="dataTable" class="table table-striped nowrap row-border order-column w-100">
                                        <a href="{{ route('articles.create') }}" class="btn btn-primary mb-2">
                                            <i class="ri-add-circle-line text-ligth"> Tambah Data </i>
                                        </a>
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Title</th>
                                                <th>Category</th>
                                                <th>Views</th>
                                                <th>Status</th>
                                                <th>Publish Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>

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

    @push('addon-script')
        <!-- Datatables js -->
        {{-- baru --}}
        <script src="{{ url('https://code.jquery.com/jquery-3.5.1.js') }}"></script>
        <script src="{{ url('https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ url('https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js') }}"></script>
        <script src="{{ url('https://cdn.jsdelivr.net/npm/sweetalert2@11') }}"></script>

        {{-- alert success --}}
        <script>
            const swal = $('.swal').data('swal');
            if (swal) {
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: swal,
                    'showConfirmButton': false,
                    'timer': 2000
                })
            }

            function deleteArticle(e) {
                Swal.fire({
                    title: 'Delete Article',
                    text: 'Are you sure to delete this article?',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Delete',
                    cancelButtonText: 'Cancel',
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            type: 'DELETE',
                            url: '/admin/articles/' + e.getAttribute(
                            'data-id'), // Menggunakan e.getAttribute() untuk mendapatkan data-id
                            dataType: 'json',
                            success: function(response) {
                                Swal.fire({
                                    title: 'Success!',
                                    text: response.message,
                                    icon: 'success',
                                }).then(() => {
                                    window.location.href = "/admin/articles";
                                });
                            },
                            error: function(xhr, ajaxOptions, thrownError) {
                                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                            }
                        });
                    }
                });
            }
        </script>

        <script>
            $(document).ready(function() {
                $('#dataTable').DataTable({
                    processing: true,
                    serverside: true,
                    ajax: '{{ url()->current() }}',
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex'
                        },
                        {
                            data: 'title',
                            name: 'title'
                        },
                        {
                            data: 'category_id',
                            name: 'category_id'
                        },
                        {
                            data: 'views',
                            name: 'views'
                        },
                        {
                            data: 'status',
                            name: 'status'
                        },
                        {
                            data: 'publish_date',
                            name: 'publish_date'
                        },
                        {
                            data: 'button',
                            name: 'button'
                        }
                    ]
                });
            });
        </script>
    @endpush
