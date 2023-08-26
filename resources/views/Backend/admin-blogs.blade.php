@extends('Backend/dashboard')
@section('content')
    <div class="admin-blogs">
        <div class="add-button">
            <a href="{{ route('Add-Blog') }}" class="btn btn-primary">ADD BLOG</a>
        </div>
        <div class="content">
            @if ($blogs)
                @foreach ($blogs as $object)
                    <div class="blog-control" data-aos="fade-up">
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
                        <div class="control-buttons">
                            <a href="{{ route('Edit-Blog', $object->id) }}" class="btn btn-primary">EDIT</a>
                            <a href="" class="btn btn-primary">DELETE</a>
                        </div>
                    </div>
                @endforeach
            @else
            @endif


        </div>
    </div>
@endsection
