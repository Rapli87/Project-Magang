@extends('layouts.admin')

@section('title', 'Detail Articles | PGFC Admin')

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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Detail Articles</a>
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Detail Articles </h4>
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
                            <div class="table-responsive">
                                <div class="card-body">
                                    <table class="table table-striped nowrap row-border order-column w-100">
                                        <tr>
                                            <th width="250px">Title</th>
                                            <td>: {{ $article->title }}</td>
                                        </tr>
                                        <tr>
                                            <th>Category</th>
                                            <td>: {{ $article->Category->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Description</th>
                                            <td>: {!! $article->desc !!}</td>
                                        </tr>
                                        <tr>
                                            <th>Image</th>
                                            <td>: 
                                                <a href="{{ url('storage/admin/articles/' . $article->img) }}" target="_blank" rel="noopener noreferrer">
                                                    <img src="{{ url('storage/admin/articles/' . $article->img) }}"
                                                    alt="" width="50%">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Views</th>
                                            <td>: {{ $article->views }}x</td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            @if ($article->status == 1)
                                                <td>: <span class="badge bg-success">Published</span></td>
                                            @else
                                                <td>: <span class="badge bg-danger">Private</span></td>
                                            @endif
                                        </tr>
                                        <tr>
                                            <th>Publish Date</th>
                                            <td>: {{ $article->publish_date }}</td>
                                        </tr>
                                    </table>
                                    
                                    <a href="{{ route('articles.index') }}" class="btn btn-primary">Back</a>

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
