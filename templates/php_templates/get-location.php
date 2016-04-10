<?php
    $content .= '<h1>Get Location Template</h1><p>This will always as for you location</p>';
    include "helper/form-header.php";
    $content .= '
	<label>Location</label>';
    $content .='<div class="input-with-button"><input type="text" Name="Location" value=""><button class="get-location">Get current location</button></div>';
    (isset($questions) ? include "helper/question-loop.php" : include "helper/question-single.php");
?>