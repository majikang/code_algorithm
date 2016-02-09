<?php
error_reporting(0);
//递归实现
function gcd($a,$b)  /*  辗转相除法求最大公约数 */   
{
	if (!b) {
		return a;
	} else {
		return gcd(b,a%b);
	}
}
//迭代实现
function gcd0($a,$b)
{
        $c=$a%$b;
        while($c){
                $a=$b;
                $b=$c;
                $c=$a%$b;
        }
        return $b;
}

function gcd1($a,$b){
	if($a!=$b){
		if ($a>$b){
         	$a=$a-$b;
         	return gcd1($a,$b);   
        }   
        else{
         	$b=$b-$a;
         	return gcd1($a,$b);
        }
	}else{
		return $a;  
	} 
	    
}
echo "最大公约数为".gcd1(5,10);
?>