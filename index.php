<?php
if ( ! file_exists('omx_php.sh') ) {
	// send to setup
	header("Location: setup.php");
} else {
	header("Location: omxplayer.php");
}
?>
