@extends('Backend.dashboard')
@section('content')
    <div class="add-service-form">
        <div class="back-button">
            <a href="{{ route('Admin-Services') }}" class="btn btn-primary">Back</a>
        </div>
        <form action="{{ route('Insert-Service') }}" method="post" class="form" enctype="multipart/form-data">
            @csrf
            <div class="row gy-4 mt-1">
                <div class="col-lg-4 col-md-6">
                    <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title here">
                    <div class="validate"></div>
                </div>

            </div>


            <div class="col-lg-4 col-md-6 pt-3 mt-3">
                <input type="file" name="image" class="form-control" id="image" placeholder="Upload Image">
                <div class="validate"></div>
            </div>
            <div class="mt-4 "><button type="submit" class="btn btn-primary">Add Item</button></div>
        </form>
    </div>
@endsection
