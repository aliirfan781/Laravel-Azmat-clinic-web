@extends('Backend.dashboard')
@section('content')
    <div class="add-blog-form">
        <div class="back-button">
            <a href="{{ route('Admin-Blogs') }}" class="btn btn-primary">Back</a>
        </div>
        <form action="{{ route('Upload-Blog') }}" method="post" class="form" enctype="multipart/form-data">
            @csrf
            <div class="row gy-4 mt-1">
                <div class="col-lg-9 col-md-6">
                    <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title here">
                    <div class="validate"></div>
                </div>
            </div>
            <div class="row gy-4 mt-1">
                <div class="col-lg-9 col-md-6">
                    <textarea name="article" id="article" cols="30" rows="5" class="form-control"
                        placeholder="Write article here"></textarea>
                    <div class="validate"></div>
                </div>

            </div>


            <div class="col-lg-4 col-md-6 pt-3 mt-3">
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
                <div class="validate"></div>
            </div>
            <div class="mt-4 "><button type="submit" class="btn btn-primary">Upload Blog</button></div>
        </form>
    </div>
@endsection
