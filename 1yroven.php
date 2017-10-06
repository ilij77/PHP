header('Content-type: text/plain; charset=utf-8');
<?php
/**
 * Created by PhpStorm.
 * User: Илья
 * Date: 06.10.2017
 * Time: 11:20
 */
$x="lklkds?";
$y= $x{strlen($x)-1};
echo $y;

$size=ini_get("post_max_size");
echo $size;
$size="43545";
$y=$size{strlen($size)-1};
echo $y;

switch (strtoupper($y)){
    case "M":
        echo "Размер файла".(int)($size)."Мегабайт";break;
    case "K":
        echo "Размер файла".(int)($size)."Килобайт";break;
    case "G":
    echo "Размер файла".(int)($size)."Гигабайт";break;
    default:
        echo "Размер файла".(int)$size."Байт";break;

}

?>
<br> <p> Масивы</p><br>
<?php

$arr=[];
$arr=["name"=>"John","login"=>"root","pass"=>"12345"];
//echo count($arr);
$arr[]=25;
$arr[99]=true;
//print_r($arr);
//var_dump($arr);
echo is_array($arr);
echo "\n";
echo gettype($arr);

foreach ($arr as $key=>$val){
    echo "$key : $val"."<br>";
}

?>
<br> <h1> Циклы</h1> <br>
<?php



for ($b=1, $j=5;$b<=20; $b++){
if ($b==5) continue;
    print $j=$b."<br>";
};

$var="HELLO";
$i=0;
$len=strlen($var);
while ($i<$len){
    echo $var{$i++}."<br>";

}
$arr=[2=>1,7=>2,3,4,5];



$f=1;
do{
    echo $f++;
} while($f<=10);

?>
