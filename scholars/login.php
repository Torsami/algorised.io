<fieldset style="text-align:center; width:35%;">
<legend>LOG-IN</legend>
<form action="" method="POST">
<p><input type="text" name="addnum" placeholder="Student I.D." required/></p>
<p><input type="email" name="email" placeholder="Email" required/></p>
<p><input type="password" name="password"  placeholder="Password" required/></p>
<p><input type="submit" name="login" value="Log-in" /></p>
</form>


<?php
if(ISSET($_POST['login'])){

	echo '<font color="red">Invalid login credentials!! Please try again...</font>' ;
}
?>
</fieldset>