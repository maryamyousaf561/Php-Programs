<?php

$marks = array(array(50,60,40), array(50,70,30), array(40,60,50), array(40,40,70), array(70,40,40), 
array(40,60,50), array(60,40,50), array(80,30,40), array(60,40,50), array(70,50,30), array(80,30,40),
array(30,80,40), array(40,50,60), array(50,40,60), array(60,60,30) );

$lengthofarray = count($marks);
$engsum = 0;
$scisum = 0;
$mathsum = 0;
for($i = 0; $i < $lengthofarray; $i++)
{
    echo "Marks of English for student " . $i . ": ". $marks[$i][0] . "<br>";
    echo "Marks of Science for student " . $i . ": " . $marks[$i][1] . "<br>";
    echo "Marks of Math for student " . $i . ": " . $marks[$i][2] . "<br>";
    $sum = $marks[$i][0] + $marks[$i][1] + $marks[$i][2];
    echo "Sum is " . " : " . $sum . "<br>";
    echo "<br>"; 
    $engsum = $engsum + $marks[$i][0];
    $scisum = $scisum + $marks[$i][1];
    $mathsum = $mathsum + $marks[$i][2];
}
echo "Total sum of English of all is: " . $engsum;
$engavg = $engsum/$lengthofarray;
echo "<br>Average of english of all is: " . $engavg;
echo "<br>";
echo "<br>";  
echo "Total sum of Science of all is: " . $scisum;
$sciavg = $scisum/$lengthofarray;
echo "<br>Average of Science of all is: " . $sciavg;
echo "<br>";
echo "<br>";  
echo "Total sum of Math of all is: " . $mathsum;
$mathavg = $mathsum/$lengthofarray;
echo "<br>Average of Math of all is: " . $mathavg;
?>