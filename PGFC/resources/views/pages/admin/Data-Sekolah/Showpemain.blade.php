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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Detail Data Pemain</a></li>
                            </ol>
                        </div>
                        {{-- <h4 class="page-title">Welcome {{ Auth::user()->name }}!</h4> --}}
                        <h4 class="page-title">Welcome Admin!</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->


    <div class="col-md-12">
        <div class="card">
            <div class="card-body mx-auto">
                <div class="d-flex align-items-start justify-content-between">
                    <div class="d-flex">
                        <a class="me-3" href="#">
                            {{-- <img class="avatar-md rounded-circle bx-s"
                                src="{{ url('frontend/images/upcoming/LogoSekolah/SMA NU 1 GRESIK.jpg') }}" alt="" width="100px"" alt=""> --}}
                        </a>
                        <div class="info">
                           
                           

        <div class="row">  
            <div class="col-xl-12">
                <div class="card-x1-12">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div class="">
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

                    <br>
                        <div>
                            <h4 class="header-title">{{ $pemain->name }}</h4>
                            <p class="text-muted mb-0">{{$pemain->Kelas}}<code>{{$pemain->Tanggal_lahir}}</code></p>


                            </h4>
                            
                        </div>
                    </div>
                    
                    
                    <div class="card-body">
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button fw-medium" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                            PJ Sekolah #1
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="header-title">Pj Sekolah</h4>
                                                        <p class="text-muted mb-0">
                                                            Tabel Berisi Data Pj Sekolah
                                                        </p>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-striped mb-0">
                                                                <thead>
                                                                <tr>
                                                                
                                                                    <th class="text-center">
                                                                        Nama Keapala Sekolah<br>
                                                                        
                                                                    </th>
                                                                    <th class="text-center">
                                                                        Alamat Kepala Sekolah<br>
                                                                        
                                                                    </th>
                                                                    <th class="text-center">
                                                                        Telp<br>
                                                                        
                                                                    </th>
                                                                    <th class="text-center">
                                                                        Hp<br>
                                                                        
                                                                    </th>
                                                                    <th class="text-center">
                                                                        Email<br>
                                                                
                                                                    </th>

                                                                    <th class="text-center ">
                                                                        File Recomendasi<br>
                                                                
                                                                    </th>
                                                                   
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>{{ $pemain->pjsekolah->nama_kepala_sekolah }}</td>
                                                                        <td>{{ $pemain->pjsekolah->alamat_kepala_sekolah }}</td>
                                                                        <td>{{ $pemain->pjsekolah->telp }}</td>
                                                                        <td>{{ $pemain->pjsekolah->hp }}</td>
                                                                        <td>{{ $pemain->pjsekolah->email }}</td>
                                                                        
                                                                        <td class="text-black bold">{{ $pemain->pjsekolah->filerekomendasi }}</td>

                                                                    </tr>

                                                            
                                                                </tbody>
                                                            </table>
                                                        </div> <!-- end table-responsive-->
                                    
                                                    </div> <!-- end card-body-->
                                                </div> <!-- end card-->
                                            </div> <!-- end col-->
                                        </div>
                                        <!-- end row -->
                                    
                                
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                    <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseTwo">
                                        PJ Tim #2
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingTwo">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="header-title">Pj Tim</h4>
                                                        <p class="text-muted mb-0">
                                                            Tabel Berisi Data Pj Tim
                                                        </p>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-striped mb-0">
                                                                <thead>
                                                                <tr>
                                                                
                                                                    <th class="text-center">
                                                                        Nama<br>
                                                                        
                                                                    </th>
                                                                    <th class="text-center">
                                                                        Jabatan<br>
                                                                        
                                                                    </th>
                                                                    <th class="text-center">
                                                                        Nip<br>
                                                                        
                                                                    </th>
                                                                    <th class="text-center">
                                                                        Hp<br>
                                                                        
                                                                    </th>
                                                                    <th class="text-center">
                                                                        Email<br>
                                                                
                                                                    </th>

                                                                    <th class="text-center">
                                                                        Foto<br>
                                                                
                                                                    </th>

                                                                    <th class="text-center">
                                                                        Ktp<br>
                                                                
                                                                    </th>
                                                                   
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                 
                                                                    <td>{{$pemain->pjtim->nama}}</td>
                                                                    <td>{{$pemain->pjtim->jabatan}}</td>
                                                                    <td>{{$pemain->pjtim->nip}}</td>
                                                                    <td>{{$pemain->pjtim->hp}}</td>
                                                                    <td>{{$pemain->pjtim->email}}</td>
                                                                    <td>{{$pemain->pjtim->foto}}</td>
                                                                    <td>{{$pemain->pjtim->ktp}}</td>
                                                                </tr>

                                                            
                                                                </tbody>
                                                            </table>
                                                        </div> <!-- end table-responsive-->
                                    
                                                    </div> <!-- end card-body-->
                                                </div> <!-- end card-->
                                            </div> <!-- end col-->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                    <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseThree">
                                        Pelatih #3
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingThree">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="header-title">Pj Pelatih</h4>
                                                        <p class="text-muted mb-0">
                                                            Tabel Berisi Data Pj Pelatih
                                                        </p>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-striped mb-0">
                                                                <thead>
                                                                <tr>
                                                                
                                                                    <th class="text-center">
                                                                        Nama<br>
                                                                        
                                                                    </th>
                                                                    <th class="text-center">
                                                                        Hp<br>
                                                                        
                                                                    </th>
                                                                    <th class="text-center">
                                                                        Alamat<br>
                                                                        
                                                                    </th>
                                                                    <th class="text-center">
                                                                        Foto<br>
                                                                        
                                                                    </th>
                                                                    <th class="text-center">
                                                                        Ktp<br>
                                                                
                                                                    </th>

                                                                   
                                                                   
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                 
                                                                    <td>{{$pemain->datapelatih->nama}}</td>
                                                                    <td>{{$pemain->datapelatih->hp}}</td>
                                                                    <td>{{$pemain->datapelatih->alamat}}</td>
                                                                    <td>{{$pemain->datapelatih->foto}}</td>
                                                                    <td>{{$pemain->datapelatih->ktp}}</td>
                                                                  
                                                                  
                                                                </tr>

                                                            
                                                                </tbody>
                                                            </table>
                                                        </div> <!-- end table-responsive-->
                                    
                                                    </div> <!-- end card-body-->
                                                </div> <!-- end card-->
                                            </div> <!-- end col-->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingfour">
                                    <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapsefour" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapsefour">
                                        Data Official #4
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapsefour" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingfour">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="header-title">Data Official</h4>
                                                        <p class="text-muted mb-0">
                                                            Tabel Berisi Data Official
                                                        </p>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-striped mb-0">
                                                                <thead>
                                                                <tr>
                                                                
                                                                    <th class="text-center">
                                                                        Nama <br>
                                                                        
                                                                    </th>
                                                                    <th class="text-center">
                                                                        Hp<br>
                                                                        
                                                                    </th>
                                                                    <th class="text-center">
                                                                        Alamat<br>
                                                                        
                                                                    </th>
                                                                    <th class="text-center">
                                                                        Foto<br>
                                                                        
                                                                    </th>
                                                                    <th class="text-center">
                                                                        Ktp<br>
                                                                
                                                                    </th>

                                                                   
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                 
                                                                    <td>{{$pemain->dataofficial->nama}}</td>
                                                                    <td>{{$pemain->dataofficial->hp}}</td>
                                                                    <td>{{$pemain->dataofficial->alamat}}</td>
                                                                    <td>{{$pemain->dataofficial->foto}}</td>
                                                                    <td>{{$pemain->dataofficial->ktp}}</td>
                                                                   
                                                                </tr>

                                                            
                                                                </tbody>
                                                            </table>
                                                        </div> <!-- end table-responsive-->
                                    
                                                    </div> <!-- end card-body-->
                                                </div> <!-- end card-->
                                            </div> <!-- end col-->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div>
                            </div>

                            
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingfour">
                                    <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapsefour" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapsefour">
                                        Data Manajer #5
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapsefour" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingfour">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="header-title">Data Manajer</h4>
                                                        <p class="text-muted mb-0">
                                                            Tabel Berisi Data Manajer
                                                        </p>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-striped mb-0">
                                                                <thead>
                                                                <tr>
                                                                
                                                                    <th class="text-center">
                                                                        Nama <br>
                                                                        
                                                                    </th>
                                                                    <th class="text-center">
                                                                        Hp<br>
                                                                        
                                                                    </th>
                                                                    <th class="text-center">
                                                                        Alamat<br>
                                                                        
                                                                    </th>
                                                                    <th class="text-center">
                                                                        Foto<br>
                                                                        
                                                                    </th>
                                                                    <th class="text-center">
                                                                        Ktp<br>
                                                                
                                                                    </th>

                                                                   
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                 
                                                                    <td>{{$pemain->datamanajer->nama}}</td>
                                                                    <td>{{$pemain->datamanajer->hp}}</td>

                                                                    <td>{{$pemain->datamanajer->alamat}}</td>
                                                                    <td>{{$pemain->datamanajer->foto}}</td>
                                                                    <td>{{$pemain->datamanajer->ktp}}</td>

                                                                </tr>

                                                            
                                                                </tbody>
                                                            </table>
                                                        </div> <!-- end table-responsive-->
                                    
                                                    </div> <!-- end card-body-->
                                                </div> <!-- end card-->
                                            </div> <!-- end col-->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div>
                            </div>

                            
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingfour">
                                    <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapsefour" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapsefour">
                                        Data Pj Supporter Siswa#6
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapsefour" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingfour">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="header-title">Data Pj Supporter Siswa</h4>
                                                        <p class="text-muted mb-0">
                                                            Tabel Berisi Data Pj Supporter Siswa
                                                        </p>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-striped mb-0">
                                                                <thead>
                                                                <tr>
                                                                
                                                                    <th class="text-center">
                                                                        Nama <br>
                                                                        
                                                                    </th>
                                                                    <th class="text-center">
                                                                        Hp<br>
                                                                        
                                                                    </th>
                                                                    <th class="text-center">
                                                                        Alamat<br>
                                                                        
                                                                    </th>
                                                                    <th class="text-center">
                                                                        Foto<br>
                                                                        
                                                                    </th>
                                                                    <th class="text-center">
                                                                        Ktp<br>
                                                                
                                                                    </th>

                                                                   
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                 
                                                                    <td>{{$pemain->datasupportersiswa->nama}}</td>
                                                                    <td>{{$pemain->datasupportersiswa->hp}}</td>
                                                                    <td>{{$pemain->datasupportersiswa->alamat}}</td>
                                                                    <td>{{$pemain->datasupportersiswa->foto}}</td>
                                                                    <td>{{$pemain->datasupportersiswa->ktp}}</td>
                                                                    
                                                                </tr>

                                                            
                                                                </tbody>
                                                            </table>
                                                        </div> <!-- end table-responsive-->
                                    
                                                    </div> <!-- end card-body-->
                                                </div> <!-- end card-->
                                            </div> <!-- end col-->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div>
                            </div>


                            
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingfour">
                                    <button class="accordion-button fw-medium collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapsefour" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapsefour">
                                        Data Pj Supporter Guru #7
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapsefour" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingfour">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="header-title">Data Pj Supporter Guru</h4>
                                                        <p class="text-muted mb-0">
                                                            Tabel Berisi Data Pj Supporter Guru
                                                        </p>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-striped mb-0">
                                                                <thead>
                                                                <tr>
                                                                
                                                                    <th class="text-center">
                                                                        Nama <br>
                                                                        
                                                                    </th>
                                                                    <th class="text-center">
                                                                        Hp<br>
                                                                        
                                                                    </th>
                                                                    <th class="text-center">
                                                                        Alamat<br>
                                                                        
                                                                    </th>
                                                                    <th class="text-center">
                                                                        Foto<br>
                                                                        
                                                                    </th>
                                                                    <th class="text-center">
                                                                        Ktp<br>
                                                                
                                                                    </th>

                                                                   
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                 
                                                                    <td>{{$pemain->datasupporterguru->nama}}</td>
                                                                    <td>{{$pemain->datasupporterguru->hp}}</td>
                                                                    <td>{{$pemain->datasupporterguru->alamat}}</td>
                                                                    <td>{{$pemain->datasupporterguru->foto}}</td>
                                                                    <td>{{$pemain->datasupporterguru->ktp}}</td>
                                                                
                                                                </tr>

                                                            
                                                                </tbody>
                                                            </table>
                                                        </div> <!-- end table-responsive-->
                                    
                                                    </div> <!-- end card-body-->
                                                </div> <!-- end card-->
                                            </div> <!-- end col-->
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div>
                            </div>
                        </div>
    
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->                        
    
        </div>
        <!-- end row-->
                     
                           
                      
</div> <!-- container -->
@endsection