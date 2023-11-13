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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Auth User</a></li>
                                </ol>
                            </div>
                            <h4 class="page-title">Welcome {{ Auth::user()->name }}!</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="p-4 my-auto">
                    <h4 class="fs-20">Auth User With Token</h4>
                    <p class="text-muted mb-3">Enter your email address and password to access
                        account.</p>

                    <form method="POST" action="{{ route('registered') }}">
                        @csrf
                        <div class="mb-2">
                            <label for="name" class="form-label">Nama</label>
                            <input class="form-control" type="text" name="name" placeholder="Enter your name" required
                                autofocus>
                            @error('name')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="email" class="form-label">Email address</label>
                            <input class="form-control" type="email" name="email" required autofocus
                                placeholder="Enter your email">
                            @error('email')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-2  d-none">
                            <label for="referral_code" class="form-label">Kode Token</label>
                            <input class="form-control" type="text" name="referral_code"
                                placeholder="Enter Refferal Code (Optional)">
                            @error('referral_code')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="password" class="form-label">Password</label>
                            <input class="form-control" type="password" required="" name="password"
                                placeholder="Enter your password">
                            @error('password')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <label for="password" class="form-label">Confirm Password</label>
                            <input class="form-control" type="password" required="" name="password_confirmation"
                                placeholder="Enter your password">
                            @error('password_confirmation')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="checkbox-signup">
                                <label class="form-check-label" for="checkbox-signup">I accept <a
                                        href="javascript: void(0);" class="text-muted">Terms and
                                        Conditions</a></label>
                            </div>
                        </div>
                        <div class="mb-0 d-grid text-center">
                            <button class="btn btn-primary fw-semibold" type="submit" value="Register">Sign
                                Up</button>
                        </div>



                    </form>
                    @if (Session::has('success'))
                        <p style="color: green">{{ Session::get('success') }}</p>
                    @endif
                    @if (Session::has('error'))
                        <p style="color: red">{{ Session::get('error') }}</p>
                    @endif
                    <!-- end form-->
                </div>
            </div>
        </div>
        <!-- end col -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h5 class="mt-0">Data User</h5>
                        <p class="sub-header font-13">List Data User</p>
                        <div class="table-responsive">
                            <table class="table table-centered mb-0" id="inline-editable">
                                <thead>
                                    <tr class="text-center">
                                        <th>id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Referal_code</th>
                                        <th>Verified</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($Datauser->sortBy('id') as $data)
                                    <tr class="text-center">
                                            <td>{{ $data->id }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->email }}</td>
                                            <td>{{ $data->password }}</td>
                                            <td>{{ $data->referral_code }}</td>
                                            <td>{{ $data->is_verified }}</td>

                                        </tr>
                                    @endforeach

                                </tbody>

                                </tbody>
                            </table>
                        </div> <!-- end .table-responsive-->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h5 class="mt-0">Data User</h5>
                        <p class="sub-header font-13">Inline edit like a spreadsheet, toolbar column with edit
                            button only and without focus on first input.</p>
                        <div class="table-responsive">
                            <table class="table table-centered mb-0">
                                <thead>
                                    <tr class="text-center">
                                        <th>id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Referal_code</th>
                                        <th>Verified</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($Datauser->sortBy('id') as $data)
                                        <tr class="text-center">
                                            <td>{{ $data->id }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->email }}</td>
                                            <td>{{ $data->password }}</td>
                                            <td>{{ $data->referral_code }}</td>
                                            <td>{{ $data->is_verified }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-warning">Action</button>
                                                    <button type="button"
                                                        class="btn btn-Success dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <span class="visually-hidden">Toggle Dropdown</span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('Auth-User.show', ['id' => $data->id]) }}">View</a>
                                                        </li>

                                                        <li><a class="dropdown-item"
                                                                href="{{ route('Auth-User.delete', ['id' => $data->id]) }}">Hapus</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            @endsection
