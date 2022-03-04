<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravelEXtreme</title>
</head>
<body>
    @foreach ($finale as $item=>$element)
        <div>{{$element->title}}</div> 
    @endforeach
    @dump($finale);

</body>
</html>