@extends('Backend/dashboard')
@section('content')
    <div class="admin-services">
        <div class="add-button">
            <a href="{{ route('Add-Service') }}" class="btn btn-primary">ADD SERVICE</a>
        </div>

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
                                            <div class="control-buttons">
                                                <a href="" class="btn btn-primary">EDIT</a>
                                                <a href="{{ route('Delete-Service', $service->id) }}"
                                                    class="btn btn-primary">DELETE</a>
                                            </div>
                                        </div>
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                // Code for empty services
            @endif
        </div>

    </div>
@endsection
