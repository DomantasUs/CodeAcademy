<?php
//
//$one = 1;
//$two = 2;
//$three = 3;
//$sum = $one + $two + $three;
//
//echo ($sum);
//

//Pirma

//$value = 26;
//if ($value > 25)
//    echo ("Ok");
//
////Antra
//
//$Integer = 0;
//if (gettype($value) == (gettype($Integer)))
//    echo ("Ok2");
//
////Trecia
//
//$age = 25;
//if ($age == 24)
//    echo "Amzius yra 24";
//elseif ( $age == 25)
//    echo "Amzius yra 25";
//elseif ( $age == 26)
//    echo "Amzius yra 26";
//else
//    echo "nera";
//
////Ketvirta
//
//$day = 7;
//switch ($day) {
//    case 0:
//        echo "diena", $day;
//        break;
//    case 1:
//        echo "diena", $day;
//        break;
//    case 7:
//        echo "diena", $day;
//        break;
//}

//function first($one, $two, $three){
//    echo '<h3>'. $one . $two . $three .'</h3>';
//}
//echo first(1,2,3);
//
//
//function multiply($first, $second) {
//    echo $first * $second;
//}
//
//echo multiply(2,3);

//Parašykite funkciją, kuri grąžina skaičiaus kvadratą. Skaičius perduodamas kaip parametras.

//function power($pow){
////    if ($pow ==! 0) {
////        echo $pow * $pow;
////    }
////    else {
////        echo "Error";
////    }
////}
////echo power(5);
////
//////Parašykite funkciją, kuri grąžina dviejų skaičių sumą. Skaičiai perduodami funkcijos parametrus.
////
////function summing($sum1, $sum2){
////    echo $sum1 + $sum2;
////}
////
////echo summing(5,6);
////
//////Parašykite funkciją, kuri iš antro parametro atima pirmą ir padalija iš trečio.
////
////function maths($maths1, $maths2, $maths3){
////    echo ($maths1 - $maths2)/$maths3;
////}
////
////echo maths(15,5, 5);
////
//////Parašykite funkciją, kuri priima kaip parametrą skaičių nuo 1 iki 7, o grąžina savaitės dieną lietuvių kalba.
////
////function week($day) {
////    switch ($day) {
////        case 1:
////            echo "Pirmadienis";
////            break;
////        case 2:
////            echo "Antradienis";
////            break;
////        case 3:
////            echo "Trečiadienis";
////            break;
////        case 4:
////            echo "Ketvirtadienis";
////            break;
////        case 5:
////            echo "Penktadienis";
////            break;
////        case 6:
////            echo "Šeštadienis";
////            break;
////        case 7:
////            echo "Sekmadienis";
////            break;
////    }
////}
////echo week(5);
////
//////Sukurkite "a", "b", "c" masyvą. Išveskite masyvo reikšmę naudodami funkciją var_dump().
////
////$arr = ["a", "b", "c"];
////var_dump($arr);
////
//////Naudodamiesi $arr masyvu iš ankstesnės užduoties, išveskite pirmo, antro ir trečio elementų turinį.
////
////echo $arr[0];
////echo $arr[1];
////echo $arr[2];
////
//////Sukurkite masyvą $arr = ['a', 'b', 'c', 'd'] ir panaudoja jį išveskite eilutė 'a + b, c + d'.
////
////array_push($arr, "d");
////echo '<br>';
////
////echo $arr[0], ' + ', $arr[1], ', ',$arr[2], ' + ', $arr[3];
////
////echo '<br>';
//////Sukurkite $arr masyvą su elementais 2, 5, 3, 9.
////
////$arr = [2, 5, 3, 9];
////
////// Padauginkite pirmąjį masyvo elementą iš antrojo, o trečiąjį elementą iš ketvirtojo.
////// Sudėkite rezultatus ir priskirkite kintamajam $result. Išveskite šio kintamojo reikšmę.
////$result = null;
////$result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
////
////echo $result;
////
//////Užpildykite $arr masyvą skaičiais nuo 1 iki 5. Nedeklaruokite masyvo elementų, o tiesiog užpildykite jį $arr[] = nauja reikšme.
////
////$arr = [];
////
////for ($i=0; $i <= 5; $i++) {
////    echo $arr[$i];
////}
////
////var_dump($arr);
///

// 1. "Nupieškite" tokio tipo piramidę:
// 1
// 22
// 333
// 4444
// 55555
// 666666
// 7777777
// 88888888
// 999999999

for ($x = 1; $x <= 9; $x++) {
    $var = str_repeat($x, $x);
    echo $var, "\n";
}

// 2. Parašykite funkciją kuri unserscore_case konvertuoja i camelCase;
function underscoreToCamel($string, $lowercaseFirstCharacter = true)
{
    $str = str_replace('_', '', ucwords($string, '_'));
    if ($lowercaseFirstCharacter) {
        $str = lcfirst($str);
    }
    return $str;
}
echo underscoreToCamel('hello_world_test');
// 3. Parašykite funkciją kuri priima kaip argumentą/paramėtrą "2014-12-31" formato datą ir grąžina zodiako ženklą.
function findZodiac($birthdate)
{

   $zodiac = '';
   list ($year, $month, $day) = explode('-', $birthdate);

   if (($month == 3 && $day > 20) || ($month == 4 && $day < 20)) {
       $zodiac = "Avinas";
   } elseif (($month == 4 && $day > 19) || ($month == 5 && $day < 21)) {
       $zodiac = "Jautis";
   } elseif (($month == 5 && $day > 20) || ($month == 6 && $day < 21)) {
       $zodiac = "Dvyniai";
   } elseif (($month == 6 && $day > 20) || ($month == 7 && $day < 23)) {
       $zodiac = "Vezys";
   } elseif (($month == 7 && $day > 22) || ($month == 8 && $day < 23)) {
       $zodiac = "Liutas";
   } elseif (($month == 8 && $day > 22) || ($month == 9 && $day < 23)) {
       $zodiac = "Mergele";
   } elseif (($month == 9 && $day > 22) || ($month == 10 && $day < 23)) {
       $zodiac = "Svarstykles";
   } elseif (($month == 10 && $day > 22) || ($month == 11 && $day < 22)) {
       $zodiac = "Skorpionas";
   } elseif (($month == 11 && $day > 21) || ($month == 12 && $day < 22)) {
       $zodiac = "Saulys";
   } elseif (($month == 12 && $day > 21) || ($month == 1 && $day < 20)) {
       $zodiac = "Oziaragis";
   } elseif (($month == 1 && $day > 19) || ($month == 2 && $day < 19)) {
       $zodiac = "Vandenis";
   } elseif (($month == 2 && $day > 18) || ($month == 3 && $day < 21)) {
       $zodiac = "Zuvys";
   }

 return $zodiac;
}
$birthdate = "1994-01-05";
echo findZodiac($birthdate), "\n";