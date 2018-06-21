<!DOCTYPE html>
<html>
     <head>
          <meta charset="utf-8">
          <title></title>
     </head>
     <body>

     {{ Form::open(['method' => 'GET',]) }}
     {{Form::input('search','q',null,['placeholder' => 'Search...',])}}
     {{ Form::close()}}
     @if($r ==! null)
          {{dd($r)}}
     @endif
     </body>
</html>