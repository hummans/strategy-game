<?php
/**
 * @Author: Prabhakar Gupta
 * @Date:   2016-01-31 13:02:57
 * @Last Modified by:   Prabhakar Gupta
 * @Last Modified time: 2016-02-04 18:32:59
 */

require_once 'inc/connection.inc.php';
require_once 'inc/login_functions.inc.php';
require_once 'inc/function.inc.php';

if(!isLoggedin()){
	header("Location: index.php");
}

?>

<!doctype html>
<html>
<head>
<?php

require_once 'inc/layout/stylesheets.inc.php';

?>
</head>
<body>
<?php

	include 'inc/layout/header.inc.php';

?>
<div class="container">
	<form method="POST">
		<div class="form-group">
			<label>Move *</label>
			<select class="form-control" required name="move" id="move_select_input">
				<option value="0">Pass (Sure, kiddo?)</option>
				<option value="1">Take Loan</option>
				<option value="2">Attack (That's more like it)</option>
				<option value="3">Trade</option>
			</select>
		</div>
		<button type="submit" class="btn btn-default" name="submit">Submit</button>
	</form>
</div>


<?php

require_once 'inc/layout/scripts.inc.php';

?>
<script src="js/play.js"></script>
</body>
</html>