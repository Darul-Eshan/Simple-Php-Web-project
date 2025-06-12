<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\css\bootstrap.css">

    <title>My php project</title>
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a href="#" class="navbar-brand">My PHP Project</a>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a href="#" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">About</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Image</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>
    </div>
</nav>
    <section class="py-5 bg-danger-subtle">
        <div class="container">
            <div class="row">
                <?php foreach($products as $product){?>

                <div class="col-md-4">
                    <div class="card">
                        <img src="<?php echo $product['image'];?>" height="280" alt="">
                        <div class="card-body">
                            <h4><?php echo $product['name'];?></h4>
                            <p><?php echo $product['price'];?></p>
                            <p><?php echo $product['description'];?></p>
                        
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    
    <script src="assets\js\bootstrap.bundle.js"></script>
</body>
</html>