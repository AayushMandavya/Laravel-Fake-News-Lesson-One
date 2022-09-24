<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake News Portal</title>
    <style>

body{
    padding: 0;
    margin: 0;
    align-items:center
    box-sizing: border-box;
    font-family:Arial, Helvetica, sans-serif; 
}
h1{
    font-weight: 700;
    font-size: 45px;
   
    padding-bottom: 35px;
}
h2{
    font-weight: 400;
    font-size: 35px;
    
    padding-bottom: 35px;
}

    </style>
</head>
<body>
    <h1>{{$header}}</h1>
    
        
                @foreach($articles as $value)
                  <div> 
                        <h2>
                            
                            <a href="article/{{$value['id']}}">     {{$value['title']}} </a>
                                    
                        </h2>
                        <p>
                        
                                 {{ $value['desc']}}
                            
                        </p>
                  </div>
                  
            
            
               @endforeach

        

    </div>

</body>
</html>