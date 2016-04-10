<?php
	for ($x = 0; $x < count($inputs); $x++) {
		$content .= '<div><input class="'.$data.'" type="'.$inputType.'" value="'.$inputs[$x].'">'.$inputs[$x].'</div>';
	}
	$content .='<input type="hidden" '.(isset($checkMax) ? 'data-checkmax="'.$checkMax.'"' : '').' class="check-string" type="text" Name="'.$data.'" value="">';
?>