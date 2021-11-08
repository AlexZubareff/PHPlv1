
<!-- 3. Объяснить, как работает данный код: -->

<?php
$a = 5;
$b = '05';
var_dump($a == $b);                             // Почему true? Поскольку сравнивается число и строка содержащая число то сравнение происходит численно, что и даёт true.
var_dump((int)'012345');                        // Почему 12345? Строка содержит число, поэтому при преобразовании в тип integer, строка будет преобразована в целочисленное значение. Поэтому 12345. 
var_dump((float)123.0 === (int)123.0); // Почему false? Происходит полное сравнение, по значению и типу данных. Поскольку типы данных разные поэтому false.
var_dump((int)0 === (int)'hello, world'); // Почему true? В данном случае строка 'hello, world' не содержит числа поэтому при приведении ее к типу integer она приобразуется в 0. Следовательно true/
?>


<!-- 4. Используя имеющийся HTML-шаблон, сделать так, чтобы главная страница 
генерировалась через PHP. Создать блок переменных в начале страницы. 
Сделать так, чтобы h1, title и текущий год генерировались в блоке контента 
из созданных переменных. -->

<?php
$h1 = 'Heading H1';
$title = 'Test Document';
$year = date('Y');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;?></title>
</head>
<body>
<h1><?php echo $h1;?></h1>
</body>
<div><?php echo $year;?></div>
</html>


<!-- 5. *Используя только две переменные, поменяйте их значение местами. 
Например, если a = 1, b = 2, надо, чтобы получилось b = 1, a = 2. 
Дополнительные переменные использовать нельзя. -->

<?php
$a = 1;
$b = 2;
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
echo '$a = '.$a;
echo '$b = '.$b;
?>

