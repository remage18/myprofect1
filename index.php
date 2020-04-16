<?php
	echo "Hello world!<br>";

	$text1 = "Hello world!";
	echo $text1;

	$text2 = "Hello";
	$text1 = $text2;
	echo '<br>'.$text1." world!".'<br>';

	$numbers = "1 2 3 4 5";

	$arr = explode(' ', $numbers);

	/*$elem = sizeof($arr);
	for($i = 0; $i < $elem; $i++){
		$arr[$i] *= 2;
		echo $arr[$i].' ';
	}*/
	foreach ($arr as $value){
		$value *= 2;
		echo $value.' ';
	}

	$array = [
		'str' => 'hello',
		2 => 1,
		'num' => 10,
		2,
	];
	foreach ($array as $key => $value) {
		echo '<br>'.$key.' - '.$value;
	}
?>

<a href="oop.php"><br>OOP</a>