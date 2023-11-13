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
    <div class="row">
        <div class="col-sm-12">
            <div class="profile-bg-picture"
                style="background-image:url({{ url('frontend/images/users/bg/bg-profile.jpg') }}" alt="" width="100px"" >
                <span class="picture-bg-overlay"></span>
                <!-- overlay -->
            </div>
            <!-- meta -->
            <div class="profile-user-box">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="profile-user-img"><img src="{{ url('frontend/images/users/avatar-1.jpg') }}" alt="" width="100px"" 
                                class="avatar-lg rounded-circle"></div>
                        <div class="">
                            <h4 class="mt-4 fs-17 ellipsis">{{$data->name}}</h4>
                            {{-- <p class="font-13"> User Pgfc</p>
                            <p class="text-muted mb-0"><small>{{$data->referral_code}}</small></p> --}}
                        </div>
                    </div>
                    <div class="col-sm-6"> 
                    </div>
                </div>
            </div>
            <!--/ meta -->
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-sm-12">
            <div class="card p-0">
                <div class="card-body p-0">
                    <div class="profile-content">
                        <ul class="nav nav-underline nav-justified gap-0">
                            <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab"
                                    data-bs-target="#aboutme" type="button" role="tab"
                                    aria-controls="home" aria-selected="true" href="#aboutme">About</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                    data-bs-target="#user-activities" type="button" role="tab"
                                    aria-controls="home" aria-selected="true"
                                    href="#user-activities">Activities</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                    data-bs-target="#edit-profile" type="button" role="tab"
                                    aria-controls="home" aria-selected="true"
                                    href="#edit-profile">Settings</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                    data-bs-target="#projects" type="button" role="tab"
                                    aria-controls="home" aria-selected="true"
                                    href="#projects">Projects</a></li>
                        </ul>

                        <div class="tab-content m-0 p-4">
                            <div class="tab-pane active" id="aboutme" role="tabpanel"
                                aria-labelledby="home-tab" tabindex="0">
                                <div class="profile-desk">
                                    {{-- <h5 class="text-uppercase fs-17 text-dark">{{$data->name}}</h5>
                                    <div class="designation mb-4">User</div> --}}
                                    {{-- <p class="text-muted fs-16">
                                        I have 10 years of experience designing for the web, and
                                        specialize
                                        in the areas of user interface design, interaction design,
                                        visual
                                        design and prototyping. I’ve worked with notable startups
                                        including
                                        Pearl Street Software.
                                    </p> --}}

                                    <h5 class="mt-4 fs-17 text-dark">User Information</h5>
                                    <table class="table table-condensed mb-0 border-top">
                                        <tbody>
                                            <tr>
                                                <th scope="row">Id</th>
                                                <td>
                                                    <a href="#" class="ng-binding">
                                                        {{$data->id}}
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Email</th>
                                                <td>
                                                    <a href="" class="ng-binding">
                                                        {{$data->email}}
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">Email Verified</th>
                                                <td class="ng-binding">{{$data->email_verified_at}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Is Verified</th>
                                                <td>
                                                    <a href="#" class="ng-binding">
                                                        {{$data->is_verified}}
                                                    </a>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div> <!-- end profile-desk -->
                            </div> <!-- about-me -->

                            <!-- Activities -->
                            <div id="user-activities" class="tab-pane">
                                <div class="timeline-2">
                                    <div class="time-item">
                                        <div class="item-info ms-3 mb-3">
                                            <div class="text-muted">5 minutes ago</div>
                                            <p><strong><a href="#" class="text-info">John
                                                        Doe</a></strong>Uploaded a photo</p>
                                            <img src="/images/small/small-3.jpg" alt=""
                                                height="40" width="60" class="rounded-1">
                                            <img src="/images/small/small-4.jpg" alt=""
                                                height="40" width="60" class="rounded-1">
                                        </div>
                                    </div>

                                    <div class="time-item">
                                        <div class="item-info ms-3 mb-3">
                                            <div class="text-muted">30 minutes ago</div>
                                            <p><a href="" class="text-info">Lorem</a> commented your
                                                post.
                                            </p>
                                            <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit.
                                                    Aliquam laoreet tellus ut tincidunt euismod. "</em>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="time-item">
                                        <div class="item-info ms-3 mb-3">
                                            <div class="text-muted">59 minutes ago</div>
                                            <p><a href="" class="text-info">Jessi</a> attended a meeting
                                                with<a href="#" class="text-success">John Doe</a>.</p>
                                            <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit.
                                                    Aliquam laoreet tellus ut tincidunt euismod. "</em>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="time-item">
                                        <div class="item-info ms-3 mb-3">
                                            <div class="text-muted">5 minutes ago</div>
                                            <p><strong><a href="#" class="text-info">John
                                                        Doe</a></strong> Uploaded 2 new photos</p>
                                            <img src="/images/small/small-2.jpg" alt=""
                                                height="40" width="60" class="rounded-1">
                                            <img src="/images/small/small-1.jpg" alt=""
                                                height="40" width="60" class="rounded-1">
                                        </div>
                                    </div>

                                    <div class="time-item">
                                        <div class="item-info ms-3 mb-3">
                                            <div class="text-muted">30 minutes ago</div>
                                            <p><a href="" class="text-info">Lorem</a> commented your
                                                post.
                                            </p>
                                            <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit.
                                                    Aliquam laoreet tellus ut tincidunt euismod. "</em>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="time-item">
                                        <div class="item-info ms-3 mb-3">
                                            <div class="text-muted">59 minutes ago</div>
                                            <p><a href="" class="text-info">Jessi</a> attended a meeting
                                                with<a href="#" class="text-success">John Doe</a>.</p>
                                            <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit.
                                                    Aliquam laoreet tellus ut tincidunt euismod. "</em>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- settings -->
                            <div id="edit-profile" class="tab-pane">
                                <div class="user-profile-content">
                                    <form method="POST" action="{{route('Auth-User.update',['id' => $data->id])}}">
                                        @csrf
                                        @method('PUT')
                                        <div class="row row-cols-sm-2 row-cols-1">
                                            <div class="mb-2">
                                                <label class="form-label" for="name">Nama</label>
                                                <input type="text" value="{{$data->name}}" id="name"
                                                    class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="email">Email</label>
                                                <input type="email" value="{{$data->email}}"
                                                    id="email" class="form-control">
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="referral_code">referral_code</label>
                                                <input type="text" value="{{$data->referral_code}}"
                                                    id="referral_code" class="form-control">
                                            </div>
                                    

                                            <div class="mb-3">
                                                <label class="form-label"
                                                    for="password">Password</label>
                                                <input type="password" placeholder="{{$data->password}}"
                                                    id="password" class="form-control">
                                            </div>
                                         
                                            
                                        </div>
                                        <button class="btn btn-primary" type="submit"><i
                                                class="ri-save-line me-1 fs-16 lh-1"></i> Save</button>
                                    </form>
                                </div>
                            </div>

                            <!-- profile -->
                            <div id="projects" class="tab-pane">
                                <div class="row m-t-10">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table table-bordered mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Project Name</th>
                                                        <th>Start Date</th>
                                                        <th>Due Date</th>
                                                        <th>Status</th>
                                                        <th>Assign</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Velonic Admin</td>
                                                        <td>01/01/2015</td>
                                                        <td>07/05/2015</td>
                                                        <td><span class="badge bg-info">Work
                                                                in Progress</span></td>
                                                        <td>Techzaa</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Velonic Frontend</td>
                                                        <td>01/01/2015</td>
                                                        <td>07/05/2015</td>
                                                        <td><span
                                                                class="badge bg-success">Pending</span>
                                                        </td>
                                                        <td>Techzaa</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Velonic Admin</td>
                                                        <td>01/01/2015</td>
                                                        <td>07/05/2015</td>
                                                        <td><span class="badge bg-pink">Done</span>
                                                        </td>
                                                        <td>Techzaa</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Velonic Frontend</td>
                                                        <td>01/01/2015</td>
                                                        <td>07/05/2015</td>
                                                        <td><span class="badge bg-purple">Work
                                                                in Progress</span></td>
                                                        <td>Techzaa</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Velonic Admin</td>
                                                        <td>01/01/2015</td>
                                                        <td>07/05/2015</td>
                                                        <td><span class="badge bg-warning">Coming
                                                                soon</span></td>
                                                        <td>Techzaa</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->

</div>
<!-- end row -->
@endsection