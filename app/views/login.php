<?php include 'header.php';?>
    <section class="py-5 bg-secondary-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">Series</div>
                        <div class="card-body">
                            <p class="text-danger text-center"><?php echo isset($_GET['message'])?$_GET['message']:'';?></p>
                            <form action="web.php" method="post">
                                <div class="row mb-3">
                                    <label class="col-md-3">User Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="username">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success" name="login_btn" value="Login">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
<?php include 'footer.php';?>
<?php
