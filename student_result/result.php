<?php
while(true){
a:
$sub1=30;
$sub2=33;
$sub3=33;
$sub4=60;
$sub5=90;
$total=0;
$avg=0;
if($sub1>100 || $sub2>100 || $sub3>100 || $sub4>100 || $sub5>100 || $sub1<0 || $sub2<0 || $sub3<0 || $sub4<0 || $sub5<0)
    {echo "Invalid marks, Please enter marks between 0 and 100"; goto a;}
else break;
}
function calResult($sub1,$sub2,$sub3,$sub4,$sub5): string{
    global $total,$avg;    
    if($sub1<33 || $sub2<33 || $sub3<33 || $sub4<33 || $sub5<33)
        return "Fail";
    $total=$sub1+$sub2+$sub3+$sub4+$sub5;
    $avg=round($total/5);
    switch(true){
        case ($avg>=80 && $avg<=100): return "Grade: A+"; 
        case ($avg>=70 && $avg<=79): return "Grade: A"; 
        case ($avg>=60 && $avg<=69): return "Grade: A-"; 
        case ($avg>=50 && $avg<=59): return "Grade: B"; 
        case ($avg>=40 && $avg<=49): return "Grade: C"; 
        case ($avg>=33 && $avg<39): return "Grade: D"; 
        default: return "Grade: F";
    }
}

$result = calResult($sub1,$sub2,$sub3,$sub4,$sub5);

switch($result){
    case "Fail": echo "This student is failed"; break;
    default: 
        echo "Total marks: ".$total;
        echo "<br>";
        echo "Average marks: ".$avg;
        echo "<br>";
        echo $result;
}

?>
