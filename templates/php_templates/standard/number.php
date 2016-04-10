 <?php
		$content .='
		<input '.(isset($required) && $required === false ? '' : 'required').' type="number" Name="'.$data.'" value="">'.(isset($inputSuffix) ? $inputSuffix : '');
 ?>
