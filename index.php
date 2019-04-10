<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomeWork8_15</title>
</head>
<body>
<?php
require_once "worker.php";
?>
<h2>Создать класс</h2>
<p>Сделайте класс Worker, в котором будут следующие private поля - name (имя), age (возраст), salary (зарплата) и
    следующие public методы setName, getName, setAge, getAge, setSalary, getSalary.</p>
<p>Дополните класс  private методом checkAge, который будет проверять возраст на корректность (от 1 до 100 лет). Этот
    метод должен использовать метод setAge перед установкой нового возраста (если возраст не корректный - он не должен меняться).</p>
<p>Создайте 2 объекта этого класса: 'Иван', возраст 25, зарплата 1000 и 'Вася', возраст 26, зарплата 2000. Выведите на
    экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.</p>
<?php
//Создаем первый обьект класса Worker
$obWorker1 = new Worker('Иван', 25, 1000);

//Создаем второй обьект класса Worker
$obWorker2 = new Worker('Вася', 26, 2000);

echo "<b>Вывод результатов:</b><br><br>";

//Подсчитаем сумму зарплат
$sumSalary = $obWorker1->getSalary() + $obWorker2->getSalary();
echo "Сумма зарплат Ивана и Васи = <b>$sumSalary</b><br>";

//Подсчитаем суммарный возраст
$sumAge = $obWorker1->getAge() + $obWorker2->getAge();
echo "Сумма возрастов Ивана и Васи = <b>$sumAge</b><br>";
?>
</body>
</html>
