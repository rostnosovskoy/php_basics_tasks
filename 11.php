<?php
/**
 * Created by PhpStorm.
 * User: Ростислав
 * Date: 11.12.2017
 * Time: 1:23
 */
include '9.php';
switch ($day){
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
}