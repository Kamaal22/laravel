    @extends('layout')

    @section('content')
        <h2>{{ $listing['title'] }}</h2>
        <h4>{{ $listing['description'] }}</h4>
    @endsection()