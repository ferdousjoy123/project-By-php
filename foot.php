<?php
require_once('includes/dashboard-head.php');
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
    <div class="col-lg-5 ml-auto">
     <h2> Make Your Foot</h2><hr>
     <form method="post" action="foot-post.php" enctype="multipart/form-data">
  <div class="form-group">
    <input type="text" class="form-control" placeholder="About company" name="logotext">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter contact title" name="contact">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter contact details" name="context">
  </div>
  <div class="form-group">
    <input type="email" class="form-control" placeholder="Enter email" name="email">
  </div>
  <div class="form-group">
      <input type="number" class="form-control" placeholder="Enter phone" name="phn">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" placeholder=" enter link title" name="link">
    </div>

    <div class="form-group">
      <input type="text" class="form-control" placeholder="Enter link 1" name="link1">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Enter link 2" name="link2">
    </div>



  <div class="form-group">
      <input type="file" name="pic">
     </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

    </div>
  </div>
<?php
require_once('includes/dashboard-footer.php');
?>
