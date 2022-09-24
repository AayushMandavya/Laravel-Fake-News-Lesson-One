<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake News Portal Article</title>
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
.container{
    text-align:center;
}
    </style>
</head>
<body>

    
        
              
                  <div class="container"> 
                        <h2>
                            
                                 {{$article['title']}}
                                    
                        </h2>
                        <p>
                        
                                 {{ $article['desc']}}
                            
                        </p>
                  </div>
                  
            
            

        

    </div>

</body>
</html>