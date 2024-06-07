<?php
$n1=(int)$_post['n1'];
$flag=0;
for($i=2;$i<=$n1/2;$i++)
{
if($n1%$i==0)
{
$flag=1;
break;
}
}
if($flag==0)
echo"number is prime";
else
echo"number is not prime";
?>