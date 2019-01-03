<?php
require_once('includes/dashboard-head.php');
require_once('database-connection.php');
$qry_string="SELECT * FROM msg";
$query=mysqli_query($database_connection, $qry_string);

?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
  <div class="row">
    <div class="col-md-12">
      <h1>See Your All Message</h1>
      <table style="width:100%" class="table">
      <tr>
        <th>SL</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Comment</th>
      </tr>

   <?php
   $count=1;
foreach ($query as $joy) {


    ?>
    <tr  <?php
          if($joy['status']==1){

                ?>
                      style="background-color:#e5e5e5";
                     <?php
          }
          ?>>
      <td><?=$count?></td>
      <td><?=$joy['name']?></td>
      <td><?=$joy['email']?></td>
      <td><?=$joy['phn']?></td>
      <td><?=$joy['message']?></td>
      <td><button href="#"class='btn btn-danger delete' value='Delete.php?id=<?=$joy['id']?>'>Delete</button></td>

      <td>
        <?php
        if($joy['status']==1){

?>
  <a  href="readmark.php?id=<?=$joy['id']?>"  class='btn btn-info'>mark as read</a>
        <?php
}
         ?>



      </td>

    </tr>
    <?php
     $count++;
}
     ?>




      </table>

    </div>
  </div>
</div>


<?php
require_once('includes/dashboard-footer.php');
?>
<script type="text/javascript">
$( document ).ready(function() {
$('.delete').click(function(){
  var redirected_link = $(this).val();
  Swal({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.value) {
   window.location.href=redirected_link;
    }
  })



});
});
</script>
