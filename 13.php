<?php
/**
 * Created by PhpStorm.
 * User: Ростислав
 * Date: 11.12.2017
 * Time: 1:37
 */
/*Заданы две переменные: s - длина участка, который проехал автомобиль; t - время
движения в часах. Вывести скорость автомобиля на заданном участке в км/час и в м/сек.*/

$s = 100;
$t = 1;
$speed_kmch = 100/1;
$speed_ms = (100/1000)/((1/60)/60);
echo "Скорость равна {$speed_kmch} км/ч или {$speed_ms} м/с.";