<script type="text/javascript">
    function redirect_to_homepage(){
		window.setTimeout(function() {
	        window.location.href='admin.php';
	    }, 500);
	}
</script>

<?php
	session_start();
	require_once 'core/init.php';

	if(isset($_POST['login_button'])){
			$query = "SELECT * FROM admin WHERE username = '".$_POST['username']."' and password = '".$_POST['password']."' ";
			$result = mysqli_query($db, $query);

			if(mysqli_fetch_assoc($result)){
				$_SESSION['User']=$_POST['username'];
				header("location:show_entries.php");
				exit();
			}
			else{
				echo "<script type='text/javascript'>alert('Wrong Credentials');</script>";
			    echo "<script type='text/javascript'>redirect_to_homepage();</script>";
			}

	}
		
?>