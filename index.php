<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise #3</title>
</head>
<body>
    <?php
// Logical Statements and Operators 
// (1) Write a PHP script to see if the specified year is a leap year or not. 
function year_check($my_year){
    if ($my_year % 400 == 0)
       print("It is a leap year");
    else if ($my_year % 100 == 0)
       print("This year is not a leap year");
    else if ($my_year % 4 == 0)
       print("It is a leap year");
    else
       print("This year is not a leap year");
 }
 $my_year = 2013;
 year_check($my_year);

 echo "<br>"."<br>";


// (2) Write a PHP script to check the season depending on the inserted temperature if the temperature is below 20, we are in winter otherwise the season is summer. 
function season_check($temp3){
    if ($temp3 < 20)
       print("It is a wintertime!");
    else {
        print("It is a summertime!");
    }
 }
 $temp3 = 27;
 season_check($temp3);

 echo "<br>"."<br>";


// (3) Write a PHP script to calculate the sum of the two integers. If the two values are the same, then calculate the triple of their sum. 
$arr5 = array(2,2);
if ($arr5[0] == $arr5[1]){
    $sum = array_sum($arr5);
    echo ($sum * 3);
}
else {
    $sum = array_sum($arr5);
    echo $sum;
}

echo "<br>"."<br>";


// (4) Write PHP to check if the sum of the two given numbers equals 30, if the condition is true the return their sum otherwise return false 
$arr7 = array(10,10);
$sum1 = array_sum($arr7);
if ($sum1 == 30){
    echo $sum1;
}
else {
    echo "False";
}

echo "<br>"."<br>";


// (5) Write in PHP script to check if the given positive number is a multiple of 3.
$num1 = 20; 
if($num1 % 3 == 0){
    echo "the number is multiple of 3";
  }
  else {
      echo "False";
  }


  echo "<br>"."<br>";


// (6) Write a PHP script to check if the integer value is in the range of [20-50] inclusive. 
$num2 = 50;
if($num2 > 20 && $num2 <= 50){
    echo "True";
}
else {
    echo "False";
}


echo "<br>"."<br>";


// (7) Write PHP script to find the largest number between the three integers 
$arr8 = array(1,5,9);
$largest = $arr8[0];
for ($i =0; $i < count($arr8); $i++){
    if($arr8[$i] > $largest){
        $largest =$arr8[$i];
    }
    else{
        $largest =$arr8[0];
    }
}
echo $largest;

echo "<br>"."<br>";



// (8) Write PHP script to calculate the monthly electricity bill according to these rules:
// a. For first 50 units - 2.50 JOD/Unit
// b. For next 100 units - 5.00 JOD/Unit
// c. For next 100 units - 6.20 JOD/Unit 
//d. For units above 250 - 7.50 JOD/Unit 
$bill = 250;
    if ($bill <= 50) {
        echo $bill * 2.5 . " JOD ";
    } elseif ($bill <= 150) {
        echo (50 * 2.5 + ($bill - 50) * 5) . " JOD ";
    } elseif ($bill <= 250) {
        echo (50 * 2.5 + 100 * 5 + ($bill - 150) * 6.2) . " JOD ";
    } else {
        echo (50 * 2.5 + 100 * 5 + 100 * 6.2 + ($bill - 250) * 7.5) . " JOD ";
    }
    echo "<br>"."<br>";



// (9) Write php script to make a calculator, the calculator should contain the four main operations  e. Addition f. Subtraction g. Multiplication h. Division
$num3 =21;
$num4 =7;
echo "Addition for the two numbers is :".($num3+$num4)."<br>";
echo "Subtraction for the two numbers is :".($num3-$num4)."<br>";
echo "Multiplication for the two numbers is :".($num3*$num4)."<br>";
echo "Division for the two numbers is :".($num3/$num4)."<br>";

echo "<br>"."<br>";


// (10) Write php script to check if a person is eligible to vote, minimum age required for voting is 18. 
$age = 15;
if($age > 18){
echo "You are eligible to vote";
}
else{
    echo "is no eligible to vote";
}

echo "<br>"."<br>";


// (11) Write php script to check whether a number is positive, negative or zero 
$num5 =-60;
if($num5 > 0){
    echo "Positive";
    }
    else{
        echo "Negative";
    }
    
echo "<br>"."<br>";


// (12) Write a PHP to find the grade for the student, after calculating the average of his score in all the subject:
$marks = array(60,86,95,63,55,74,79,62,50);
$average = (array_sum($marks)/count($marks));
if($average <100 && $average >90){
    echo "Your garde is A";
}
if($average <90 && $average >80 ){
    echo "Your garde is B";
}
if($average <80 && $average >70){
    echo "Your garde is C";
}
if($average <70 && $average >60){
    echo "Your garde is D";
}
if($average <60){
    echo "Your garde is F";
}


?>
</body>
</html>