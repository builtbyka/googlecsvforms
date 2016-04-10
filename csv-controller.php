<?php 
    include "templates/topandtail/header.php";
    set_include_path($_SERVER['DOCUMENT_ROOT'].'/googlecsvforms/templates/php_templates/'); 
    $loadTemplate = "templates/php_templates/{$template}.php";
	if (file_exists($loadTemplate)) {
 		include $loadTemplate;
 	}

	echo $content;


	include "templates/topandtail/footer.php";

?>