<?php
//* Задание 1 */
echo "Задание 1<br>";
$name = " Даниил";
$age = "20";
echo "Меня зовут:$name"; 
echo "<br>";
echo "Мне $age лет";
echo "<br>";
echo "\!|/'\"\\";

//* Задание 2 */
echo "<br>Задание 2<br>";
const TOTAL_DRAWINGS = 80;
const MARKER_DRAWINGS = 23;
const PENCIL_DRAWINGS = 40;
$paint_drawings = TOTAL_DRAWINGS - MARKER_DRAWINGS - PENCIL_DRAWINGS;
echo "Количество рисунков, выполненных красками: " . $paint_drawings;

//* Задание 3 */
echo "<br>Задание 3<br>";
$age = 20;
if ($age >= 18 && $age <= 65) {
  echo "Вам еще работать и работать";
} elseif ($age > 65) {
  echo "Вам пора на пенсию";
} elseif ($age >= 1 && $age <= 17) {
  echo "Вам ещё рано работать";
} else {
  echo "Неизвестный возраст";
}

//* Задание 4 */
echo "<br>Задание 4<br>";
$day = 3;
switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Это рабочий день";
        break;
    case 6:
    case 7:
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
        break;
}

//* Задание 5 */
echo "<br>Задание 5<br>";
$bmw = array(
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => '2015'
);

$toyota = array(
    'model' => 'Camry',
    'speed' => 110,
    'doors' => 4,
    'year' => '2014'
);

$opel = array(
    'model' => 'Astra',
    'speed' => 130,
    'doors' => 5,
    'year' => '2016'
);

$cars = array(
    'bmw' => $bmw,
    'toyota' => $toyota,
    'opel' => $opel
);

foreach ($cars as $carName => $carDetails) {
    echo "CAR " . $carName . "<br>";
    echo $carDetails['model'] . " - " . $carDetails['speed'] . " - " . $carDetails['doors'] . " - " . $carDetails['year'] . "<br>";
}


?>

<table>
<?php
//* Задание 6 */
echo "<br>Задание 6<br>";
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 10; $j++) {
        echo "<td>";
        if ($i % 2 == 0 && $j % 2 == 0) {
            echo "(" . ($i * $j) . ")";
        } elseif ($i % 2 != 0 && $j % 2 != 0) {
            echo "[" . ($i * $j) . "]";
        } else {
            echo $i * $j;
        }
        echo "</td>";
    }
    echo "</tr>";
}
?>
</table>