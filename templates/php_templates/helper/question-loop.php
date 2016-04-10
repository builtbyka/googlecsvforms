<?php
	$questionLoop = true;
	if(isset($splitGroupInto)){
		$dividedBy = count($questions) / $splitGroupInto;
		$divideCount = 1;
		$cluster = 1;
	}
	if(isset($splitQuestions)){
		$dividedBy = (count($questions) - 1) / count($inputsArr[0]);
		$divideCount = 1;
		$cluster = 1;
		$questionSaved = $questions[1];
	}
	for ($y = 0; $y < count($questions); $y++) {
		$question = $questions[$y];
		if(isset($splitQuestions) && $y === 0){
			$content .= '<div class="question-splitter">';
		}
		if(isset($splitGroupInto) || (isset($splitQuestions) && $y > 0)){
			(isset($clusterNames) ? $clusterName = $clusterNames[$y] : (isset($clusterName) ? $clusterName = $clusterName : $clusterName = 'Cluster'));
			$content .= ($divideCount === 1 ? '<div class="cluster cluster'.$cluster.'">' : '');
			if(isset($clusterNames)){
				if(isset($splitGroupInto)){$questions[$y] =  $questions[$y].' ['. $clusterName.']';};
			} else{
				if(isset($splitGroupInto)){$questions[$y] =  $questions[$y].' ['. $clusterName . ' ' . $cluster.']';};
			}
			
			if(isset($splitQuestions)){
				if(isset($chartType)){
					$questions[$y] =  $questions[0].' - '.$inputsArr[0][$cluster - 1];
				}else{
					$questions[$y] =  $questions[$y].' ['.$questions[0].' - '.$inputsArr[0][$cluster - 1].']';
				}
			};
		}
		$data = (isset($datas) ? $datas[$y] : $questions[$y]);
		$helpText = $helpTexts[$y];
		(isset($requireds) ? $required = $requireds[$y] : '');
		include "helper/question.php";
		$inputType = $inputTypes[$y];
		$inputSuffix = $inputSuffixs[$y];
		$inputs = $inputsArr[$y];
		$max = $maxs[$y];
		$min = $mins[$y];
		$step = $steps[$y];
		(isset($minLabels) ? $minLabel = $minLabels[$y] : '');
		(isset($maxLabels) ? $maxLabel = $maxLabels[$y] : '');
		(isset($startVals) ? $startVal = $startVals[$y] : '');
		(isset($checkMaxes) ? $checkMax = $checkMaxes[$y] : '');
		include "standard/".$inputType.".php";
		(isset($chars) && $chars[$y] !== '' ? $content.='<div class="char-limit" data-char="'.$chars[$y].'"><p>'.$chars[$y].'</p></div>'  : '');
		if(isset($wrapper)){$content .= "</div>";};
		if(isset($splitQuestions) && $y === 0){
			$content .= '</div>';
		}
		if(isset($splitGroupInto) || (isset($splitQuestions) && $y > 0)){
			if($divideCount === $dividedBy){ $content .= '</div>'; $divideCount = 0; $cluster ++;};
			$divideCount ++;
		}
	}
	unset($question);
	
	$content .='<input type="submit" value="Submit"></form>';

?>