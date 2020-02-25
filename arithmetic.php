<?php
  $num1=14;
  $num2=7;
  $sum=$num1+$num2;
  $multiply=$num1*$num2;
  $subtract=$num1-$num2;
  $divide=$num1/$num2;
  echo "The sum is:",$sum;
  echo "The multiplication is:",$multiply;
  echo "The subtraction is:",$subtract;
  echo "The division is:",$divide;

  $radius=3.0;
  $PI=3.14;
  $circum=2*$PI*$radius;
  $area=$PI*$radius*$radius;
  echo "The circumference is",$circum;
  echo "The area is",$area;

  $fahrenheit=40;
  $celcius=5/9*($fahrenhiet-32);
  echo "Temperature in celcius :",$fahrenhiet;
  
  $p=10;
  $t=1;
  $r=2;
  $I=($p*$t*$r)/100;
  echo "The simple interest is:"$I;

  $sub1=76;
  $sub2=49;
  $sub3=70;
  $sub4=71;
  $sub5=80;
  $sub6=83;
  $sub7=96;
  $sub8=99;
  $avg=$sub1+$sub2+$sub3+$sub4+$sub5+$sub5+$sub6+$sub7+$sub8;
  $percentage=($avg/800)*100;
  echo "The average is :",$avg;
  echo "The percentage is:",$percentage."%";