1
<!-- <?php
	echo str_replace('.', '-', '31.12.2013');
?> -->

2
<!-- <?php
	echo str_replace(['a', 'b', 'c'], [1, 2, 3], 'afvgdsfdscbac');
?> -->

3
<!-- <?php
  echo str_replace(range(0, 9), '','1a2b3c4b5d6e7f8g9h0');
?> -->

4
<!-- <?php 
echo strrpos('abc abc abc', 'b'); 
?> -->

5
<!-- <?php
echo strpos('abc abc abc', 'b', 3);
?> -->

6
 <!-- <?php
$array = [1, 2, 3, 4, 5];

$result = 0;
foreach ($array as $array2) {
$summ += $array2 * $array2;
}

echo $summ;
?> -->

7
<!-- <?php
$arr = ['10', '20', '30', '50', '235', '3000'];
foreach ($arr as $num) {
    $fn = substr($num, 0, 1);
    if ($fn == '1' || $fn == '2' || $fn == '5') { 
        echo $num . '<br>';
    }
}
?> --> 

8
<!-- <?php 
$days = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];
 foreach ($days as $day) {
   if ($day == 'Суббота' || $day == 'Воскресенье') { 
    echo "<b>$day</b><br>"; 
  } 
    else { 
      echo "$day<br>"; 
    } 
  } 
    ?> -->