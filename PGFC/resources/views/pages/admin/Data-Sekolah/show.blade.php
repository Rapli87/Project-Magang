@extends('layouts.admin')
@section('content')
   <!-- start page title -->

   
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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Deta Sekolah</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Detail Data Sekolah</a></li>
                            </ol>
                        </div>
                        {{-- <h4 class="page-title">Welcome {{ Auth::user()->name }}!</h4> --}}
                        <h4 class="page-title">Welcome Admin!</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="input-group">
                        <input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Search Pemain Futsal">
                        <span class="input-group-append">
                            <button type="button" class="btn btn-primary rounded-start-0"><i class="ri-search-line fs-16"></i></button>
                            
                        </span>
                    
                  
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- End row -->

    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div class="d-flex">
                        <a class="me-3" href="#">
                            <img class="avatar-md rounded-circle bx-s"
                                src="{{ url('frontend/images/upcoming/LogoSekolah/SMA NU 1 GRESIK.jpg') }}" alt="" width="100px"" alt="">
                        </a>
                        <div class="info">
                            <h5 class="fs-18 my-1">Nama Sekolah:</h5>
                            <p class="text-muted fs-15">{{ $dataSekolah->Nama_Sekolah }}</p>

                             <h5 class="fs-18 my-1">Telp:</h5>
                            <p class="text-muted fs-15">{{ $dataSekolah->Telp }}</p>

                            <h5 class="fs-18 my-1">Fax:</h5>
                            <p class="text-muted fs-15">{{ $dataSekolah->Fax }}</p>

                            <h5 class="fs-18 my-1">Email:</h5>
                            <p class="text-muted fs-15">{{ $dataSekolah->Email }}</p>

                           
                        </div>
                    </div>
                    <div class="">
                        <a href="#" class="btn btn-success btn-sm me-1 tooltips"
                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                            <i class="ri-pencil-fill"></i>
                        </a>
                        <a href="#" class="btn btn-danger btn-sm tooltips" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                            <i class="ri-close-fill"></i>
                        </a>
                        <a type="button" class="btn btn-success btn-sm tooltips" href="" target="_blank">
                            <i class="ri-file-pdf-fill me-1"></i>
                        </a>
                        <a type="button" class="btn btn-warning btn-sm tooltips" href="">
                            <i class="ri-file-excel-fill me-1"></i> 
                        </a>
                    </div>
                </div>

                <hr>

                <ul class="social-list list-inline mt-3 mb-0">
                    <li class="list-inline-item">
                        <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0"
                            title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips"
                            href="" data-bs-title="Facebook"><i
                                class="ri-facebook-fill"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0"
                            title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips"
                            href="" data-bs-title="Twitter"><i
                                class="ri-twitter-fill"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0"
                            title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips"
                            href="" data-bs-title="LinkedIn"><i
                                class="ri-linkedin-box-fill"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0"
                            title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips"
                            href="" data-bs-title="Skype"><i class="ri-skype-fill"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0"
                            title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips"
                            href="" data-bs-title="Message"><i
                                class="ri-mail-open-line"></i></a>
                    </li>
                </ul>
            </div>
            <!-- card-body -->
        </div>
        <!-- card -->
    </div> <!-- end col -->
</div> <!-- End row -->

    <div class="row">
        @foreach($dataSekolah->pemain as $pemain)
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="d-flex">
                            <a class="me-3" href="#">
                                <img class="avatar-md rounded-circle bx-s"
                                    src="{{ url('frontend/images/users/avatar-2.jpg') }}" alt="">
                            </a>
                            <div class="info">
                                {{-- @if ($dataSekolah->pemain->isNotEmpty())
                                @foreach($dataSekolah->pemain as $pemain) --}}
                              
                                <h5 class="fs-18 my-1">{{ $pemain->name }}</h5>
                                <p class="text-muted fs-15">{{ $pemain->No_punggung }}</p>
                                <p class="text-muted fs-15">{{ $pemain->Kelas }}</p>
                                <p class="text-muted fs-15">{{ $pemain->Tanggal_lahir }}</p>
                                <p class="text-muted fs-15 ">{{ $pemain->Ijasah }}</p>
                                <p class="text-muted fs-15 ">{{ $pemain->Rapor }}</p>
                                <p class="text-muted fs-15">{{ $pemain->Keterangan_Siswa }}</p>
                                <p class="text-muted fs-15  ">{{ $pemain->Kartu_Siswa }}</p>
                                {{-- <p class="text-muted fs-15">{{ $pemain->Foto }}</p> --}}

                                
                                @if($dataSekolah->pjsekolah)
                                @foreach($dataSekolah->pjsekolah as $pjsekolah)
                                    <p class="text-muted fs-15">{{ $pjsekolah->nama_kepala_sekolah }}</p>
                                @endforeach
                            @else
                                <p class="text-muted fs-15">Tidak ada data kepala sekolah</p>
                            @endif
                            
                              
                            </div>
                        </div>
                        <div class="">
                            <a href="#" class="btn btn-success btn-sm me-1 tooltips" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit"> <i class="ri-pencil-fill"></i> </a>
                            <a href="#" class="btn btn-danger btn-sm tooltips" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"> <i class="ri-close-fill"></i> </a>
                            <a href="{{route('Data-Sekolah.Showpemain',['id' => $pemain->id])}}" class="btn btn-primary btn-sm me-1 tooltips" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Detail" >
                                {{-- {{ route('Data-Sekolah.show', ['id' => $Data->id]) }} --}}
                                <i class="ri-eye-fill"></i>
                            </a>
                            
                        </div>
                    </div>

                    <hr>
                    <ul class="social-list list-inline mt-3 mb-0">
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href="" data-bs-title="Facebook"><i class="ri-facebook-fill"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href="" data-bs-title="Twitter"><i class="ri-twitter-fill"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href="" data-bs-title="LinkedIn"><i class="ri-linkedin-box-fill"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href="" data-bs-title="Skype"><i class="ri-skype-fill"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href="" data-bs-title="Message"><i class="ri-mail-open-line"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- card-body -->
            </div>
            <!-- card -->
        </div> <!-- end col -->
        @endforeach


        
    @if($dataSekolah->pemain->isEmpty())
    <div class="col-md-12">
        <p>Tidak ada pemain terkait untuk sekolah ini.</p>
    </div>
@endif


    <div class="row">
        <div class="col-sm-12">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                    <li class="page-item"><a href="#" aria-label="Previous" class="page-link"> <i class="ri-arrow-left-s-line lh-sm"></i></a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="active page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="disabled page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" aria-label="Next" class="page-link"> <i class="ri-arrow-right-s-line lh-sm"></i></a></li>
                </ul>
            </nav>
        </div>
    </div>
</div> <!-- container -->
@endsection