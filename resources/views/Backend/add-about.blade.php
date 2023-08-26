@extends('Backend.dashboard')
@section('content')
    <div class="add-about-form">
        <form action="" method="POST" class="form" enctype="multipart/form-data">
            @csrf
            <div class="row gy-4 mt-1">
                <div class="col-lg-9 col-md-6">
                    <label for="name">Image</label>
                    <input type="file" class="form-control" name='image'>
                </div>

                <div class="col-lg-9 col-md-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name='name' placeholder="Enter doctor name here">
                </div>
                <div class="col-lg-9 col-md-6">
                    <label for="name">Speciality</label>
                    <input type="text" class="form-control" name='speciality' placeholder="Enter doctor speciality">
                </div>
                <div class="col-lg-9 col-md-6">
                    <label for="name">Degree 1</label>
                    <input type="text" class="form-control" name='degree1' placeholder="Enter doctor's main degree">
                </div>
                <div class="col-lg-9 col-md-6">
                    <label for="name">Degree 2</label>
                    <input type="text" class="form-control" name='degree2' placeholder="Enter doctor's second degree">
                </div>
                <div class="col-lg-9 col-md-6">
                    <label for="name">Degree 3</label>
                    <input type="text" class="form-control" name='degree3' placeholder="Enter doctor's thrid degree">
                </div>
                <div class="col-lg-9 col-md-6">
                    <label for="name">Degree 4</label>
                    <input type="text" class="form-control" name='degree4' placeholder="Enter doctor's fourth degree">
                </div>
                <div class="col-lg-9 col-md-6">
                    <label for="name">Degree 5</label>
                    <input type="text" class="form-control" name='degree5' placeholder="Enter doctor's fifth degree">
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Post Info</button>
                </div>
            </div>






        </form>
    </div>
@endsection
