<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app/assets/css/bootstrap.css">

    <title>My php project</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a href="#" class="navbar-brand mb-0 small">My PHP Project</a>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a href="web.php?page=home" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="web.php?page=about" class="nav-link">About</a>
            </li>
            <li class="nav-item">
                <a href="web.php?page=contact" class="nav-link">Contact</a>
            </li>
            <li class="nav-item">
                <a href="web.php?page=calculator" class="nav-link">Calculator</a>
            </li>
            <li class="nav-item">
                <a href="web.php?page=series" class="nav-link">Series</a>
            </li>

            <?php if (isset($_SESSION['id'])){ ?>
                <li class="nav-item">
                    <a href="web.php?page=logout" class="nav-link">Logout</a>
                </li>
            <?php } else { ?>
                <li class="nav-item">
                    <a href="web.php?page=login" class="nav-link">Login</a>
                </li>
            <?php } ?>}



        </ul>
    </div>
</nav>