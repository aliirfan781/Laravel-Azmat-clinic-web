@extends('Backend.dashboard')
@section('content')
    <div class="admin-about-page">
        <div class="card">
            <div class="button">
                <a href="{{ route('Add-About') }}" class="btn btn-success">Edit Info</a>
            </div>
            <div class="image" data-aos="fade-left">
                <img src="/img/Azmat.jpeg" alt="">
            </div>
            <div class="name" data-aos="fade-left">
                <h1>Dr. Azmat Ali Khan</h1>

            </div>
            <div data-aos="fade-left">
                <h3>Diabetologist & Endocrinologist</h3>
            </div>
            <div class="info" data-aos="fade-left">
                <p>MBBS(KMC)</p>
                <p>FCPS (Med)</p>
                <p>MRCP(UK)</p>
                <p>M.Sc Endocrinology(UK)</p>
                <p>Fellowship Endocrinology and Diabetes(HMC Peshawar)</p>
            </div>

        </div>

    </div>
@endsection
