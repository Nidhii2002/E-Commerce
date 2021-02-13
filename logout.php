<?php

session_destroy();
header("Location: index.php")
?>
<form action="logout.php" method="post">
	<button class="btn btn-primary" type="submit" name="logout">Logout</button>
</form>

