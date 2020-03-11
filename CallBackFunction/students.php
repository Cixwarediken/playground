<?php
//Create a function that takes an  of student records (id,name,class,gender) function should check if all students are all females.
// If a single female student is present, trigger a callback that outputs "No. of female students=N ,[$name], so it is holiday"
//else, another callback that outputs "The school is not closed"

 $students =[
    [
        "id" => "01",
        "name" => "Binod",
        "class"=>"bachelor",
        "gender"=>"male"
    ],
        
    [
        "id" => "02",
        "name" => "Arun",
        "class"=>"bachelor",
        "gender"=>"male"
    ],
    [
        "id" => "03",
        "name" => "Sibu",
        "class"=>"bachelor",
        "gender"=>"male"
    ],  
    [
        "id" => "04",
        "name" => "Anita",
        "class"=>"bachelor",
        "gender"=>"female"
    ],   
    [ 
    "id" => "01",
    "name" => "Diken",
    "class"=>"bachelor",
    "gender"=>"male"
    ],
       
    [
        "id" => "07",
        "name" => "Bibek",
        "class"=>"bachelor",
        "gender"=>"male"
    ],

];
print_r($students);
echo "<br>";
echo "<br>";
echo "<br>";

$gfilter = array_filter ($students, function ($gStu){
    return array_keys($gStu, "female");
});



print_r ($gfilter);
echo "<br>";
echo "<br>";

if($gfilter!=null)
{
    echo 'आज नारी दिवसको बिदा छ';
}
else{
    echo 'छुट्टी छैन भाई आउनुपर्छ';
}
//   function holiday($students,$) 
//   { 
//       if('gender'=='female') 
//          echo 'No of female student is '.' आज नारी दिवसको बिदा छ '; 
//       else 
//          echo 'छुट्टी छैन भाई आउनुपर्छ ';  
//   } 
// $gefilter=array_filter($students,function($holi){
//     return students["gender"]=="female";
// });
// print_r($gefilter);
?>
