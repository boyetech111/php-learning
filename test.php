<?php

/* array 
$number1 = 10;

$number2 = 20;


echo $number1 + $number2 . "<br>";

"<br>";
$List = array(13,14,45,67,75);


$associativeList2 =array("number" => 10);

echo $List [0] . "<br>";
echo $associativeList2 ["number"] . "<br>";

// if statement

$name = "i love php";
if($name){
    echo "$name";
}   elseif($name){
    echo "$name";
}
    else{
    echo "";
}


// comparison and logical operation
if(4 === 4 && 5 < 10 ){
  echo "it is true";
}


// switch statement
$number = 34;

switch($number . "<br>"){

    case 34:
    echo "it is 34";
    break;
    case 37:
    echo "is it 34";
    break;
    case 35:
    echo "is it 34";
    break;
    case 24:
    echo "is it 34";
    break;
    case 29:
    echo "is it 29";
    break;
}


$counter = 0;

while($counter <= 10){
    
    echo"$counter";
    $counter++;

    // $counter = $counter + 1;
}



for($counter = 0; $counter < 10; $counter++){
  
    echo $counter . "<br>";
}



$numbers = array(234,477,564,356,788,8970);
foreach($numbers as $number){

    echo $number . "<br>";
}



// functions


function init(){
    Say_Something();
    echo "<br>";
    calculate();
}

function calculate(){
    echo 546 + 635;
}

function Say_Something(){
    echo "hello student";
}

init();



function greeting($message){

    echo $message;

}

greeting("Hello student");


function calculate($number1, $number2){
    $sum = $number1 + $number2;

    echo $sum;
}

calculate(48,48);



// function parameter
function addNumbers($number1, $number2){
    $sum = $number1 + $number2;
    
    return $sum;

}

$result = addNumbers(34,64);

$result = addNumbers(100, $result);

echo $result;




// global variable and scope

$x = "outside"; // global scope

function convert() {
    global $x;
    $x = "inside"; // local scope
}

echo $x;

echo "<br>";

convert();

echo $x;

echo $x;



$number = 10;
echo $number . "<br>";

define("NAME", 1000);

echo NAME;

function calculate(){

    $number1 = 10;
    $number2 = 20;
    $sum = $number1 + $number2;

    return $sum;
}
$theSum = calculate() . "<br>";

echo $theSum;

function hello($ola){
    echo $ola;
    
    return $ola;

}

hello("is that you");



echo pow(2,7);

echo "<br>";

echo rand(1,100);

echo "<br>";

echo sqrt(100);

echo "<br>";

echo ceil(4.6);

echo "<br>";

echo floor(4.6);


// string function

$string = "hello students";

echo strlen($string);

echo "<br>";

echo strtoupper($string);



echo "<br>";

echo strtolower($string);
*/


// array function

$list = [35,67,94,73,17,46,23,45];

echo min($list);

echo "<br>";

sort($list);

print_r($list);

?>