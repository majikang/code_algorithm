<?php
error_reporting(0);
//题目：二维数组中的查找,每行每列按照递增或递减顺序
//生成一个二维数组a[2][3]={1，2，3，4，5，6，7，8，9，10，11，12}
/*
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
*/
//下面是更新后的代码，优化了复杂度，更高效一点。。
$arr = array(array(1,2,3),array(4,5,6),array(7,8,9),array(10,11,12));
$number = 4;
$row=0;
$col=2;
while ( $row>=0 && $row<=3 &&  $col>=0 && $col<=2) {
	if ($arr[$row][$col]==$number) {
		echo "找到啦！在数组arr[".$row."][".$col."]";	
		exit();
	} else if ($arr[$row][$col]>$number) {
		--$col;
	}else{
		++$row;	
	}
}
?>