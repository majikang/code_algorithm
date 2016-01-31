<?php
error_reporting(0);
//题目：二维数组中的查找
//生成一个二维数组a[2][3]={1，2，3，4，5，6，7，8，9，10，11，12}
$arr = array(array(1,2,3),array(4,5,6),array(7,8,9),array(10,11,12));
$findnum=5;
for ($i=3; $i >= 0; --$i) { 
	if ($findnum==$arr[$i][0]) {
		echo "找到啦！在数组arr[".$i."][0]";
	}elseif ($findnum>$arr[$i][0]) {
		for ($j=0; $j <= 2; ++$j) { 
			//echo "string";
			if ($findnum==$arr[$i][$j]) {
				echo "找到啦！在数组arr[$i][$j]";
			}

		}
	}
	
}
?>