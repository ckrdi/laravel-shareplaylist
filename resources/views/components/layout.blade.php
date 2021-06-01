<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>Share Playlist</title>
</head>
<body class="font-nunito">

  {{--  this is dummy script for flash of unstyled content  --}}
  <script>0</script>

  <div class="pt-4 pb-3 mb-10">
    <nav class="grid items-center max-w-screen-xl my-0 mx-auto sm:flex">
      <h1 class="ml-4 text-2xl">Share Playlist</h1>
      <div class="grid mx-4 gap-4 sm:ml-auto sm:flex">
        <span class="p-1">Hello there, John</span>
        <a href="#" class="px-2 py-1 rounded-lg"><span >All</span></a>
        <a href="#" class="px-2 py-1 rounded-lg"><span>Home</span></a>
        <a href="#" class="px-2 py-1 rounded-lg"><span>Logout</span></a>
        <a href="#" class="px-2 py-1 rounded-lg"><span >Login</span></a>
      </div>
    </nav>
  </div>

  {{ $slot }}
  
</body>
</html>