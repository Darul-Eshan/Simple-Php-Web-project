<?php include 'header.php'; ?>
<section class="py-5 bg-secondary-subtle">
    <div class="container">
       <div class="row">
           <div class="col-md-6 mx-auto">
               <div class="card">
                   <div class="card-header">Full Name Program</div>
                   <diV class="card-body">
                       <form action="web.php" method="post" >
                        <div class="row mb-3">
                           <label class="col-md-3">Frist Name</label>
                           <div class="col-md-9">
                               <input type="text" name="first_name" class="form-control" />
                           </div>
                       </div>
                       <div class="row mb-3">
                           <label class="col-md-3">Last Name</label>
                           <div class="col-md-9">
                               <input type="text" name="last_name" class="form-control" />
                           </div>
                       </div>
                       <div class="row mb-3">
                           <label class="col-md-3">Full Name</label>
                           <div class="col-md-9">
                               <input type="text"  value="<?php echo isset($_GET['result']) ? $_GET['result'] : ' '; ?>" class="form-control" />
                           </div>
                       </div>
                       <div class="row mb-3">
                           <label class="col-md-3"></label>
                           <div class="col-md-9">
                               <input type="submit" name="full_name_btn" class="btn btn-success" value="Make Full Name" />
                           </div>
                        </div>
                       </form>
                   </diV>
               </div>
           </div>
       </div>
    </div>
</section>
<?php include 'footer.php'; ?>