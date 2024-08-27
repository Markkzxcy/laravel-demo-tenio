<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="text-center">
    <h1 class="text-center line-through uppercase text-[100px] tracking-widest text-green-500 text-x1 font-bold shadow-x1">MY ROUTE 1</h1>
    <a href="{{ route ('cojie')}}">
    <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">
  {{ __('Go to demo 2!') }}
</button>
    </a>
</body>
</html>