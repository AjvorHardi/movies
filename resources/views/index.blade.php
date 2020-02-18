<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach ($movies as $movie)
        <a href="movies/{{$movie->id}}"><h3>{{ $movie->title }}</h3></a>
        <p>{{ $movie->storyline }}</p>
    @endforeach
</body>
</html>