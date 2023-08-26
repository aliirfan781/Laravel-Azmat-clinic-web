@extends('layout')
@section('content')
    <div class="container blogs-page">
        <div class="content">
            {{-- <div class="blog" data-aos="fade-up">
                <div class="image">
                    <img src="img/image.jpg" alt="This is blog image" />
                </div>
                <div class="blog-content">
                    <div class="blog-title">Blog Title</div>
                    <div class="blog-article">This is article or blog description I am a citizen of pakistan and I live in
                        Swat. I am not satisfied with the rules ans regulations</div>
                    <div class="btn btn-primary">Read More...</div>
                </div>
            </div> --}}
            @if ($blogs)
                @foreach ($blogs as $object)
                    <div class="blog-control">
                        <div class="blog">
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
    </div>
@endsection
