<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main</title>
    <link href="https://fonts.cdnfonts.com/css/urwclassico" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/cinzel" rel="stylesheet">
    <style>
        body {
            font-family: 'URWClassico', sans-serif;
        }

        h2 {
            display: grid;
            font-family: 'cinzel', sans-serif;
            justify-content: center;
            color: #26356a;
            border: 2px solid #26356a;
            margin-inline: 10rem;
            padding: 1rem;
            border-radius: 1rem;
            background-color: #e8e8e8
        }

        h4 {
            display: grid;
            font-family: 'URWClassico';
            justify-content: center;
            margin-inline: 10rem;
            color: #525252;
            padding: 1rem;
            border-radius: 1rem;
            background-color: #e8e8e8
        }
    </style>
</head>

<body>

    <h1>Hello Main</h1>

    <div class="container">
        @yield('content')
    </div>

</body>

</html>
