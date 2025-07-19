<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <x-nav-link></x-nav-link>
      <h1>{{ $name}}</h1>
     <h2>{{ $color }}</h2>
    <div>


       @foreach ( $days as $day  )
       @if ($loop->index==0)
       <p style="color: red;"> {{ $loop->index+1 }}-{{ $day }}</p>
       @else
        <p> {{ $loop->index+1 }}-{{ $day }}</p>
       @endif
      
       @endforeach
   </div>
</body>
</html>