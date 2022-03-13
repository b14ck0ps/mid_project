<?php 
	// require_once('../controllers/validuser.php.php');
    require_once('../controllers/customElements.php');
?>
<!DOCTYPE html>
<html lang="en">
<body>
	<center>
	<a href='../controllers/deleteUser.php?type=<?=$_REQUEST['type']?>&id=<?=$_REQUEST['id']?>'style="color:Red";> Confirm Delete </a> | <a href="../controllers/userinfo.php?type=<?=$_REQUEST['type']?>&id=<?=$_REQUEST['id']?>"><strong>Cancle</strong></a>
	</center>
</body>
</html>