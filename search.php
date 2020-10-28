<?php

function linearSearch($arr, $len, $num)
{
for($i = 0;$i <$len; $i++)
{     
if($arr[$i] == $num)
{
return $i;
break;
}
}
return -1;
}
$arr = array(1,3,5,6,7,8,10,9,11);
$num = 9;
$len = count($arr);
$pos = linearSearch($arr, $len, $num);
if($pos == -1)
{
echo "<h2>Number is not found</h2>";
}
else
{
echo "<h2>Number $num is found at ".$pos." position</h2>";
}

?>