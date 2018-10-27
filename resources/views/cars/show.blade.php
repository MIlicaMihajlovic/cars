<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    
    <title>Cars</title>
   
</head>
<body>
            {{-- <h1>{{$car->id}}</h1> --}}
    <ul>
                
            <li>{{ $car->title }}</li>
            <li>{{ $car->producer }}</li>
            <li>{{ $car->number_of_doors }}</li>
        
    </ul>
</body>
</html>