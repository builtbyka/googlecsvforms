<?php
	$slider = true;
	$max = (isset($max) ? $max : '5');
	$min = (isset($min) ? $min : '1');
	$step = (isset($step) ? $step : '1');
	$startVal = (isset($startVal) ? $startVal : '3');
		$content .= '
		<div class="simple-slider">
		<input id="s'.$y.'" type="text" name="'.$question.'" class="sliderText"/>
		<div data-minlabel="'.$minLabel.'" 
		data-maxlabel="'.$maxLabel. '" 
		data-max="'.$max. '" 
		data-min="'.$min.'" 
		data-startval="'.$startVal.'" 
		data-step = "'. $step.'" name="'.$question.'" class="slider" id="s'.$y.'Slider"/></div></div>
		';

?>