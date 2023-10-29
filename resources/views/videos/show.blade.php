<!DOCTYPE html>
<html>
<head>
    <title>{{ $video->title }}</title>
</head>
<body>
    <h1>{{ $video->title }}</h1>

    <video controls>
        <source src="{{ asset('storage/' . $video->video) }}" type="video/mp4">
    </video>
</body>
</html>
