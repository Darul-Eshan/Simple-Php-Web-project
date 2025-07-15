<?php include 'header.php';?>
<section class="py-5 bg-secondary-subtle">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">Series</div>
                    <div class="card-body">
                        <form action="web.php" method="post">
                            <div class="row mb-3">
                                <label class="col-md-3">Start Name</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="start_number">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">End Name</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="end_number">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Result</label>
                                <div class="col-md-9">
                                    <input type="text" value="<?php echo isset($_GET['result']) ? $_GET['result'] : '';?>" class="form-control" >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" name="series_btn" value="Make Result">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>
<?php include 'footer.php';?>
