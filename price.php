<?php
require_once('includes/dashboard-head.php');
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
    <div class="col-lg-5 ml-auto">
     <h2> Make Your Price Plan</h2><hr>

     <form method="post" action="price-post.php" enctype="multipart/form-data">
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter text" name="title">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter text" name="price">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter text" name="times">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter text" name="list">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter status" name="status">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>



    </div>
  </div>
</div>

<?php
require_once('includes/dashboard-footer.php');
?>
