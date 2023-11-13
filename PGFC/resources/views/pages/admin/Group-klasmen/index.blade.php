{{-- @extends('layouts.vertical', ['title' => 'Responsive Table', 'mode' => $mode ?? '', 'demo' => $demo ?? '']) --}}

{{-- @section('css')
    @vite(['node_modules/admin-resources/rwd-table/rwd-table.min.css'])
@endsection --}}

@extends('layouts.admin')
@section('content')
    {{-- @include('layouts.shared/page-title', ['page_title' => 'Responsive Table', 'sub_title' => 'Tables']) --}}

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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Group Klasmen</a>
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Group Klasmen</h4>
                        </div>
                    </div>
                </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            {{-- <button type="button" class="btn btn-success"  id="printPdfBtn" >Print Pdf</button>
                            <button type="button" class="btn btn-warning" data-excel-url="{{ route('excel.export') }}" id="downloadExcelBtn">Unduh excel</button> --}}


                            <a href="" class="btn btn-primary" style="margin-bottom: 10px;">
                                <i class="ri-add-circle-line text-ligth"> Tambah Data </i>
                            </a>

                            <br>
                            {{-- <a type="button" class="btn btn-success"  href="{{route('Data-Sekolah.CetakDataSekolah')}}"  target="_blank">Print Pdf</a>
                            <a type="button" class="btn btn-warning" href="" >Unduh excel</a> --}}

                            <a type="button" style="margin-bottom: 5px;" href="{{route('Data-Sekolah.CetakDataSekolah')}}"  class="btn btn-success btn-sm tooltips" href="" target="_blank">
                                <i class="ri-file-pdf-fill me-1"></i>
                            </a>
                            <a type="button" style="margin-bottom: 5px;" class="btn btn-warning btn-sm tooltips" href="">
                                <i class="ri-file-excel-fill me-1"></i> 
                            </a>
                        </div>
                    <br>
                    </br>
                   
                </br>
                    </div>
                   <div class="responsive-table-plugin">
                        <div class="table-rep-plugin">
                            <div class="table-responsive" data-pattern="priority-columns">
                                <table id="tech-companies-1" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th data-priority="6">Grup</th>
                                            <th data-priority="1">Tim</th>
                                            <th data-priority="3">Main</th>
                                            <th data-priority="1">Menang</th>
                                            <th data-priority="3">Kalah</th>
                                            <th data-priority="3">Seri</th>
                                            <th data-priority="6">poin</th>
                                            <th data-priority="6">Gol</th>
                                            <th data-priority="6">Gol_k</th>
                                            <th data-priority="6">Selisih</th>

                                            <th data-priority="6">Peringkat</th>
                                            <th data-priority="6">Action</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Grub as $DataGrub)
                                        <tr>
                                            <th>{{$DataGrub->grup}}</th>
                                            <td>{{$DataGrub->tim}}</td>
                                            <td>{{$DataGrub->main}}</td>
                                            <td>{{$DataGrub->menang}}</td>
                                            <td>{{$DataGrub->kalah}}</td>
                                            <td>{{$DataGrub->seri}}</td>
                                            <td>{{$DataGrub->poin}}</td>
                                            <td>{{$DataGrub->gol}}</td>
                                            <td>{{$DataGrub->gol_k}}</td>
                                            <td>{{$DataGrub->selisih}}</td>
                                            <td>{{$DataGrub->peringkat}}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-outline-success dropdown-toggle" type="button"
                                                        id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item" href="">Show</a>
                                                        <a class="dropdown-item" href="">Hapus</a>
                                                    </div>
                                            </td>
                                        </tr>
                                            
                                        @endforeach
                                    
                              
                                    </tbody>
                                </table>
                            </div> <!-- end .table-responsive -->

                        </div> <!-- end .table-rep-plugin-->
                    </div> <!-- end .responsive-table-plugin-->
                </div>
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div>
    <!-- end row -->
@endsection

{{-- @section('script')
    @vite(['resources/js/pages/responsive-table.init.js'])
@endsection
s --}}