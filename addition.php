<?php
class Base
{
function add($a,$b)
{
$res=$a+$b;
echo "Sum of two number = ".$res;
}
}
class Child extends Base
{
function add($a,$b)
{
$result=$a.$b;
echo "Sum of the string is " .$result;
}
}
$obj= new Child();
$object=new Base();
$object->add(1000,500);
echo "<br>";
$obj->add("hello","world");
echo"<br>";
$obj->add(1,"hello");
?>
