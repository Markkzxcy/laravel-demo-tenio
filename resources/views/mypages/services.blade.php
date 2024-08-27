<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <style>
        .gallery-button {
            background-color: #008000; /* green */
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;    
            
        }

        .gallery-button:hover{
            background-color: #00ff00;
        }
        
        .index-button {
            background-color: #0066cc; /* blue */
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .index-button:hover{
            background-color:  #0000ff;
        }
        
        .services-button {
            background-color: #ff9900; /* orange */
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .services-button:hover{
            background-color:  #ffcc00;

        }
    </style>
</head>
<body>
    <h1>this is services</h1>
    <br>
    <a href="{{route ('gallery')}}">
        <button class="gallery-button">Gallery</button>
    </a>
    <br>
    <a href="{{route ('index')}}">
        <button class="index-button">index</button>
    </a>
    <br>
    <a href="{{route ('services')}}">
        <button class="services-button">Services</button>
    </a>

    
</body>
</html>