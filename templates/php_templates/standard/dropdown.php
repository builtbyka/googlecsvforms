<?php 
	$content.='<select '.(isset($required) && $required === false ? '' : 'required').' name="'.$data.'">';
	for ($x = 0; $x < count($inputs); $x++) {
		$content .= '<option value="'.$inputs[$x].'">'.$inputs[$x].'<br>';
	}
	$content .='</select>';
?>