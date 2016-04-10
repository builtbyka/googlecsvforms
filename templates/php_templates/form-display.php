<?php
    $content .= '<h1>Form Template</h1><p>You can add any standard settings you like. Say its a mortgage form and you always ask "Tracker or Fixed" you can include it in a template.</p>';
    include "helper/form-header.php";
    (isset($questions) ? include "helper/question-loop.php" : include "helper/question-single.php");
?>