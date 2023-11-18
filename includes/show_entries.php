<?php
  if(!isset($_SESSION['User']))
    header("location:index.php");
?>

<?php
      $sql = "SELECT * 
              FROM entries 
              ";
      $pquery = $db->query($sql);
?>


<div class="contact1">
    
		<div class="container-contact1">
            
			<!--Table-->
            <table class="table table-striped w-auto no-wrap" id="entries">

              <!--Table head-->
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Subject</th>
                  <th>Message</th>
                </tr>
              </thead>
              <!--Table head-->

              <!--Table body-->
              <tbody>
                <tr class="table-info">
                    <?php while ($parent = mysqli_fetch_assoc($pquery)) : ?>
                    <tr class="table-info">
                      <th scope="row"><?php echo $parent['id'];?></th>
                      <td><?php echo $parent['name'];?></td>
                      <td><?php echo $parent['email'];?></td>
                      <td><?php echo $parent['subject'];?></td>
                      <td><?php echo $parent['message'];?></td>
                    </tr>
                <?php endwhile;?>
              </tbody>
              <!--Table body-->


            </table>
            <!--Table-->
            
            <a href="logout.php" class="contact1-form-btn" role="button" id="logoutButton">Logout</a>
		</div>
	</div>