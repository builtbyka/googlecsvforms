 <?php
		$content .='
		<input type="text"'.(isset($required) && $required === false ? '' : 'required').' Name="'.$data.'" value="">'.(isset($inputSuffix) ? $inputSuffix : '');
 ?>