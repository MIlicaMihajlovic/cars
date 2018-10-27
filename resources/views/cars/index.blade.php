<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    
    <title>Cars</title>
   
</head>
<body>
    <ul>
        @foreach($cars as $car)
        <a href="/cars/{{$car->id}}">  
            <li>{{ $car->title }}</li>
        </a>        
        @endforeach
    </ul>
</body>
</html>