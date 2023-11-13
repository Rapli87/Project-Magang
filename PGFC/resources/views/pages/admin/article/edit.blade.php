@extends('layouts.admin')

@section('title', 'Edit Articles | PGFC Admin')

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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Edit Articles</a>
                                    </li>
                                </ol>
                            </div>
                            <h4 class="page-title">Edit Articles </h4>
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
                        <form action="{{ url('admin/articles/'.$article->id) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <input type="hidden" name="oldImg" value="{{ $article->img }}">

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" name="title" id="title"
                                            placeholder="Title" value="{{ old('title', $article->title) }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="category_id">Category</label>
                                        <select name="category_id" id="category_id" class="form-control">
                                            @foreach ($categories as $item)
                                                @if ($item->id == $article->category_id)
                                                    <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                                                @else
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="desc" class="form-label">Description</label>
                                    <textarea name="desc" id="myeditor" cols="30" rows="10" class="form-control">{{ old('desc', $article->desc) }}</textarea>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="img">Image</label>
                                        <input type="file" class="form-control" name="img" id="img">
                                        <div class="mt-1">
                                            <small><b>Gambar Lama :</b></small><br>
                                            <img src="{{ url('storage/admin/articles/'.$article->img) }}" class="img-thumbnail img-preview" width="100px">
                                        </div>
                                        <div class="mt-1">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="status">Status</label>
                                            <select name="status" id="status" class="form-control">
                                                <option value="1" {{ $article->status== 1 ? 'selected' : null }}>Published</option>
                                                <option value="0" {{ $article->status== 0 ? 'selected' : null }}>Private</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="publish_date">Publish Date</label>
                                            <input type="date" name="publish_date" id="publish_date"
                                                class="form-control" value="{{ old('publish_date', $article->publish_date) }}">
                                        </div>
                                    </div>
                                </div>
                                <div>
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

    @push('addon-script')
        <script src="{{ url('https://code.jquery.com/jquery-3.5.1.js') }}"></script>
        <script src="{{ url('https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js') }}"></script>
        <script>
            var options = {
                filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=',
                clipboard_handleImages: false,
            }
        </script>
        <script>
            CKEDITOR.replace('myeditor', options);

            // img preview
            $("#img").change(function() {
                previewImg(this);
            });

            function previewImg(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('.img-preview').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>        
    @endpush