@extends('layout')
@section('content')
    <div class="container services-page">

        <div class="content col-3">
            @if ($services)
                <table>
                    <tbody>
                        @foreach ($services->chunk(3) as $chunk)
                            <tr>
                                @foreach ($chunk as $service)
                                    <td>
                                        <div class="card col-3">
                                            <img src="img/thyroid.png" alt="Disease" class="card-image-top" />
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
                // Code for empty services
            @endif
        </div>

    </div>
@endsection
