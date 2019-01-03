<?php
require_once('includes/dashboard-head.php');
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
    <div class="col-lg-5 ml-auto">
     <h2>Registration for admin</h2><hr>
     <form method="post" action="register_post.php">
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Give your name" name="name">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" placeholder="Enter your password" name="pass">
  </div>



  <button type="submit" class="btn btn-primary">Registration</button>
</form>

    </div>
  </div>
</div>






<?php
require_once('includes/dashboard-footer.php');
?>
