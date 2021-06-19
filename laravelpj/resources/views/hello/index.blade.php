<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>COACHTECH</title>

</head>

<body>
{{-- @if ($number % 2 == 0)
    2の倍数です。
@elseif($number % 3 == 0)
    3の倍数です。
@else
    2の倍数でも3の倍数でもありません。
@endif --}}
<ul>
@foreach ($animals as $animal)
   <li>{{ $animal }}</li> 
@endforeach
</ul>
</body>

</html>



