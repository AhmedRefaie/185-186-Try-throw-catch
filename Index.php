<?php

$age=21;

try {
	
	if ($age>=21){
		
		echo '5od merasak wala3 el donia';
		
	} else {
		throw new Exception ('Not old enough.');
	}	
} catch (Exception $ex){
	echo 'Error: '.$ex->getMessage();
}

?>
