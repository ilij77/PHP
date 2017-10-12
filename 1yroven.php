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
<?

?>
<br> <h1> Функции</h1> <br>



<?php
function say($name="Guest",$h=3){
echo "<h$h> Hello, $name!</h3>";
}
say("Mike",1);
$n="John";
say($n,2);
say();
$str="say";
$str();
function foo (){
    static $x=0;
    echo $x++;
}
foo();
foo();
foo();
?>
<br>
<?
function sum($s1, $s2, &$a, &$b, &$c){
    $a=$s1*$s2;
    $b=$s1-$s2;
    $c=$s1/$s2;

    return $s1+$s2;
}
$rez=sum(1,2,$mult,$dif,$sub);

echo $rez ."-" .$mult."-" . $dif."-" . $sub;
?>
<tr></tr>
<?=$mult;
?>

<?php

function my_count($var, $mode=0){
    if(is_null($var))return 0;
    if (!is_array($var))return 1;
    $cnt=0;
    foreach ($var as $v){
        if (is_array($v) and $mode)
            $cnt+= my_count($v,1);

        $cnt++;}
    return $cnt;
}

?>
<?php
function ds(){
    echo func_num_args();
    echo( func_get_args());


}


echo __LINE__;
echo __FILE__;
