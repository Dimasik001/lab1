<!DOCTYPE html>
<html> 
<head> 
    <link rel="stylesheet" href="index.css">
<title>1</title>
</head>
<style>
body {
        background-image: url('q.jpg'); 
        background-repeat: no-repeat;
		text-align:center;
      }
</style>
   
   <div class="menu" >

<a href="#">1 задание</a><br>
<?php
 $num = range(1, 100);
echo array_sum($num);
?>
<br>
<a href="#">2 задание</a><br>

<?php
$str = "'a','b','c','d','f'";
$str = strtoupper($str);
echo $str; 
?>

<br>
<a href="#">3 задание</a><br>
<?php
$arr = [1, 2, 3,4,5,6,7];
echo count($arr);
?>
<br>
<a href="#">4 задание</a><br>
<?php
$arr = [1, 2, 3, 4];
echo $arr[count($arr) - 1];
?>
<br>
<a href="#">5 задание</a><br>
<?php
$arr = [1, 2, 3, 4];
echo var_dump(in_array(2, $arr));
?>
<br>
<a href="#">6 задание</a><br>
<?php
$arr = [1, 2, 3, 4, 5];
echo array_sum($arr);
?>
<br>
<a href="#">7 задание</a><br>
<?php
$arr = [1, 2, 3, 4, 5];
echo array_product($arr);
?>
<br>
<a href="#">8 задание</a><br>
<?php
$arr = [1, 2, 3, 4, 5];
echo array_sum($arr) / count($arr);
?>
<br>
<a href="#">9 задание</a><br>
<?php
$num = range(1, 100);
echo print_r($num);
?>
<br>
<a href="#">10 задание</a><br>
<?php
$az = range('a', 'z');
echo print_r($az );
?>
<br>
<a href="#">11 задание</a><br>
<?php
$num = range(1, 9);
echo implode('-', $num);
?>
<br>
<a href="#">12 задание</a><br>
<?php
echo array_sum(range(1, 100));
?>
<br>
<a href="#">13 задание</a><br>
<?php
echo array_product(range(1, 10));
?>
<br>
<a href="#">14 задание</a><br>
<?php
$num = [1, 2, 3];
$az = ['a', 'b', 'c'];
var_dump(array_merge($num, $az));
?>
<br>
<a href="#">15 задание</a><br>
<?php
$arr = [1, 2, 3, 4, 5];
var_dump(array_slice($arr, 1, 3));
?>
<br>
<a href="#">16 задание</a><br>
<?php
$arr = [1, 2, 3, 4, 5];
var_dump(array_splice($arr, 1, 2));
?>
<br>
<a href="#">17 задание</a><br>
<?php
$arr = [1, 2, 3, 4, 5];
var_dump(array_splice($arr, 1, 3));
?>
<br>
<a href="#">18 задание</a><br>
<?php
$arr = [1, 2, 3, 4, 5];
var_dump(array_splice($arr, 3, 0, ['a', 'b', 'c']));
?>
<br>
<a href="#">19 задание</a><br>
<?php
$arr = [1, 2, 3, 4, 5];
$arr1 = array_splice($arr, 1, 0, ['a', 'b']);
$arr2 = array_splice($arr, 6, 0, ['c']);
$arr3 = array_splice($arr, 8, 0, ['e']);
echo print_r($arr1+$arr2+$arr3);
?>
<br>
<a href="#">20 задание</a><br>
<?php
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
$keys = array_keys($arr);
$values = array_values($arr);
echo print_r($keys);
echo print_r($values);
?>
<br>
<a href="#">21 задание</a><br>
<?php
$arr1 = ['a', 'b', 'c'];
$arr2 = [1, 2, 3];
var_dump(array_combine($arr1, $arr2));
?>
<br>
<a href="#">22 задание</a><br>
<?php
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
var_dump(array_flip($arr));
?>



<br>
<a href="#">23 задание</a><br>
<?php
var_dump(array_reverse([1, 2, 3, 4, 5]));
?>
<br>
<a href="#">24 задание</a><br>
<?php
$arr =  ['a', '-', 'b', '-', 'c', '-', 'd'];
$pos = array_search('-', $arr);
print_r($pos);
?>
<br>
<a href="#">25 задание</a><br>
<?php
$arr =  ['a', '-', 'b', '-', 'c', '-', 'd'];
$pos = array_search('-', $arr);
var_dump(array_splice($arr, $pos, 1));
print_r($arr);
?>

<br>
<a href="#">26 задание</a><br>
<?php
$arr =  ['a', 'b', 'c', 'd', 'e'];
var_dump(array_replace($arr, [0 => '!', 3 => '!!']));
print_r($arr);
?>

<br>
<a href="#">27 задание</a><br>
<?php
$arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
var_dump(sort($arr)); // по возрастанию 
var_dump(rsort($arr)); // по убыванию 
var_dump(ksort($arr)); // по возрастанию ключей
var_dump(krsort($arr)); // по убыванию ключей
?>

<br>
<a href="#">28 задание</a><br>
<?php
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
echo $arr[array_rand($arr)];
?>

<br>
<a href="#">29 задание</a><br>
<?php
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
echo array_rand($arr);
?>

<br>
<a href="#">30 задание</a><br>
<?php
$arr = [1, 2, 3, 4, 5];
var_dump(shuffle($arr));
print_r ($arr);
?>

<br>
<a href="#">31 задание</a><br>
<?php
$num = range(1, 25);
shuffle($num);
print_r ($num);
?>

<br>
<a href="#">32 задание</a><br>
<?php
$num = range('a', 'z');
shuffle($num);
print_r ($num);
?>

<br>
<a href="#">33 задание</a><br>
<?php
$characters = 'abcdefghijklmnopqrstuvwxyz';
echo substr(str_shuffle($characters), 0, 6);

?>

<br>
<a href="#">34 задание</a><br>
<?php
$az = ['a', 'b', 'c', 'b', 'a','c'];
$q  = var_dump(array_unique($az));
print_r ($q);
?>

<br>
<a href="#">35 задание</a><br>
<?php
$arr = [1, 2, 3, 4, 5];
echo array_shift($arr);
echo array_pop($arr);
?>
<br>
<a href="#">36 задание</a><br>
<?php
$arr = [1, 2, 3, 4, 5];
array_unshift($arr,0);
array_push($arr, 6);
print_r ($arr);
?>
<br>
<a href="#">37 задание</a><br>
<?php
$arr = [1, 2, 3, 4, 5, 6, 7, 8];
$str = '';
while (!empty($arr)) {
    $str .= array_shift($arr);
    $str .= array_pop($arr);
}
echo $str;
?>
<br>
<a href="#">38 задание</a><br>
<?php
$arr = ['a', 'b', 'c'];
$new = array_pad($arr, 6, '-');
print_r ($new);
?>
<br>
<a href="#">39 задание</a><br>
<?php
$arr = array_fill(0, 10, 'x');
print_r ($arr);
?>
<br>
<a href="#">40 задание</a><br>
<?php
$arr = range(1, 20);
$arr = array_chunk($arr, 4);
print_r ($arr);
?>


</div>
<hr>
 <div class="heading">
 
</div>
</body>

</html> 