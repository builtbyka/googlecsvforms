<?php
	include "question.php";
	(isset($inputType) ? include "standard/".$inputType.".php" : include "standard/text.php");
	 $content .='<input type="submit" value="Submit"></form>';
?>