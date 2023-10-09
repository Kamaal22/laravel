<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>

<body>

</body>

</html>

<h1>

    {{ $heading }}

</h1>

@unless (count($listings) == 0)
    @foreach ($listings as $listing)
        <a
            href="/listings/{{ $listing['id'] }}">{{ $listing['id'] . '. ' . $listing['title'] . ' - ' . $listing['type'] }}</a>
        <br>
        <br>
        <br>
        {{-- <h4>{{ $listing['description'] }}</h4> --}}
    @endforeach
@else
    <p>Sorry, no listings are available.</p>
@endunless
