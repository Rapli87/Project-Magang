{{-- @extends('layouts.vertical', ['title' => 'Data Sekolah', 'mode' => $mode ?? '', 'demo' => $demo ?? '']) --}}

{{-- @section('css')
    @vite(['node_modules/admin-resources/rwd-table/rwd-table.min.css'])
@endsection --}}
@extends('layouts.admin')
@section('content')
    {{-- @include('layouts.shared/page-title', ['page_title' => 'Data Sekolah', 'sub_title' => 'Tables']) --}}
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Data Sekolah</a>
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Data Sekolah</h4>
                        </div>
                    </div>
                </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            {{-- <a type="button" class="btn btn-success"  href="{{route('CetakDataSekolah')}}"  target="_blank">Print Pdf</a>
                            <a type="button" class="btn btn-warning" href="{{route('DataSekolahExport')}}" >Unduh excel</a> --}}


                                <a class="btn btn-primary" style="margin-bottom: 10px;">
                                    <i class="ri-add-circle-line text-ligth"> Add Data </i>
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
                                            <th data-priority="1">Nama</th>
                                            <th data-priority="3">Telepon</th>
                                            <th data-priority="1">Fax</th>
                                            <th data-priority="3">Email</th>
                                            <th data-priority="3">Password</th>
                                            <th data-priority="6">Tanggal</th>
                                            <th data-priority="6">Logo</th>
                                            <th data-priority="6">Action</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($DataSekolah->sortBy('id') as $Data)
                                            <tr>

                                                <th><span class="co-name">{{ $Data->id }}</span></th>
                                                <td>{{ $Data->Nama_Sekolah }}</td>
                                                <td>{{ $Data->Telp }}</td>
                                                <td>{{ $Data->Fax }}</td>
                                                <td>{{ $Data->Email }}</td>
                                                <td>{{ $Data->password }}</td>
                                                <td>{{ $Data->Tanggal_update }}</td>
                                                {{-- <td>{{ $Data->Logo }}</td> --}}
                                                <td>
                                                    {{-- <img src="{{ url('frontend/images/upcoming/LogoSekolah/'.$Data->Logo) }}" alt="" width="100px"> --}}

                                                    <img src="{{ url('frontend/images/upcoming/LogoSekolah/SMA NU 1 GRESIK.jpg') }}" alt="" width="80px">


                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-outline-success dropdown-toggle" type="button"
                                                            id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            Action
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="{{ route('Data-Sekolah.show', ['id' => $Data->id]) }}">Show</a>
                                                            <a class="dropdown-item" href="{{ route('Data-Sekolah.delete', ['id' => $Data->id]) }}">Hapus</a>
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
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form id="editForm">
            @csrf
            @method('PUT')
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Data Sekolah</h5>
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


@section('script')
{{-- <script>
    document.addEventListener('DOMContentLoaded', function (){
        const editButtons = document.querySelectorAll('.edit-btn');
        editButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                const idsekolah = button.getAttribute('data-id');
                populateEditForm(idsekolah); // Panggil fungsi ini dengan ID sekolah yang dipilih
                $('#exampleModal').modal('show');
            });
        });    
         } );
        

        function populateEditForm(id) {
    // Gunakan AJAX atau cara lainnya untuk mendapatkan data sekolah berdasarkan ID
    // Lalu isi nilai input pada form modal dengan data sekolah yang didapatkan
    // Contoh AJAX:
    $.ajax({
        url: '/DataSekolah/show/' + id,
        method: 'GET',
        success: function (data) {
            document.getElementById('id').value = data.id;
            document.getElementById('Nama_Sekolah').value = data.Nama_Sekolah;
            document.getElementById('Telp').value = data.Telp;
            document.getElementById('Fax').value = data.Fax;
            document.getElementById('Email').value = data.Email;
            document.getElementById('password').value = data.password;
            document.getElementById('Tanggal_update').value = data.Tanggal_update;
            document.getElementById('Logo').value = data.Logo;


        },
        error: function (xhr, status, error) {
            console.log('Terjadi Kesalahan:', error);
        }
    });
}

var id = window.location.pathname.split('/').pop();
if (!isNaN(id) && id !== '') {
    // Lakukan axios PUT request dengan ID yang diambil dari URL
    axios.put('/TambahDataUser/update/' + id, formData)
        .then(function(response) {
            // Penanganan respon sukses
            console.log(response.data);
        })
        .catch(function(error) {
            // Penanganan kesalahan
            console.error(error);
        });
}


document.getElementById('submitFormBtn').addEventListener('click', function (event) {
    event.preventDefault();

    // Dapatkan ID dari input tersembunyi
    const id = document.getElementById('id').value;

    // Dapatkan data formulir
    const formData = new FormData(document.getElementById('editForm'));

    // Tambahkan ID ke dalam FormData
    formData.append('id', id);

    const url = '{{ route("DataSekolah.update", ":id") }}'.replace(':id', id);


    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: url,
        method: 'PUT',
        data: formData,
        processData: false,
        contentType: false,
       
        success: function (response) {
            console.log('Data berhasil diubah:', response);
            // Tampilkan alert success
            Swal.fire({
                icon: 'success',
                title: 'Data berhasil diubah',
                showConfirmButton: false,
                timer: 1500
            }).then(function () {
                // Reload halaman
                window.location.reload();
            });
        },
        error: function (xhr, status, error) {
            console.log('Terjadi Kesalahan:', error);
        }
    });

    // Tutup modal setelah menyimpan data
    $('#exampleModal').modal('hide');
});



document.getElementById('printPdfBtn').addEventListener('click', function () {
    // Lakukan AJAX untuk memanggil fungsi pdfsekolah
    $.ajax({
        url: '/DataSekolah/pdfsekolah',
        method: 'GET',
        success: function (response) {
            console.log('PDF berhasil dicetak');
            // Buka jendela unduhan PDF menggunakan URL yang diberikan oleh server
            window.open(response.url, '_blank');
        },
        error: function (xhr, status, error) {
            console.log('Terjadi Kesalahan:', error);
        }
    });
});
$(document).ready(function() {
    $('#downloadExcelBtn').click(function() {
        // Ganti URL dengan endpoint yang sesuai untuk mendapatkan data Excel dari server
        var excelUrl = '/DataSekolah/excelexport';

        $.ajax({
            url: excelUrl,
            method: 'GET',
            xhrFields: {
                responseType: 'blob'
            },
            success: function(data) {
                var a = document.createElement('a');
                var url = window.URL.createObjectURL(data);
                a.href = url;
                // Ganti nama file Excel yang di-download
                a.download = 'data_sekolah.xlsx';
                document.body.append(a);
                a.click();
                window.URL.revokeObjectURL(url);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
});


document.addEventListener('DOMContentLoaded', function () {
    const viewButtons = document.querySelectorAll('.view-btn');
    viewButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            const idSekolah = button.getAttribute('data-id');
            loadAndShowDetail(idSekolah);
        });
    });

    function loadAndShowDetail(id) {
    $.ajax({
        url: '/DataSekolah/DetailDataSekolah/' + id,
        method: 'GET',
        success: function (dataSekolah) {
            // Mengisi tabel dengan dataSekolah
            $('#Nama_Sekolah').text(dataSekolah.Nama_Sekolah);
            $('#Telp').text(dataSekolah.Telp);
            $('#Fax').text(dataSekolah.Fax);
            $('#Email').text(dataSekolah.Email);
            $('#password').text(dataSekolah.password);
            $('#Tanggal_update').text(dataSekolah.Tanggal_update);
            $('#Logo').text(dataSekolah.Logo);

            // Mengganti nilai data-id pada elemen <a> dengan ID dari dataSekolah
            const viewButton = document.querySelector('.btn.btn-secondary.dropdown-item');
            viewButton.setAttribute('data-id', id);

            // Tampilkan modal setelah mengisi tabel
            $('#detailModal').modal('show');
        },
        error: function (xhr, status, error) {
            console.log('Terjadi Kesalahan:', error);
        }
    });
}
}); --}}





</script>


    {{-- @vite(['resources/js/pages/responsive-table.init.js']) --}}
@endsection
