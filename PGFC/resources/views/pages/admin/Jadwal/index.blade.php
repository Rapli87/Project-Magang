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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Jadwal</a>
                                </li>
                            </ol>
                        </div>
                        <h4 class="page-title">Jadwal</h4>
                    </div>
                </div>
            </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="timeline" dir="ltr">
                       

                        <div class="col-md-6">
                            {{-- <button type="button" class="btn btn-success"  href="{{url('Jadwal/export/excel')}}" >Export Excel</button>
                            <br>
                        </br>
                            <button type="button" class="btn btn-warning" >Print PDF</button> --}}


                        </div>
                        <a type="button" class="btn btn-dark" href="{{ route('Jadwal.show') }}">Detail Jadwal</a>



                        <article class="timeline-item alt">
                            <div class="text-end">

                                <div class="time-show first">
       


                                </div>
                            </div>
                            {{-- @foreach ($Jadwal->sortBy('grub') as $JadwalPertandingan)
                        </article>
                                <article class="timeline-item alt">
                                    <div class="timeline-desk">
                                        <div class="panel">
                                            <div class="timeline-box">
                                                <span class="arrow-alt"></span>
                                                <span class="timeline-icon"><i class="ri-record-circle-line"></i></span>
                                                <h4 class="fs-16 fw-semibold ">{{ $JadwalPertandingan->tanggal }}</h4>
                   
                                                <p class="timeline-date text-muted">
                                                    <small>{{ $JadwalPertandingan->mulai }}</small></p>
                                                <p>{{ $JadwalPertandingan->grub }}</p>
                                                <p>{{ $JadwalPertandingan->id_tim }}</p>
                                                <p>{{ $JadwalPertandingan->id_tim2 }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </article>

                               
                               
                        @endforeach --}}

                        @foreach ($Jadwal->sortBy('grub') as $JadwalPertandingan)
                        @if (!empty($JadwalPertandingan->grub) && json_decode($JadwalPertandingan->grub))
                            @foreach(json_decode($JadwalPertandingan->grub) as $team)
                                <article class="timeline-item">
                                    <div class="timeline-desk">
                                        <div class="panel">
                                            <div class="timeline-box">
                                                <span class="arrow"></span>
                                                <span class="timeline-icon bg-success"><i class="ri-record-circle-line"></i></span>
                                                <h4 class="fs-16 fw-semibold">{{ $JadwalPertandingan->tanggal }}</h4>
                                                <p class="timeline-date text-muted">
                                                    <small>{{ $JadwalPertandingan->mulai }}</small>
                                                </p>
                                       
                                                <p>{{ $team->tim  }}</p>
                                              
                                            
                                                
                                            </div>
                                        </div>
                                    </div>
                                </article>

                                
                            @endforeach
                        @else
                            <article class="timeline-item">
                                <div class="timeline-desk">
                                    <div class="panel">
                                        <div class="timeline-box">
                                            <span class="arrow"></span>
                                            <span class="timeline-icon bg-success"><i class="ri-record-circle-line"></i></span>
                                            <h4 class="fs-16 fw-semibold">{{ $JadwalPertandingan->tanggal }}</h4>
                                            <p class="timeline-date text-muted">
                                                <small>{{ $JadwalPertandingan->mulai }}</small>
                                            </p>
                                            <p>Tidak ada data tim</p>
                                            <p>{{ $JadwalPertandingan->tim }}</p>
                                            <p>{{ $JadwalPertandingan->tim }}</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endif
                    @endforeach
                    </div>
                    <!-- end timeline -->

                    <div class="timeline" dir="ltr">
                        <article class="timeline-item alt">
                            <div class="text-end">
                                <div class="time-show first">
                                   
                                </div>
                            </div>
                        </article>
                        @foreach ($Jadwal->sortBy('grub') as $JadwalPertandingan)
                        @if (!empty($JadwalPertandingan->grub) && json_decode($JadwalPertandingan->grub))
                            @foreach(json_decode($JadwalPertandingan->grub) as $team)
                            @if ($JadwalPertandingan->grub == 'A')
                                <article class="timeline-item">
                                    <div class="timeline-desk">
                                        <div class="panel">
                                            <div class="timeline-box">
                                                <span class="arrow"></span>
                                                <span class="timeline-icon bg-success"><i class="ri-record-circle-line"></i></span>
                                                <h4 class="fs-16 fw-semibold">{{ $JadwalPertandingan->tanggal }}</h4>
                                                <p class="timeline-date text-muted">
                                                    <small>{{ $JadwalPertandingan->mulai }}</small>
                                                </p>
                                       
                                                <p>{{ $team->tim  }}</p>
                                              
                                            
                                                
                                            </div>
                                        </div>
                                    </div>
                                </article>

                                @endif
                            @endforeach
                        @else
                            <article class="timeline-item">
                                <div class="timeline-desk">
                                    <div class="panel">
                                        <div class="timeline-box">
                                            <span class="arrow"></span>
                                            <span class="timeline-icon bg-success"><i class="ri-record-circle-line"></i></span>
                                            <h4 class="fs-16 fw-semibold">{{ $JadwalPertandingan->tanggal }}</h4>
                                            <p class="timeline-date text-muted">
                                                <small>{{ $JadwalPertandingan->mulai }}</small>
                                            </p>
                                            <p>Tidak ada data tim</p>
                                            <p>{{ $JadwalPertandingan->tim }}</p>
                                            <p>{{ $JadwalPertandingan->tim }}</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endif
                    @endforeach
                        


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="timeline timeline-left">
                        <article class="timeline-item alt">
                            <div class="text-start">
                                <div class="time-show first">
                                    <a href="#" class="btn btn-primary w-lg">Today</a>
                                </div>
                            </div>
                        </article>
                        @foreach ($Jadwal as $JadwalPertandingan)
                            @if (now()->isSameDay(\Carbon\Carbon::parse($JadwalPertandingan->tanggal)))
                            {{-- @if (\Carbon\Carbon::parse($JadwalPertandingan->tanggal)->isLastMonth()) --}}
                                {{-- @if (\Carbon\Carbon::parse($JadwalPertandingan->tanggal)->now()->isSameDay())  --}}
                                <article class="timeline-item">
                                    <div class="timeline-desk">
                                        <div class="panel">
                                            <div class="timeline-box">
                                                <span class="arrow"></span>
                                                <span class="timeline-icon bg-success"><i class="ri-record-circle-line"></i></span>
                                                <h4 class="fs-16 fw-semibold">{{ $JadwalPertandingan->tanggal }}</h4>
                                                <p class="timeline-date text-muted">
                                                    <small>{{ $JadwalPertandingan->mulai }}</small>
                                                </p>
                                                <p>Sma 1 Gresik</p>
                   
{{--     
                                                @if ($JadwalPertandingan->grub) <!-- Periksa apakah 'grub' tidak null -->
                                                    <p>{{ $JadwalPertandingan->grub->tim }}</p> <!-- Tampilkan 'tim' jika 'grub' tidak null -->
                                                @else
                                                    <p>{{ $JadwalPertandingan->id_tim2 }}</p>
                                                @endif --}}
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            @endif
                        @endforeach
                    </div>
                    <!-- end timeline -->
                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
    

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="timeline timeline-left">
                        <article class="timeline-item alt">
                            <div class="text-start">
                                <div class="time-show first">
                                    <a href="#" class="btn btn-primary w-lg">Yesterday</a>
                                </div>
                            </div>
                        </article>
                        @foreach ($Jadwal as $JadwalPertandingan)
                            @if (\Carbon\Carbon::parse($JadwalPertandingan->tanggal)->isYesterday())
                                <article class="timeline-item">
                                    <div class="timeline-desk">
                                        <div class="panel">
                                            <div class="timeline-box">
                                                <span class="arrow"></span>
                                                <span class="timeline-icon bg-success"><i class="ri-record-circle-line"></i></span>
                                                <h4 class="fs-16 fw-semibold">{{ $JadwalPertandingan->tanggal }}</h4>
                                                <p class="timeline-date text-muted">
                                                    <small>{{ $JadwalPertandingan->mulai }}</small>
                                                </p>
                                                <p>{{ $team->tim  }}</p>
                                                {{-- <p>{{ $JadwalPertandingan->grub }}</p>
                                                <p>{{ $JadwalPertandingan->id_tim }}</p>
                                                <p>{{ $JadwalPertandingan->id_tim2 }}</p> --}}
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            @endif
                        @endforeach
                    </div>
                    <!-- end timeline -->
                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="timeline timeline-left">
                        <article class="timeline-item alt">
                            <div class="text-start">
                                <div class="time-show first">
                                    <a href="#" class="btn btn-primary w-lg">Tomorrow</a>
                                </div>
                            </div>
                        </article>
                        @foreach ($Jadwal as $JadwalPertandingan)
                            @if (\Carbon\Carbon::parse($JadwalPertandingan->tanggal)->isTomorrow())
                                <article class="timeline-item">
                                    <div class="timeline-desk">
                                        <div class="panel">
                                            <div class="timeline-box">
                                                <span class="arrow"></span>
                                                <span class="timeline-icon bg-success"><i class="ri-record-circle-line"></i></span>
                                                <h4 class="fs-16 fw-semibold">{{ $JadwalPertandingan->tanggal }}</h4>
                                                <p class="timeline-date text-muted">
                                                    <small>{{ $JadwalPertandingan->mulai }}</small>
                                                </p>
                                                <p>Sma 1 Surabaya</p>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            @endif
                        @endforeach
                    </div>
                    <!-- end timeline -->
                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="timeline timeline-left">
                        <article class="timeline-item alt">
                            <div class="text-start">
                                <div class="time-show first">
                                    <a href="#" class="btn btn-primary w-lg">Last Month</a>
                                </div>
                            </div>
                        </article>
                        @foreach ($Jadwal as $JadwalPertandingan)
                            @if (\Carbon\Carbon::parse($JadwalPertandingan->tanggal)->isLastMonth())
                                <article class="timeline-item">
                                    <div class="timeline-desk">
                                        <div class="panel">
                                            <div class="timeline-box">
                                                <span class="arrow"></span>
                                                <span class="timeline-icon bg-success"><i class="ri-record-circle-line"></i></span>
                                                <h4 class="fs-16 fw-semibold">{{ $JadwalPertandingan->tanggal }}</h4>
                                                <p class="timeline-date text-muted">
                                                    <small>{{ $JadwalPertandingan->mulai }}</small>
                                                </p>
                                              
                                                <p>Sma Nu Gresik</p>


                                            </div>
                                        </div>
                                    </div>
                                </article>
                            @endif
                        @endforeach
                    </div>
                    <!-- end timeline -->
                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->


    

    
    
@endsection
