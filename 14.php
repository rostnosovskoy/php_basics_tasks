<?php
/**
 * Created by PhpStorm.
 * User: Ростислав
 * Date: 11.12.2017
 * Time: 19:01
 */
/*14. Задана переменная $foo = 'bar'; Создать переменную bar, в которой будет храниться
число 10. Вывести число 10, используя только переменную $foo (не опечатка).</p>*/

$foo = 'bar';
$bar = 10;
echo $$foo;
