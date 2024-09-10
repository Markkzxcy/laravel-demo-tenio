<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <div class ="mx-auto text-center bg-gray-200">
        <h1 class="font-bold mb-5">THIS IS CALCULATOR</h1>
        
        <form action="{{route('calculated')}}" method="POST" class="mt-5">
            @csrf
            <label class="mt-5" for="num1">Number 1</label>
            <input type="text" id="num1" name="number1" autofocus>
            @if( $errors -> has ('number1'))
                <span class="text-danger">{{ $errors ->first('number1')}}</span>
            @endif
            <div class="mt-4"></div>
           
            <label for="num2">Number 2</label>
            <input type="text" name="number2" id ="num2" >
            @if( $errors -> has ('number2'))
                <span class="text-danger">{{ $errors ->first('number2')}}</span>
            @endif
            <br>
            <button type="submit" class="w-24 bg-blue-500 px-4 py-4 text-white 
            hover:bg-blue-800 mt-5 mb-4" type="submit">ADD</button>
        </form>
        <h3 class="text-x1">Result</h3>
    </div>
    @if($result != null)
        <span class="text-x1">Sum: {{$result}}</span>
    @else
        <span class="text-x1">Sum: not yet calculated</span>
    @endif    
</body>
</html>