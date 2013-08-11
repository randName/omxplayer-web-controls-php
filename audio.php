<?php
//error_reporting(E_ALL);

$script = basename(__FILE__); // the name of this script

if ( !empty($_REQUEST['output']) ) {

	$output = $_REQUEST['output'];

	if ( $output != "hdmi" && $output != "local" ){
		echo 'error - output can only be hdmi or local';
		die();
	} else {
		if ( file_put_contents('./output', $output) ) {
			echo 'config saved - OK';
			header("Location: omxplayer.php");
		} else {
			echo 'error saving output - please fix permissions';
			die();
		}
	}
} else {
	echo "<html><head><title>OMXPlayer Audio selection</title></head><body>";
	echo "Please choose the audio output:";
	echo "<a href=\"{$script}?output=hdmi\"><button type=\"button\">HDMI</button></a>";
	echo "<a href=\"{$script}?output=local\"><button type=\"button\">LOCAL</button></a>";
	echo "</body></html>";
}
?>
