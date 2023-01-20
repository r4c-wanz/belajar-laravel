<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="image">
            <img src="{{ $foto }}" alt="images me" width="240px">
        </div>
        <h2><?= $name; ?></h2>
        <p><?= $job; ?></p>
        <p class="deskripsi">
            <?= $description; ?>
        </p>
        <div class="button">
            <a href="/about" class="btn-about-me">About</a>
            <a href="/contact" class="btn-contact-me">Contact</a>
        </div>
    </div>
</body>
</html>