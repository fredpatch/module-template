<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
        *,
    </style>
</head>


<body>
    <h1>Form {{ $templateCode->code }}</h1>



    <div>
        <form action="{{ route('template.submit', ['templateCode' => $templateCode->code]) }}" method="POST">
            @csrf
            @php
                $meta = json_decode($templateCode->meta);
            @endphp



            @foreach ($meta as $key => $value)
                <label for="{{ $key }}">{{ $key }}</label>
                <input type="text" name="{{ $key }}" id="{{ $key }}">
            @endforeach

            <button type="submit">Submit</button>
        </form>
    </div>

</body>

</body>

</html>
