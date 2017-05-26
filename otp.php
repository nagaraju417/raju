<center>

<?php
session_start();
 $dbname=$_SESSION['dbname'];  
?>
<form action="json1/index.php" method="post">
Enter OTP sent to your registered email.:<input type="text" name="otp" /><BR /><BR />
<input type="submit" name="submit" value="PROCEED" />
</form>





