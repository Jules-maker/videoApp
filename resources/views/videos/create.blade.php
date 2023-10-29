<!DOCTYPE html>
<html>
<head>
    <title>Upload Video</title>
</head>
<body>
    <h1>Upload Video</h1>

    <form action="{{ route('videos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="title">Title:</label>
        <input type="text" name="title" id="title">

        <label for="video">Video:</label>
        <input type="file" name="video" id="video">

        <button type="submit">Upload</button>
    </form>
</body>
</html>
