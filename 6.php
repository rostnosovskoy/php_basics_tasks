<?php
/**
 * Created by PhpStorm.
 * User: Ростислав
 * Date: 11.12.2017
 * Time: 0:32
 */
include '2.php';
if (($age >= 18) && ($age <=59) )
{
    echo "Вам еще работать и работать";
}
elseif ($age > 59)
{
    echo "Вам пора на пенсию";
}