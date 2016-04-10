<?php
switch ($inputType) {
    case 'radio':
      include "standard/radio.php";
        break;
    case 'checkbox':
        include "standard/checkbox.php";
        break;
    case 'dropdown':
        include "standard/dropdown.php";
        break;
    default:
        include "standard/text.php";
}
?>