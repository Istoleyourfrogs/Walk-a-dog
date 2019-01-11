<?php
	require "includes/database.inc.php";
	require "includes/functions.inc.php";
?>
<form>
	<textarea name="comment"></textarea>
	<button  type="submit" name="submit">>Send</button>

</form>
<?php
	echo $rand = rand(1111111111,9999999999);
?>
