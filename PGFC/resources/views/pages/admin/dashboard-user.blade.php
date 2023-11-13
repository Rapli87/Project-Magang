@extends('layouts.admin')

@section('title', 'Dashboard | PGFC Admin')

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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                </ol>
                            </div>
                            <h4 class="page-title">Welcome {{ Auth::user()->name }}!</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                {{-- konten --}}
                <h5>Isikan Konten disini.....</h5>
                {{-- end konten --}}
            </div>
            <!-- container -->

        </div>
        <!-- content -->
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
    @endsection
