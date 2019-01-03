<?php
require_once('includes/dashboard-head.php');
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
    <div class="col-lg-5 ml-auto">
     <h2> Make Your Banner</h2><hr>
     <form method="post" action="banner-post.php">
  <div class="form-group">
    <input type="text" class="form-control" placeholder="banner title" name="first_title">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter text" name="first_title_span">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter text" name="second_title">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter text" name="second_title_span">
  </div>
 

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

    </div>
  </div>
</div>






<?php
require_once('includes/dashboard-footer.php');
?>
