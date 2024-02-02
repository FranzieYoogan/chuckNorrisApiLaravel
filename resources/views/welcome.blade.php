<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('css/stuff.css')}}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

        <!-- Styles -->

        <style>

            body {  
                font-family: minecraft;

                background-size: 100%;
                background: url("{{asset('img/wallpaper.png')}}");
                background-repeat: no-repeat;
                background-position-y: 20%;
                overflow: hidden;
                width: 100%;
                height: auto;
        
                    
            }

            @font-face {
  font-family: minecraft;
  src: url('font/Minecraft.ttf');
}

        </style>

    </head>
    <body>

        <form class="containerStyle" method="POST" action="/">
            @csrf

            <section >

                <div class="menuStyle">   
                    <div class="resultMenuStyle">
      
                        <h1 class="title">CHUCK NORRIS CATCH PHRASES</h1>
                        <h1 class="createdAtStyle">@php if(isset($response2)) { echo  "CREATED AT: " .
                                substr($response2,0,19);
                        } @endphp</h1>

                        <h1 class="resultStyle">@php if(isset($response)) {
                       echo '"' . $response. '"'; } @endphp</h1>
        </div>
                  
                    <button type="submit" name="submit" class="buttonStyle text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">GENERATE STATEMENTS</button>

            </div>

  

            </section>

     

        </form>
      
    </body>
</html>
