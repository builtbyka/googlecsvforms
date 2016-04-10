<?php
$url = "YOUR GOOGLE SCRIPT";
$row = 0;
$vars = array();
    if (($handle = fopen($url, "r")) !== FALSE) {
        while (($dataCSV = fgetcsv($handle, 10000, ",")) !== FALSE) { // loop through csv
        	$row ++;
        	$a = '';
            $num = count($dataCSV);      
            if($row === 1){  // loop through headers to get variable names
              	for($i = 0; $i <= $num; $i++) {
             		array_push($vars, $dataCSV[$i]);
    	       }
            }else if($row > 1){ // deal with arrays etc
         		$page = $_GET['page'];
                if($dataCSV[0] === $page){
    				for ($c=0; $c < $num; $c++) {
    					if($dataCSV[$c] !== ''){
                            if(substr($dataCSV[$c], 0, 1) === '('){ 
                                $dataCSV[$c] = substr($dataCSV[$c], 1, -1);
                                $dataCSVArr = array_map('trim', explode(',', $dataCSV[$c]));
                                for($q = 0; $q < count($dataCSVArr); $q++){
                                    if($dataCSVArr[$q] === 'TRUE' || $dataCSVArr[$q] === 'FALSE'){($dataCSVArr[$q] === 'TRUE' ? $dataCSVArr[$q] = true : $dataCSVArr[$q] = false );};
                                    if(substr($dataCSVArr[$q], 0, 1) === '('){
                                        $dataCSVArr[$q] = substr($dataCSVArr[$q], 1, -1);
                                        $dataCSVArr[$q] = array_map('trim', explode('/', $dataCSVArr[$q]));
                                    };
                                    ${$vars[$c]}[] = $dataCSVArr[$q];
                                }
                                //${$vars[$c]} = array_map('trim', explode(',', $dataCSV[$c]));
                            }else{
                                if($dataCSV[$c] === 'true' || $dataCSV[$c] === 'false'){($dataCSV[$c] === 'true' ? $dataCSV[$c] = true : $dataCSV[$c] = false );};
                                ${$vars[$c]} = $dataCSV[$c];
                            }
    						
    					}
            		}
    	 	  }
    	 }
            
    }

    include "csv-controller.php";
    fclose($handle);
}