<?php
    
 
 $Totalmarks=0;
 $marks=[67,78, 1000,79,67];
 for($x=0; $x<count($marks); $x++){
    if($marks[$x]<=100 && $marks[$x]>=0){
       if($marks[$x]<33){
           echo "You Failed";
           break;
       }
       else{
        $Totalmarks+=$marks[$x]; 
       }
    }
    else{
        echo "mark range is invalid";
        break;
    }
    
 }
 echo "Total marks :".$Totalmarks."\n";
 $avgmarks=calculateResult($Totalmarks);
 echo "Average marks :".$avgmarks."\n";
 function calculateResult($Totalmarks){
    $avgmarks=$Totalmarks/5;
    return $avgmarks;
 }
 switch($avgmarks){
    case ($avgmarks>=80):
        echo " Grade : A+";
        break;
    case ($avgmarks>=70):
         echo "Grade : A";
         break;
    case ($avgmarks>=60):
        echo " Grade : A-";
        break;
    case ($avgmarks>=50 ):
        echo "Grade : B";
        break;
    case ($avgmarks>=40 ):
        echo "Grade : C";
        break;
    case ($avgmarks>=33 ):
        echo "Grade : D";
        break;
    default:
       echo "Grade : F";
 }

?>