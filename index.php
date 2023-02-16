<!DOCTYPE html>
<html>
<body>

<?php
#1
$arr = [2, 5, 3, 9];
$result = $arr[0]*$arr[1]+$arr[2]*$arr[3];
echo $result;
echo "<br>";

#2
$days=[1 => 'Понеділок', 'Вівторок', 'Середа', 'Четверг', "П'ятниця", 'Субота', 'Неділя'];
echo $days[3];
echo "<br>";

#3
$days2 = [
    'ua' => ['Понеділок', 'Вівторок', 'Середа', 'Четверг', "П'ятниця", 'Субота', 'Неділя'],
    'eng' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', "Friday", 'Saturday', 'Sunday']
];
echo $days2['ua'][0];
echo "<br>";
echo $days2['eng'][2];
echo "<br>";

#4
$var = 10; 
$var += 1; 
$var += 1; 
$var -= 1; 
echo $var;
echo "<br>";

#5, спосіб 1
$arr2 = [1, 2, 3, 4, 5];
var_dump($arr2);
echo "<br>";
#спосіб 2
$arr3[0] = 1;
$arr3[1] = 2;
$arr3[2] = 3;
$arr3[3] = 4;
$arr3[4] = 5;
var_dump($arr3);
echo "<br>";
#спосіб 3
$arr4[] = 1;
$arr4[] = 2;
$arr4[] = 3;
$arr4[] = 4;
$arr4[] = 5;
var_dump($arr4);
echo "<br>";
?> 

</body>
</html>
