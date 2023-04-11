<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                   @forelse ($movies as $movie)
                       <div>
                        <h3>{{$movie->title}}</h3>
                        <h3>{{$movie->original_title}}</h3>
                        <h3>{{$movie->nazionality}}</h3>
                        <h3>{{$movie->date}}</h3>
                        <h5>{{$movie->vote}}</h3>
                       </div>   
                   
                   @empty
                       
                   

                       
                   @endforelse
                </div>
            </div>

        </div>
    </main>

</body>

</html>