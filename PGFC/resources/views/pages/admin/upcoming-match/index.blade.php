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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Pertandingan Selanjutnya</a>
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Pertandingan Selanjutnya </h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                {{-- Konten --}}
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

                            <div class="card-body">
                                <table id="fixed-columns-datatable"
                                    class="table table-striped nowrap row-border order-column w-100">
                                    <a href="{{ route('upcoming-match.create') }}" class="btn btn-primary"
                                        style="margin-bottom: 10px;">
                                        <i class="ri-add-circle-line text-ligth"> Tambah Data </i>
                                    </a>
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Home</th>
                                            <th>Away</th>
                                            <th>Match Date Time</th>
                                            <th>vanue</th>
                                            <th>Logo Home</th>
                                            <th>Logo Away</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @forelse ($items as $item)

                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->home_team }}</td>
                                            <td>{{ $item->away_team }}</td>
                                            <td>{{ $item->match_datetime }}</td>
                                            <td>{{ $item->vanue }}</td>
                                            <td>
                                                <img src="{{ url ('storage/' .$item->home_team_logo) }}" alt=""
                                                    style="width: 150px; height: 150px; object-fit: cover;"
                                                    >
                                            </td>
                                            <td>
                                                <img src="{{ url ('storage/' .$item->away_team_logo) }}" alt=""
                                                    style="width: 150px; height: 150px; object-fit: cover;"
                                                    >
                                            </td>
                                            <td>{{ $item->description }}</td>
                                            <td>
                                                <a href="{{ route('upcoming-match.edit', $item->id) }}"
                                                    class="btn btn-info">
                                                    <i class="ri-pencil-line text-light"></i>
                                                </a>
                                                <form action="{{ route('upcoming-match.destroy', $item->id) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger">
                                                        <i class="ri-delete-bin-line text-light"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>

                                        @empty
                                        
                                        <tr>
                                            <td colspan="9" class="text-center">
                                                Data Kosong
                                            </td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
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
