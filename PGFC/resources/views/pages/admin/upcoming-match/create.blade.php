@extends('layouts.admin')

@section('title', 'Create Pertandingan Selanjutnya | PGFC Admin')

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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tambah Pertandingan
                                            Selanjutnya</a>
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Tambah Pertandingan Selanjutnya </h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                {{-- Konten --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('upcoming-match.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="home_team" class="form-label">Home</label>
                                        <input type="text" class="form-control @error('home_team') is-invalid @enderror"
                                            name="home_team" placeholder="Home" value="{{ old('home_team') }}">
                                        @error('home_team')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="away_team" class="form-label">Away</label>
                                        <input type="text" class="form-control @error('away_team') is-invalid @enderror"
                                            name="away_team" placeholder="Away" value="{{ old('away_team') }}">
                                        @error('away_team')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="vanue" class="form-label">Venue</label>
                                        <input type="text" class="form-control @error('vanue') is-invalid @enderror"
                                            name="vanue" placeholder="Venue" value="{{ old('vanue') }}">
                                        @error('vanue')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="match_datetime" class="form-label">Match Date Time</label>
                                        <input type="datetime-local"
                                            class="form-control @error('match_datetime') is-invalid @enderror"
                                            name="match_datetime" placeholder="Date" value="{{ old('match_datetime') }}">
                                        @error('match_datetime')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="home_team_logo" class="form-label">Logo Home</label>
                                        <input type="file"
                                            class="form-control @error('home_team_logo') is-invalid @enderror"
                                            name="home_team_logo">
                                    </div>
                                    @error('home_team_logo')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <div class="mb-3">
                                        <label for="away_team_logo" class="form-label">Logo Away</label>
                                        <input type="file"
                                            class="form-control @error('away_team_logo') is-invalid @enderror"
                                            name="away_team_logo">
                                    </div>
                                    @error('away_team_logo')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    {{-- <div class="mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control" name="description" placeholder="Description">{{ old('description') }}</textarea>
                                    </div> --}}
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- End Konten --}}
            </div>
            <!-- container -->
        </div>
        <!-- content -->
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
    @endsection
    