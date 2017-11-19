<?php

//+++++++++++++++++++++
//    FUNDAMENTALS    +
//+++++++++++++++++++++


 // CONSTANT
 define('HOSTNAME', 'localhost');
 echo HOSTNAME;

 // VARIABLE
 $user = 'John Doe';
 $num = 5;

 echo $user .' has '.$num.' donuts';

 // ARRAYS
 $users = Array('Mike', 'Jill', 'Jose');
 //$users = ['Mike', 'Jill', 'Jose'];
 //print_r($users);

 $users[3] = 'Tom';

 echo $users[3];

 $ages = Array(
  'Karen' => 34,
  'Larry' => 44,
  'Jeff' => 38);

 echo $ages['Larry'];

 // FUNCTIONS
 function writeMsg($msg = 'Hello World'){
  return $msg;
 }

 echo writeMsg('Goodbye');

 // CONDITIONALS
 $num1 = 20;
 $num2 = 10;

 if($num1 >= 20 && $num2 < 5){
    echo 'Yes it is';
 } else {
    echo 'No it is not';
 }

 // LOOPS
 for($i = 0;$i <= 10;$i++){
    echo 'Number '.$i.'<br>';
 }

 $i = 0;
 while($i < 10){
    echo 'Number '.$i.'<br>';
    $i++;
 }

$users = Array('Mike', 'Jill', 'Jose');

foreach($users as $user){
    echo $user.'<br>';
}


//+++++++++++++++++++++++++++
//    DATA TYPES & DATES    +
//+++++++++++++++++++++++++++


// String
$myStr = 'Hello World';
var_dump($myStr);

// Integer
$myInt = -55;
var_dump($myInt);

// Float
$myFloat = 4.4;
var_dump($myFloat);

// Boolean
$myBool = false;
var_dump($myBool);

// Array
$myArr = [3,3,4,5,6];
var_dump($myArr);

// Null
$myNull = null;
var_dump($myNull);


//$myStr = 'Hello World';

//echo strlen($myStr);
//echo str_word_count($myStr);
//echo strrev($myStr);
//echo strpos($myStr, 'World');
//echo str_replace('World', 'There', $myStr);

//echo max(33,2,66,5554,777,3844);
//echo min(33,2,66,5554,777,3844);
//echo abs(-5);
//echo floor(4.7);
//echo ceil(4.7);
//echo rand(10, 30);

echo "The date is ". date('Y/m/d') . '<br>';
echo "The date is ". date('Y.m.d') . '<br>';
echo "The date is ". date('Y-m-d') . '<br>';
echo "The day is ". date('l') . '<br>';
echo "The month is ". date('M') . '<br>';
echo "The year is ". date('Y') . '<br>';
echo "The time is ". date('h:i:sa') . '<br>';

// Set Timezone
date_default_timezone_set("America/New_York");
echo "The time is ". date('h:i:sa') . '<br>';

$d = strtotime("tomorrow");
echo "The date is ". date('Y-m-d', $d) . '<br>';
