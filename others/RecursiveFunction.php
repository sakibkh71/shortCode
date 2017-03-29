<?php 

// function factorial($number) { 

//     if ($number < 2) { 
//         return 1; 
//     } else { 
//         return ($number * factorial($number-1)); 
//     } 
// }

// echo factorial(40)."<br/>***<br/>";

function reduce($val, $ary){

	if($val / 3 > 3){

	    $val = $val/3;
	    array_push($ary, $val);
	    echo $val." * ";

	    return reduce($val, $ary);
	}
	else{
	    echo "<br/><br/>";
	}

	return $ary;
}

$ary = [];

echo "<br>*********<br>";

var_dump(reduce(400, $ary));



