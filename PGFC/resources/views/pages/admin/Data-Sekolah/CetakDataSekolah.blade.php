@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="header-title">Cetak Data Sekolah</h4>
                <p class="text-muted mb-0">
                 Cetak Data Sekolah
                </p>
            </div>
            <div class="card-body">
                <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>Nama Sekolah</th>
                            <th>Telp</th>
                            <th>Fax</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Tanggal Update</th>
                            <th>Logo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dtCetakDataSekolah as $item)
                        <tr>
                            <td>{{ $item->Nama_Sekolah }}</td>
                            <td>{{ $item->Telp }}</td>
                            <td>{{ $item->Fax }}</td>
                            <td>{{ $item->Email }}</td>
                            <td>{{ $item->password }}</td>
                            <td>{{ $item->Tanggal_update }}</td>
                            <td>{{ $item->Logo }}</td>
                        </tr>
                    @endforeach
                    
                    </tbody>
                </table>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div> <!-- end row-->


@endsection

@section('script')
<script type="text/javascript">
window.print();
  </script>

@endsection
