<?php
/**
 * Created by PhpStorm.
 * User: Ростислав
 * Date: 11.12.2017
 * Time: 0:32
 */
include '2.php';
if(is_numeric($age)==false){
    echo "Неизвестный возраст";
} elseif (($age >= 18) && ($age <=59) ) {
    echo "Вам еще работать и работать";
}
elseif ($age > 59) {
    echo "Вам пора на пенсию";
} elseif (($age >= 0) && ($age <= 17)) {
    echo "Вам еще рано работать";
} elseif ($age < 0){
    echo "Неизвестный возраст";
} /*elseif (is_numeric($age)== false ){
    echo "Неизвестный возраст";
}*/
