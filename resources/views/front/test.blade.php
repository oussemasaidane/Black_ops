<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>my first page
        @isset($id)

        
        {{$id}}

       
    @endisset

    @empty($id)

        
    Write ID

   
@endempty
    </h1>

    <h1>my first message
    
        @isset($id2, $nom)
    <!-- is set -->

        {{$id2}}{{$nom}}

        @endisset

        @if (empty($id2) && empty($nom))
        <!-- is set -->
    
            no ID and Name
    
            @endif


    </h1>
</body>
</html>