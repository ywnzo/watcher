<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Watcher is a platform for watching movies and TV shows.">
    <meta name="keywords" content="watcher, movies, tv shows, streaming">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/fd483a54f1.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="public/css/style.css?v=<?php echo time(); ?>">
    <link rel="icon" type="image/x-icon" href="public/img/logo.svg">
    <title>Watcher</title>
</head>
<body>

<header>
    <a id="page-title" href="index.php"><img src="public/img/logo.svg" alt=""><h1>Watcher</h1></a>

    <div class="row al-c">
        <form class="search-wrapper" method="GET">
            <input type="text" name="search">
            <div class="search-icon-wrapper">
                <i class="search-icon fa-solid fa-magnifying-glass"></i>
            </div>
        </form>
        <a id="profile-icon" href=""><i class=" fa-solid fa-circle-user"></i></a>

    </div>

</header>
