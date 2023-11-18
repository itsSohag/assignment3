<script type="text/javascript">
    function redirect_to_homepage(){
		window.setTimeout(function() {
	        window.location.href='index.php';
	    }, 500);
	}
</script>

<?php
require_once 'core/init.php';
	
	if(isset($_POST['submit_button'])){
			$query = "INSERT INTO entries(name, email, subject, message)
					  Values ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['subject']."', '".$_POST['message']."')";
			$result1 = $db->query($query);
            echo "<script type='text/javascript'>alert('Message Sent');</script>";
			echo "<script type='text/javascript'>redirect_to_homepage();</script>";
		}
?>