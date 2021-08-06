<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Blong</title>
    <link rel="stylesheet" href="app.css">
</head>
<body>
    <article>
        <h1><?= $post->title?></h1>

        <div>
            <?= $post->body; ?>
        </div>
    </article>

    <a href="/">Go Back</a>
</body>
</html>