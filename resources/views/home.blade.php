@extends('layout')
@section('content')
    <main>
        <div class="landing_page">
            <div class="hero_text" data-aos="fade-left">
                <h2><span>DR</span> AZMAT ALI KHAN</h2>
            </div>
            <div class="under_hero" data-aos="fade-left">
                <p>DIABETOLOGIST <span>AND</span> ENDOCRINOLOGIST</p>
            </div>
            <a href="{{ route('appointment.book') }}" class="btn btn-primary" data-aos="fade-left">BOOK APPOINTMENT</a>
        </div>
    </main>
    <section class="container services">
        <div class="title" data-aos="fade-up">SERVICES</div>
        <div class="content col-3">
            @if ($services)
                <table>
                    <tbody>
                        @foreach ($services->chunk(3) as $chunk)
                            <tr>
                                @foreach ($chunk as $service)
                                    <td>
                                        <div class="card col-3" data-aos="fade-up">
                                            @if ($service->image)
                                                <img src="{{ asset('storage/img/' . $service->image) }}" alt="Disease"
                                                    class="card-image-top" />
                                            @endif
                                            <div class="card-body">
                                                <p class="card-text">{{ $service->title }}</p>
                                            </div>

                                        </div>
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <h1>Nothing</h1>
            @endif
        </div>


    </section>
    <div class="line" data-aos="fade-up"></div>
    <section class="container blogs">
        <div class="title" data-aos="fade-up">BLOGS</div>
        <div class="content">

            @if ($blogs)
                @foreach ($blogs as $object)
                    <div class="blog-control">
                        <div class="blog" data-aos="fade-up">
                            <div class="image">
                                @if ($object->image)
                                    <img src="{{ asset('storage/img/' . $object->image) }}" alt="This is blog image" />
                                @endif
                            </div>
                            <div class="blog-content">
                                <div class="blog-title">{{ $object->title }}</div>
                                <div class="blog-article">{{ $object->article }}

                                </div>
                                <a href="" class="btn btn-primary">Read More...</a>
                            </div>

                        </div>

                    </div>
                @endforeach
            @else
            @endif
        </div>
    </section>
    <div class="line" data-aos="fade-up"></div>
    <section class="container schedule">
        <div class="title" data-aos="fade-up">CLINIC SCHEDULE</div>
        <table class="table" data-aos="fade-up">
            <thead>
                <tr>
                    <th scope="col">DAY</th>
                    <th scope="col">AVAILABILITY</th>
                    <th scope="col">TIME</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>MONDAY</td>
                    <td>NO</td>
                    <td>10 AM - 03 PM</td>
                </tr>
                <tr>
                    <td>TUESDAY</td>
                    <td>NO</td>
                    <td>10 AM - 03 PM</td>
                </tr>
                <tr>
                    <td>WEDNESDAY</td>
                    <td>NO</td>
                    <td>10 AM - 03 PM</td>
                </tr>
                <tr>
                    <td>THURSDAY</td>
                    <td>NO</td>
                    <td>10 AM - 03 PM</td>
                </tr>
                <tr>
                    <td>FRIDAY</td>
                    <td>NO</td>
                    <td>10 AM - 03 PM</td>
                </tr>
                <tr>
                    <td>SATURDAY</td>
                    <td>YES</td>
                    <td>10 AM - 03 PM</td>
                </tr>
                <tr>
                    <td>SUNDAY</td>
                    <td>YES</td>
                    <td>10 AM - 03 PM</td>
                </tr>
            </tbody>
        </table>
    </section>
@endsection
