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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards Blog</a></li>
                                </ol>
                            </div>
                            <h4 class="page-title">Dashboards Blog</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xxl-3 col-sm-6">
                        <div class="card widget-flat text-bg-primary">
                            <div class="card-body">
                                <div class="float-end">
                                    <i class="ri-article-line widget-icon"></i>
                                </div>
                                <h6 class="text-uppercase mt-0" title="Customers">Total Articles</h6>
                                <h2 class="my-2">{{ $total_articles }} Articles</h2>
                                <p class="mb-0">
                                    <a href="{{ url('admin/articles') }}" class="text-light">
                                        <span class="badge bg-white bg-opacity-10 me-1">Views</span>
                                        <i class="ri-eye-line"></i>
                                    </a>
                                </p>
                                {{-- <p class="mb-0">
                                    <span class="badge bg-white bg-opacity-10 me-1">2.97%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p> --}}
                            </div>
                        </div>
                    </div> <!-- end col-->

                    <div class="col-xxl-3 col-sm-6">
                        <div class="card widget-flat text-bg-warning">
                            <div class="card-body">
                                <div class="float-end">
                                    <i class="ri-article-fill widget-icon"></i>
                                </div>
                                <h6 class="text-uppercase mt-0" title="Customers">Total Categories</h6>
                                <h2 class="my-2">{{ $total_categories }} Categories</h2>
                                <p class="mb-0">
                                    <a href="{{ url('admin/categories') }}" class="text-light">
                                        <span class="badge bg-white bg-opacity-10 me-1">Views</span>
                                        <i class="ri-eye-line"></i>
                                    </a>
                                </p>
                                {{-- <p class="mb-0">
                                    <span class="badge bg-white bg-opacity-10 me-1">18.25%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p> --}}
                            </div>
                        </div>
                    </div> <!-- end col-->
                </div>

                <div class="row">
                    <div class="col-6">
                        <h4>Latest Articles</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                    
                                <tbody>
                                    @foreach ($latest_article as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->Category->name }}</td>
                                            <td>{{ $item->created_at }}</td>
                                            <td class="text-center">
                                                <a href="{{ url('admin/articles/' . $item->id) }}" class="btn btn-info btn-sm">
                                                    <i class="ri-eye-line text-light"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div class="col-6">
                        <h4>Popular Articles</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>View</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                    
                                <tbody>
                                    @foreach ($popular_article as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->Category->name }}</td>
                                            <td>{{ $item->views }} x</td>
                                            <td class="text-center">
                                                <a href="{{ url('admin/articles/' . $item->id) }}" class="btn btn-info btn-sm">
                                                    <i class="ri-eye-line text-light"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- container -->
            </div>
            <!-- content -->
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->
        @endsection
