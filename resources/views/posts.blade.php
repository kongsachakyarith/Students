<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Blong</title>
    <link rel="stylesheet" href="app.css">
</head>
<body>
@foreach ($posts as $post)
    <article>
        <a href="/posts/<?= $post->slug; ?>">
            <h1>{{$post->title;}}</h1>
        </a>
        

        <div>{{$post->excerpt;}}</div>
    </article>
@endforeach
</body>
</html>