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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Data Jadwal</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Detail Data Jadwal</a></li>
                            </ol>
                        </div>
                        {{-- <h4 class="page-title">Welcome {{ Auth::user()->name }}!</h4> --}}
                        <h4 class="page-title">Welcome Admin!</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    {{-- <a type="button" class="btn btn-success"  href="{{route('CetakDataSekolah')}}"  target="_blank">Print Pdf</a>
                                    <a type="button" class="btn btn-warning" href="{{route('DataSekolahExport')}}" >Unduh excel</a> --}}
        
        
                                        <a  class="btn btn-primary" style="margin-bottom: 10px;">
                                            <i class="ri-add-circle-line text-ligth" data-bs-toggle="modal" data-bs-target="#exampleModal" > Add Data </i>
                                        </a>
        
                                        <br>
                                        {{-- <a type="button" class="btn btn-success"  href="{{route('Data-Sekolah.CetakDataSekolah')}}"  target="_blank">Print Pdf</a>
                                        <a type="button" class="btn btn-warning" href="" >Unduh excel</a> --}}
        
                                        <a type="button" style="margin-bottom: 5px;" class="btn btn-success btn-sm tooltips" href="" target="_blank">
                                            <i class="ri-file-pdf-fill me-1"></i>
                                        </a>
                                        <a type="button" style="margin-bottom: 5px;" class="btn btn-warning btn-sm tooltips" href="">
                                            <i class="ri-file-excel-fill me-1"></i> 
                                        </a>
            
                                </div>
                                
                               
                            </div>
                            <br>
                            
                            <div class="responsive-table-plugin">
                            
                                <div class="table-rep-plugin">
                                    <div class="table-responsive" data-pattern="priority-columns">
                                        <table id="tech-companies-1" class="table table-striped dt-responsive nowrap w-100"">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th data-priority="1">tanggal</th>
                                                    <th data-priority="3">mulai</th>
                                                    <th data-priority="1">Selesai</th>
                                                   <th data-priority="1">status</th>
                                                  
        
        
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($detailjadwal->sortBy('id') as $Data)
                                                    <tr>
        
                                                        <th><span class="co-name">{{ $Data->id }}</span></th>
                                                        <td>{{ $Data->tanggal }}</td>
                                                        <td>{{ $Data->mulai }}</td>
                                                        <td>{{ $Data->selesai }}</td>
                                                        <td>{{ $Data->status }}</td>
                                                        <td>{{ $Data->id_grub }}</td>
                                                       
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
            <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <form id="editForm">
                    @csrf
                    @method('PUT')
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tambah Jadwal</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                </div>
                                <div class="card-body">
                                       <input type="hidden" id="id" name="id">
                                        <div class="mb-9">
                                            <label class="form-label" for="Nama_Sekolah">Nama Sekolah</label>
                                            <input type="text" class="form-control" id="Nama_Sekolah"
                                                placeholder="Masukkan Nama Sekolah Anda" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="mb-9">
                                            <label class="form-label" for="Telp">Telepon</label>
                                            <input type="text" class="form-control" id="Telp"
                                                placeholder="Masukkan Nomer Telepon Anda"  required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="mb-9">
                                            <label class="form-label" for="Fax">Fax</label>
                                            <input type="text" class="form-control" id="Fax"
                                            placeholder="Masukkan Fax"  required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                           
                                        </div>
                                        <div class="mb-9">
                                            <label class="form-label" for="Email">Email</label>
                                            <input type="text" class="form-control" id="Email"
                                                placeholder="Masukkan Email Anda" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid city.
                                            </div>
                                        </div>
                                        <div class="mb-9">
                                            <label class="form-label" for="password">Password</label>
                                            <input type="text" class="form-control" id="password"
                                                placeholder="Masukkan password" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid password.
                                            </div>
                                        </div>
                                        <div class="mb-9">
                                            <label class="form-label" for="Tanggal_update">Tanggal</label>
                                            <input type="date" class="form-control" id="datepicker">
                                            <div class="invalid-feedback">
                                                Please provide a valid password.
                                            </div>
                                        </div>
                                      
                                        <div class="mb-9">
                                            <label class="form-label" for="Tanggal_update">Tanggal update</label>
                                            <input type="text" class="form-control" id="Tanggal_update"
                                             required>
                                            <div class="invalid-feedback">
                                                Please provide a valid password.
                                            </div>
                                        </div>
                                        <div class="mb-9">
                                            <label class="form-label" for="Logo">Logo</label>
                                            <input type="text" class="form-control" id="Logo"
                                                placeholder="Logo" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid logo.
                                            </div>
                                        </div>
                                        <div class="mb-9">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="invalidCheck"
                                                    required>
                                                <label class="form-check-label form-label" for="invalidCheck">Agree to
                                                    terms and conditions</label>
                                                <div class="invalid-feedback">
                                                    You must agree before submitting.
                                                </div>
                                            </div>
                                        </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                
                
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" id="submitFormBtn">Save changes</button>
                </div>
            </form>
              </div>
            </div>
          </div>
        
            <!-- end row -->

@endsection

<script>
   var datepicker = new bootstrap.Datepicker(document.getElementById('datepicker'), {
        format: 'dd/mm/yyyy', // Format tanggal
        todayBtn: true, // Tombol "Today" untuk memilih tanggal hari ini
        clearBtn: true, // Tombol "Clear" untuk menghapus tanggal yang dipilih
        autoclose: true, // Menutup datepicker setelah memilih tanggal
        todayHighlight: true // Membuat hari ini disorot
    });
</script>