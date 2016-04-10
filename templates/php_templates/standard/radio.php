<?php
	for ($x = 0; $x < count($inputs); $x++) {
		$content .= '<input '.(isset($required) && $required === false ? '' : 'required').' type="'.$inputType.'" name="'.$data.'" value="'.$inputs[$x].'"><span>'.$inputs[$x].'</span><br>';
	}
?>