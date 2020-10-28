<?php
class base
{
function add($a,$b)
{
$res=$a+$b;
echo "Sum of two number = ".$res;
}
}
class child extends base
{
function add($a,$b)
{
$result=$a.$b;
echo "Sum of the string is " .$result;
}
}
$obj= new child();
$object=new base();
$object->add(1000,500);
echo "<br>";
$obj->add("hello","world");
echo"<br>";
$obj->add(1,"hello");
?>