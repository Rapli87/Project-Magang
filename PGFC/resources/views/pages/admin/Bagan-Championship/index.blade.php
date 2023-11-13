@extends('layouts.admin')
@section('content')

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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Bagan Championship</a>
                                </li>
                            </ol>
                        </div>
                        <h4 class="page-title">Bagan Championship</h4>
                    </div>
                </div>
            </div>
   
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">   
                    <div class="row">
                        <div class="col-md-6">
                   
                            <a type="button" class="btn btn-dark" href="{{route('Bagan-Championship.show')}}">Tabel Bagan</a>
                            {{-- <a class="dropdown-item" href="{{ route('Data-Sekolah.show', ['id' => $Data->id]) }}">Show</a> --}}
                        
                    </br>

                            <form class="d-flex">
                                <input class="form-control me-1 text-black" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-success" type="submit">Search</button>
                              </form>
                         


                        </div>
                       
                    </div>
                    <br>
                    <div class="text-center mb-4">
                        <a href="" class="btn btn-primary w-lg">16 Besar</a>
                    </div>
                    <div class="timeline" dir="ltr">
                        <article class="timeline-item alt">
                            <div class="text-end">
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <article class="timeline-item alt">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="timeline-box border-bottom">
                                                        <span class="arrow-alt"></span>
                                                        <h4 class="fs-16 fw-semibold text-center ">Group  A</h4>
                                                    </br>
                                                        <table class="table">
                                                            <thead class="table-dark ">
                                                                <tr>   
                                                                    <tr>
                                                                        <h4 class=" fs-16 fw-semibold text-center text-warning  "><Strong>2023-11-06</Strong></h4>
                                                                    </tr>
                                                                </tr>
                                                            </thead>
                                                        <br>
                                                            <tbody>
                                                           
                                                            
                                                                @foreach ($bagan->sortBy('grub') as $data)
                                                                @if ($data->grup == 'A') <!-- Ganti NamaGrup dengan nama grup yang Anda cari -->
                                                                    <tr>
                                                                        <td class="text-center"><a>{{$data->tim}}</a></td>
                                                                        {{-- <td class="text-center"><a>{{$data->tim}}</a></td>
                                                                        <td class="text-center"><a>{{$data->tim}}</a></td>
                                                                        <td class="text-center"><a>{{$data->tim}}</a></td> --}}
                                                                    </tr>
                                                                @endif
                                                            @endforeach
                                                            
                                                            </tbody>
                                                          </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <article class="timeline-item">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="timeline-box">
                                                        <span class="arrow"></span>
                                                        <h4 class="fs-16 fw-semibold text-center ">Group {{$data->grup = 'B'}}</h4>
                                                    </br>
                                                        <table class="table">
                                                            <thead class="table-dark ">
                                                                <tr>   
                                                                    <tr>
                                                                        <h4 class=" fs-16 fw-semibold text-center text-warning  "><Strong>2023-11-06</Strong></h4>
                                                                    </tr>
                                                                </tr>
                                                            </thead>
                                                        <br>
                                                            <tbody>
                                                             
                                                                @foreach ($bagan->sortBy('grub') as $data)
                                                                @if ($data->grup == 'B') <!-- Ganti NamaGrup dengan nama grup yang Anda cari -->
                                                                    <tr>
                                                                        <td class="text-center"><a>{{$data->tim}}</a></td>
                                                                        {{-- <td class="text-center"><a>{{$data->tim}}</a></td>
                                                                        <td class="text-center"><a>{{$data->tim}}</a></td>
                                                                        <td class="text-center"><a>{{$data->tim}}</a></td> --}}
                                                                    </tr>
                                                                @endif
                                                            @endforeach
                                                            </tbody>
                                                          </table>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>


                            
                        
                    </div>










                    <!-- end timeline -->

                    <div class="timeline" dir="ltr">
                        <article class="timeline-item alt">
                            <div class="text-end">
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <article class="timeline-item alt">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="timeline-box border-bottom">
                                                        <span class="arrow-alt"></span>
                                                        <h4 class="fs-16 fw-semibold text-center ">Group  {{$data->grup = 'C'}}</h4>
                                                    </br>
                                                        <table class="table">
                                                            <thead class="table-dark ">
                                                                <tr>   
                                                                    <tr>
                                                                        <h4 class=" fs-16 fw-semibold text-center text-warning  "><Strong>2023-10-25</Strong></h4>
                                                                    </tr>
                                                                </tr>
                                                            </thead>
                                                        <br>
                                                            <tbody>
                                                             
                                                                @foreach ($bagan->sortBy('grub') as $data)
                                                                @if ($data->grup == 'C') <!-- Ganti NamaGrup dengan nama grup yang Anda cari -->
                                                                    <tr>
                                                                        <td class="text-center"><a>{{$data->tim}}</a></td>
                                                                        {{-- <td class="text-center"><a>{{$data->tim}}</a></td>
                                                                        <td class="text-center"><a>{{$data->tim}}</a></td>
                                                                        <td class="text-center"><a>{{$data->tim}}</a></td> --}}
                                                                    </tr>
                                                                @endif
                                                            @endforeach
                                                            </tbody>
                                                          </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <article class="timeline-item">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="timeline-box">
                                                        <span class="arrow"></span>
                                                        <h4 class="fs-16 fw-semibold text-center ">Group  {{$data->grup = 'D'}}</h4>
                                                    </br>
                                                        <table class="table">
                                                            <thead class="table-dark ">
                                                                <tr>   
                                                                    <tr>
                                                                        <h4 class=" fs-16 fw-semibold text-center text-warning  "><Strong>2023-10-25</Strong></h4>
                                                                    </tr>
                                                                </tr>
                                                            </thead>
                                                        <br>
                                                            <tbody>
                                                               
                                                                @foreach ($bagan->sortBy('grub') as $data)
                                                                @if ($data->grup == 'D') <!-- Ganti NamaGrup dengan nama grup yang Anda cari -->
                                                                    <tr>
                                                                        <td class="text-center"><a>{{$data->tim}}</a></td>
                                                                        {{-- <td class="text-center"><a>{{$data->tim}}</a></td>
                                                                        <td class="text-center"><a>{{$data->tim}}</a></td>
                                                                        <td class="text-center"><a>{{$data->tim}}</a></td> --}}
                                                                    </tr>
                                                                @endif
                                                            @endforeach
                                                            </tbody>
                                                          </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>


                            
                        
                    </div>
                </div>
            </div>
            <!-- end card -->
        </div>
    </div>
    <!-- end row -->

    {{-- <div class="container">
        <div class="row">
    <div class="col-md-6 mx-center">
        <article class="timeline-item">
            <div class="timeline-desk">
                <div class="panel">
                    <div class="timeline-box">
                        <span class="arrow"></span>
                        <h4 class="fs-16 fw-semibold text-center ">Group {{$data->grup = 'A' & $data->grup = 'B' & $data->grup = 'C'& $data->grup = 'D'}}</h4>
                    </br>
                        <table class="table">
                            <thead class="table-dark ">
                                <tr>   
                                    <tr>
                                        <h4 class=" fs-16 fw-semibold text-center text-warning  "><Strong>Pemenang Grub A,B,C,D Dari 16 Besar</Strong></h4>
                                    </tr>
                                </tr>
                            </thead>
                        <br>
                            <tbody>
                             
                                @foreach ($bagan->sortBy('grub') as $data)
                                @if ($data->grup == 'A')  <!-- Ganti 'A' dengan grup yang ingin Anda tampilkan -->
                                    <tr>
                                        <td class="text-center"><a>{{$data->tim}}</a></td>
                                      
                                    </tr>
                                @endif
                            @endforeach

                            @foreach ($bagan->sortBy('grub') as $data)
                            @if ($data->grup == 'B')  <!-- Ganti 'A' dengan grup yang ingin Anda tampilkan -->
                                <tr>
                                    <td class="text-center"><a>{{$data->tim}}</a></td>
                                   
                                </tr>
                            @endif
                        @endforeach
                        @foreach ($bagan->sortBy('grub') as $data)
                        @if ($data->grup == 'C')  <!-- Ganti 'A' dengan grup yang ingin Anda tampilkan -->
                            <tr>
                                <td class="text-center"><a>{{$data->tim}}</a></td>
                              
                            </tr>
                        @endif
                    @endforeach
                    @foreach ($bagan->sortBy('grub') as $data)
                    @if ($data->grup == 'D')  <!-- Ganti 'A' dengan grup yang ingin Anda tampilkan -->
                        <tr>
                            <td class="text-center"><a>{{$data->tim}}</a></td>
                           
                        </tr>
                    @endif
                @endforeach
                            </tbody>
                          </table>
                        
                    </div>
                </div>
            </div>
        </article>
    </div>
</div>
</div>



 --}}

    
 <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">   
                <div class="row">
                    <div class="col-md-6">
                        {{-- <button type="button" class="btn btn-success"  id="" >Print Pdf</button>
                        <a type="button" class="btn btn-dark" href="{{ route('Bagan/DetailBagan', ['id' => $grup->id]) }}">Tabel Bagan</a> --}}


                    </div>
                   
                </div>
                <br>
                <div class="text-center mb-4">
                    <a href="" class="btn btn-primary w-lg">Pemenang Grub A B C D </a>
                </div>
                <div class="timeline" dir="ltr">
                    <article class="timeline-item alt">
                        <div class="text-end">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <article class="timeline-item alt">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="timeline-box border-bottom">
                                                    <span class="arrow-alt"></span>
                                                    <h4 class="fs-16 fw-semibold text-center ">Group A & B</h4>
                                                </br>
                                                    <table class="table">
                                                        <thead class="table-dark ">
                                                            <tr>   
                                                                <tr>
                                                                    <h4 class=" fs-16 fw-semibold text-center text-warning  "><Strong>2023-11-06</Strong></h4>
                                                                </tr>
                                                            </tr>
                                                        </thead>
                                                    <br>
                                                        <tbody>
                                                       
                                                        
                                                            @foreach ($bagan->sortBy('grub') as $data)
                                                            @if ($data->grup == 'A')  <!-- Ganti 'A' dengan grup yang ingin Anda tampilkan -->
                                                                <tr>
                                                                    <td class="text-center"><a>{{$data->tim}}</a></td>
                                                                  
                                                                </tr>
                                                            @endif
                                                        @endforeach
                            
                                                        @foreach ($bagan->sortBy('grub') as $data)
                                                        @if ($data->grup == 'B')  <!-- Ganti 'A' dengan grup yang ingin Anda tampilkan -->
                                                            <tr>
                                                                <td class="text-center"><a>{{$data->tim}}</a></td>
                                                               
                                                            </tr>
                                                        @endif
                                                    @endforeach

                                                        
                                                        </tbody>
                                                      </table>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                
                                <div class="col-md-6">
                                    <article class="timeline-item">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="timeline-box">
                                                    <span class="arrow"></span>
                                                    <h4 class="fs-16 fw-semibold text-center ">Group C & D </h4>
                                                </br>
                                                    <table class="table">
                                                        <thead class="table-dark ">
                                                            <tr>   
                                                                <tr>
                                                                    <h4 class=" fs-16 fw-semibold text-center text-warning  "><Strong>2023-10-25</Strong></h4>
                                                                </tr>
                                                            </tr>
                                                        </thead>
                                                    <br>
                                                        <tbody>
                                                         

                                                            @foreach ($bagan->sortBy('grub') as $data)
                                                            @if ($data->grup == 'C')  <!-- Ganti 'A' dengan grup yang ingin Anda tampilkan -->
                                                                <tr>
                                                                    <td class="text-center"><a>{{$data->tim}}</a></td>
                                                                  
                                                                </tr>
                                                            @endif
                                                        @endforeach
                                                        @foreach ($bagan->sortBy('grub') as $data)
                                                        @if ($data->grup == 'D')  <!-- Ganti 'A' dengan grup yang ingin Anda tampilkan -->
                                                            <tr>
                                                                <td class="text-center"><a>{{$data->tim}}</a></td>
                                                               
                                                            </tr>
                                                        @endif
                                                    @endforeach
                                                        </tbody>
                                                      </table>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>


                        
                    
                </div>





</div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">   
                    <div class="text-center mb-4">
                        <a href="" class="btn btn-primary w-lg">16 Besar</a>
                    </div>
                    <div class="timeline" dir="ltr">
                        <article class="timeline-item alt">
                            <div class="text-end">
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <article class="timeline-item alt">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="timeline-box border-bottom">
                                                        <span class="arrow-alt"></span>
                                                        <h4 class="fs-16 fw-semibold text-center ">Group  {{$data->grup = 'E'}}</h4>
                                                    </br>
                                                        <table class="table">
                                                            <thead class="table-dark ">
                                                                <tr>   
                                                                    <tr>
                                                                        <h4 class=" fs-16 fw-semibold text-center text-warning  "><Strong>2023-11-07</Strong></h4>
                                                                    </tr>
                                                                </tr>
                                                            </thead>
                                                        <br>
                                                            <tbody>
                                                               
                                                                @foreach ($bagan->sortBy('grub') as $data)
                                                                @if ($data->grup == 'E') <!-- Ganti NamaGrup dengan nama grup yang Anda cari -->
                                                                    <tr>
                                                                        <td class="text-center"><a>{{$data->tim}}</a></td>
                                                                        {{-- <td class="text-center"><a>{{$data->tim}}</a></td>
                                                                        <td class="text-center"><a>{{$data->tim}}</a></td>
                                                                        <td class="text-center"><a>{{$data->tim}}</a></td> --}}
                                                                    </tr>
                                                                @endif
                                                            @endforeach
                                                            </tbody>
                                                          </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <article class="timeline-item">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="timeline-box">
                                                        <span class="arrow"></span>
                                                        <h4 class="fs-16 fw-semibold text-center ">Group  {{$data->grup = 'F'}}</h4>
                                                    </br>
                                                        <table class="table">
                                                            <thead class="table-dark ">
                                                                <tr>   
                                                                    <tr>
                                                                        <h4 class=" fs-16 fw-semibold text-center text-warning  "><Strong>2023-11-07</Strong></h4>
                                                                    </tr>
                                                                </tr>
                                                            </thead>
                                                        <br>
                                                            <tbody>
                                                             
                                                                @foreach ($bagan->sortBy('grub') as $data)
                                                                @if ($data->grup == 'F') <!-- Ganti NamaGrup dengan nama grup yang Anda cari -->
                                                                    <tr>
                                                                        <td class="text-center"><a>{{$data->tim}}</a></td>
                                                                        {{-- <td class="text-center"><a>{{$data->tim}}</a></td>
                                                                        <td class="text-center"><a>{{$data->tim}}</a></td>
                                                                        <td class="text-center"><a>{{$data->tim}}</a></td> --}}
                                                                    </tr>
                                                                @endif
                                                            @endforeach
                                                            </tbody>
                                                          </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>


                            
                        
                    </div>



                    
                    <!-- end timeline -->

                    <div class="timeline" dir="ltr">
                        <article class="timeline-item alt">
                            <div class="text-end">
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <article class="timeline-item alt">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="timeline-box border-bottom">
                                                        <span class="arrow-alt"></span>
                                                        <h4 class="fs-16 fw-semibold text-center ">Group  {{$data->grup = 'G'}}</h4>
                                                    </br>
                                                        <table class="table">
                                                            <thead class="table-dark ">
                                                                <tr>   
                                                                    <tr>
                                                                        <h4 class=" fs-16 fw-semibold text-center text-warning  "><Strong>2023-11-05</Strong></h4>
                                                                    </tr>
                                                                </tr>
                                                            </thead>
                                                        <br>
                                                            <tbody>
                                                               
                                                                @foreach ($bagan->sortBy('grub') as $data)
                                                                @if ($data->grup == 'G') <!-- Ganti NamaGrup dengan nama grup yang Anda cari -->
                                                                    <tr>
                                                                        <td class="text-center"><a>{{$data->tim}}</a></td>
                                                                        {{-- <td class="text-center"><a>{{$data->tim}}</a></td>
                                                                        <td class="text-center"><a>{{$data->tim}}</a></td>
                                                                        <td class="text-center"><a>{{$data->tim}}</a></td> --}}
                                                                    </tr>
                                                                @endif
                                                            @endforeach
                                                            </tbody>
                                                          </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <article class="timeline-item">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="timeline-box">
                                                        <span class="arrow"></span>
                                                        <h4 class="fs-16 fw-semibold text-center ">Group  {{$data->grup = 'H'}}</h4>
                                                    </br>
                                                        <table class="table">
                                                            <thead class="table-dark ">
                                                                <tr>   
                                                                    <tr>
                                                                        <h4 class=" fs-16 fw-semibold text-center text-warning  "><Strong>2023-11-05</Strong></h4>
                                                                    </tr>
                                                                </tr>
                                                            </thead>
                                                        <br>
                                                            <tbody>
                                                            
                                                                @foreach ($bagan->sortBy('grub') as $data)
                                                                @if ($data->grup == 'H') <!-- Ganti NamaGrup dengan nama grup yang Anda cari -->
                                                                    <tr>
                                                                        <td class="text-center"><a>{{$data->tim}}</a></td>
                                                                        {{-- <td class="text-center"><a>{{$data->tim}}</a></td>
                                                                        <td class="text-center"><a>{{$data->tim}}</a></td>
                                                                        <td class="text-center"><a>{{$data->tim}}</a></td> --}}
                                                                    </tr>
                                                                @endif
                                                            @endforeach
                                                            </tbody>
                                                          </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>


                            
                        
                    </div>
                </div>
            </div>
            <!-- end card -->
        </div>
    </div>
    <!-- end row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">   
                    <div class="row">
                        <div class="col-md-6">
                            {{-- <button type="button" class="btn btn-success"  id="" >Print Pdf</button>
                            <a type="button" class="btn btn-dark" href="{{ route('Bagan/DetailBagan', ['id' => $grup->id]) }}">Tabel Bagan</a> --}}
    
    
                        </div>
                       
                    </div>
                    <br>
                    <div class="text-center mb-4">
                        <a href="" class="btn btn-primary w-lg">Pemenang Grub E F G H </a>
                    </div>
                    <div class="timeline" dir="ltr">
                        <article class="timeline-item alt">
                            <div class="text-end">
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <article class="timeline-item alt">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="timeline-box border-bottom">
                                                        <span class="arrow-alt"></span>
                                                        <h4 class="fs-16 fw-semibold text-center ">Group E & F</h4>
                                                    </br>
                                                        <table class="table">
                                                            <thead class="table-dark ">
                                                                <tr>   
                                                                    <tr>
                                                                        <h4 class=" fs-16 fw-semibold text-center text-warning  "><Strong>2023-11-07</Strong></h4>
                                                                    </tr>
                                                                </tr>
                                                            </thead>
                                                        <br>
                                                            <tbody>
                                                           
                                                            
                                                                @foreach ($bagan->sortBy('grub') as $data)
                                                                @if ($data->grup == 'E')  <!-- Ganti 'A' dengan grup yang ingin Anda tampilkan -->
                                                                    <tr>
                                                                        <td class="text-center"><a>{{$data->tim}}</a></td>
                                                                      
                                                                    </tr>
                                                                @endif
                                                            @endforeach
                                
                                                            @foreach ($bagan->sortBy('grub') as $data)
                                                            @if ($data->grup == 'F')  <!-- Ganti 'A' dengan grup yang ingin Anda tampilkan -->
                                                                <tr>
                                                                    <td class="text-center"><a>{{$data->tim}}</a></td>
                                                                   
                                                                </tr>
                                                            @endif
                                                        @endforeach
    
                                                            
                                                            </tbody>
                                                          </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <article class="timeline-item">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="timeline-box">
                                                        <span class="arrow"></span>
                                                        <h4 class="fs-16 fw-semibold text-center ">Group G & H</h4>
                                                    </br>
                                                        <table class="table">
                                                            <thead class="table-dark ">
                                                                <tr>   
                                                                    <tr>
                                                                        <h4 class=" fs-16 fw-semibold text-center text-warning  "><Strong>2023-11-05</Strong></h4>
                                                                    </tr>
                                                                </tr>
                                                            </thead>
                                                        <br>
                                                            <tbody>
                                                             
    
                                                                @foreach ($bagan->sortBy('grub') as $data)
                                                                @if ($data->grup == 'G')  <!-- Ganti 'A' dengan grup yang ingin Anda tampilkan -->
                                                                    <tr>
                                                                        <td class="text-center"><a>{{$data->tim}}</a></td>
                                                                      
                                                                    </tr>
                                                                @endif
                                                            @endforeach
                                                            @foreach ($bagan->sortBy('grub') as $data)
                                                            @if ($data->grup == 'H')  <!-- Ganti 'A' dengan grup yang ingin Anda tampilkan -->
                                                                <tr>
                                                                    <td class="text-center"><a>{{$data->tim}}</a></td>
                                                                   
                                                                </tr>
                                                            @endif
                                                        @endforeach
                                                            </tbody>
                                                          </table>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
    


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">   
                    <div class="text-center mb-4">
                        <a href="" class="btn btn-primary w-lg">Perempat Final</a>
                    </div>
                    <div class="timeline" dir="ltr">
                        <article class="timeline-item alt">
                            <div class="text-end">
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <article class="timeline-item alt">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="timeline-box border-bottom">
                                                        <span class="arrow-alt"></span>
                                                        {{-- <h4 class="fs-16 fw-semibold text-center ">Group  A</h4> --}}
                                                    </br>
                                                        <table class="table">
                                                            <thead class="table-dark ">
                                                                <tr>   
                                                                    <tr>
                                                                        <h4 class=" fs-16 fw-semibold text-center text-warning  "><Strong>2023-11-08</Strong></h4>
                                                                    </tr>
                                                                </tr>
                                                            </thead>
                                                        <br>
                                                            <tbody>
                                                                <tr>
                                                                    {{-- <td class="text-center">Sma 1 Gresik</td>
                                                                    <td class="text-center">Sma 1 Surabaya</td>
                                                                    <td class="text-center">Smk 1 Gresik</td>
                                                                    <td class="text-center">Smk 1 Surabaya</td> --}}
                                                                    @foreach ($bagan->where('grup', 'A')->sortBy('grub')->take(2) as $data)
                                                                    <tr>
                                                                        <td class="text-center"><a>{{$data->tim}}</a></td>
                                                                    </tr>
                                                                @endforeach
                                                                @foreach ($bagan->where('grup', 'B')->sortBy('grub')->take(2) as $data)
                                                                <tr>
                                                                    <td class="text-center"><a>{{$data->tim}}</a></td>
                                                                </tr>
                                                            @endforeach
                                                                   
                                                                </tr>
                                                            </tbody>
                                                          </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <article class="timeline-item">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="timeline-box">
                                                        <span class="arrow"></span>
                                                        {{-- <h4 class="fs-16 fw-semibold text-center ">Group A</h4> --}}
                                                    </br>
                                                        <table class="table">
                                                            <thead class="table-dark ">
                                                                <tr>   
                                                                    <tr>
                                                                        <h4 class=" fs-16 fw-semibold text-center text-warning  "><Strong>2023-11-09</Strong></h4>
                                                                    </tr>
                                                                </tr>
                                                            </thead>
                                                        <br>
                                                            <tbody>
                                                                <tr>
                                                                    @foreach ($bagan->where('grup', 'C')->sortBy('grub')->take(2) as $data)
                                                                    <tr>
                                                                        <td class="text-center"><a>{{$data->tim}}</a></td>
                                                                    </tr>
                                                                @endforeach
                                                                @foreach ($bagan->where('grup', 'D')->sortBy('grub')->take(2) as $data)
                                                                <tr>
                                                                    <td class="text-center"><a>{{$data->tim}}</a></td>
                                                                </tr>
                                                            @endforeach
                                                                   
                                                                </tr>
                                                            </tbody>
                                                          </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>


                            
                        
                    </div>



                    
                    <!-- end timeline -->

                            
                        
                    </div>
                </div>
            </div>
            <!-- end card -->
        </div>
    </div>


    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">   
                    <div class="text-center mb-4">
                        <a href="" class="btn btn-primary w-lg">Semi Final</a>
                    </div>
                    <div class="timeline" dir="ltr">
                        <article class="timeline-item alt">
                            <div class="text-end">
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <article class="timeline-item alt">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="timeline-box border-bottom">
                                                        <span class="arrow-alt"></span>
{{-- 
                                                        <h4 class="fs-16 fw-semibold text-center ">Group A</h4> --}}
                                                    </br>
                                                        <table class="table">
                                                            <thead class="table-dark ">
                                                                <tr>   
                                                                    <tr>
                                                                        <h4 class=" fs-16 fw-semibold text-center text-warning  "><Strong>2023-11-10</Strong></h4>
                                                                    </tr>
                                                                </tr>
                                                            </thead>
                                                        <br>
                                                            <tbody>
                                                                <tr>
                                                                    @foreach ($bagan->where('grup', 'E')->sortBy('grub')->take(2) as $data)
                                                                    <tr>
                                                                        <td class="text-center"><a>{{$data->tim}}</a></td>
                                                                    </tr>
                                                                @endforeach
                                                                @foreach ($bagan->where('grup', 'F')->sortBy('grub')->take(2) as $data)
                                                                <tr>
                                                                    <td class="text-center"><a>{{$data->tim}}</a></td>
                                                                </tr>
                                                            @endforeach
                                                                   
                                                                   
                                                                </tr>
                                                            </tbody>
                                                          </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <article class="timeline-item">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="timeline-box">
                                                        <span class="arrow"></span>
                                                        {{-- <h4 class="fs-16 fw-semibold text-center ">Group A</h4> --}}
                                                    </br>
                                                        <table class="table">
                                                            <thead class="table-dark ">
                                                                <tr>   
                                                                    <tr>
                                                                        <h4 class=" fs-16 fw-semibold text-center text-warning  "><Strong>2023-11-11</Strong></h4>
                                                                    </tr>
                                                                </tr>
                                                            </thead>
                                                        <br>
                                                            <tbody>
                                                                <tr>
                                                                    @foreach ($bagan->where('grup', 'G')->sortBy('grub')->take(2) as $data)
                                                                    <tr>
                                                                        <td class="text-center"><a>{{$data->tim}}</a></td>
                                                                    </tr>
                                                                @endforeach
                                                                @foreach ($bagan->where('grup', 'H')->sortBy('grub')->take(2) as $data)
                                                                <tr>
                                                                    <td class="text-center"><a>{{$data->tim}}</a></td>
                                                                </tr>
                                                            @endforeach
                                                                   
                                                                </tr>
                                                            </tbody>
                                                          </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>


                            
                        
                    </div>



                    
                    <!-- end timeline -->

                            
                        
                    </div>
                </div>
            </div>
            <!-- end card -->
        </div>
    </div>



    
                    
                    <!-- end timeline -->

                            
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">   
                    <div class="text-center mb-4">
                        <a href="" class="btn btn-primary w-lg">Perebutan Juara 3</a>
                    </div>
                    <div class="timeline" dir="ltr">
                        <article class="timeline-item alt">
                            <div class="text-end">
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <article class="timeline-item alt">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="timeline-box border-bottom">
                                                        <span class="arrow-alt"></span>
{{-- 
                                                        <h4 class="fs-16 fw-semibold text-center ">Group A</h4> --}}
                                                    </br>
                                                        <table class="table">
                                                            <thead class="table-dark ">
                                                                <tr>   
                                                                    <tr>
                                                                        <h4 class=" fs-16 fw-semibold text-center text-warning  "><Strong>2023-11-11</Strong></h4>
                                                                    </tr>
                                                                </tr>
                                                            </thead>
                                                        <br>
                                                            <tbody>
                                                                <tr>
                                                                    @foreach ($bagan->where('grup', 'E')->sortBy('grub')->take(1) as $data)
                                                                    <tr>
                                                                        <td class="text-center"><a>{{$data->tim}}</a></td>
                                                                    </tr>
                                                                @endforeach
                                                                @foreach ($bagan->where('grup', 'F')->sortBy('grub')->take(1) as $data)
                                                                <tr>
                                                                    <td class="text-center"><a>{{$data->tim}}</a></td>
                                                                </tr>
                                                            @endforeach
                                                                   
                                                                   
                                                                </tr>
                                                            </tbody>
                                                          </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <article class="timeline-item">
                                            <div class="timeline-desk">
                                                <div class="panel">
                                                    <div class="timeline-box">
                                                        <span class="arrow"></span>
                                                        {{-- <h4 class="fs-16 fw-semibold text-center ">Group A</h4> --}}
                                                    </br>
                                                        <table class="table">
                                                            <thead class="table-dark ">
                                                                <tr>   
                                                                    <tr>
                                                                        <h4 class=" fs-16 fw-semibold text-center text-warning  "><Strong>2023-11-11</Strong></h4>
                                                                    </tr>
                                                                </tr>
                                                            </thead>
                                                        <br>
                                                            <tbody>
                                                                <tr>
                                                                    @foreach ($bagan->where('grup', 'G')->sortBy('grub')->take(1) as $data)
                                                                    <tr>
                                                                        <td class="text-center"><a>{{$data->tim}}</a></td>
                                                                    </tr>
                                                                @endforeach
                                                                @foreach ($bagan->where('grup', 'H')->sortBy('grub')->take(1) as $data)
                                                                <tr>
                                                                    <td class="text-center"><a>{{$data->tim}}</a></td>
                                                                </tr>
                                                            @endforeach
                                                                   
                                                                </tr>
                                                            </tbody>
                                                          </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>


                            
                        
                    </div>


                        
                    </div>
                </div>
            </div>
            <!-- end card -->
        </div>
    </div>
@endsection
