<!DOCTYPE html>
<html>
<head>
    <title>List of Videos</title>
</head>
<body>
    <h1>List of Videos</h1>

    <ul>
        @foreach ($videos as $video)
            <li><a href="{{ route('videos.show', $video->id) }}">{{ $video->title }}</a></li>
        @endforeach
    </ul>
</body>
</html>
