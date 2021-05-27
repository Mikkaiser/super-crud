<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/style.css">

        <title>Laravel</title>
    </head>
    <body>
    <h1>Test</h1>
      @if(10 > 5)
        <p>The condition is true</p>
      @endif
      {{ $namee }}
      <hr>
      @for($i = 0; $i < count($array); $i++)
        <p> {{ $array[$i] }} -> {{ $i }} </p>
      @endfor

      @foreach($names as $name)
        <p>{{ $name }}</p>
      @endforeach

      <script src="/js/script.js"></script>
    </body>
</html>
