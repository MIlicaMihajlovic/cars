<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    
    <title>Cars</title>
   
</head>
<body>
    <ul>
        @foreach($cars as $car)
            <li>{{ $car->title }}</li>
        @endforeach
    </ul>
</body>
</html>