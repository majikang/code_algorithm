<?php
//查找字符串中空格，使用%20替换，时间复杂度为n
$s = 'abc d e fg'; 
$count=0;
$arr=str_split($s,1); 
for ($i=0; $i < strlen($s); $i++) { 
	if ($arr[$i]==' ') {
		$count++;		
	}
}
$str=array();
for ($i=0; $i < strlen($s); $i++) { 

	if ($arr[$i]==' ') {
		$str[]='%';
		$str[]='2';
		$str[]='0';		
	}else{
		$str[]=$arr[$i];
	}

}
print_r($str);

var_dump(str_split("上海还上222",1));