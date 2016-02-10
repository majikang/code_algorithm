<?php
function king($n,$m){

	$monkey=range(1,$n);//模拟建立一堆猴子

	$i=0;
	while(count($monkey)>1){
		$i+=1;//开始查猴子
		$head =array_shift($monkey);//删除并列出第一个猴子
/*		echo "<br>";
		var_dump($head);
		echo "<br>";*/
		if($i%$m!=0){
			array_push($monkey,$head);//如果没数到m或m的倍数,则把该猴子放回$monkey的尾部去.
		echo "<br>";
		var_dump($monkey);
		echo "<br>";
		}//否则扔掉死猴子
	}
	return$monkey[0];
}
echo'剩余',king(3,4),'号猴子';

?>