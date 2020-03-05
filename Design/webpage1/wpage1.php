<?php
   $main='The main division should have the clear concept about what is going to be written in that segments and 
   the segment should be meaningful so that anyone can understand what does it mean';
    $num=2;
    $block = 'It is the picture of the famous actor which is ranked on ';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>all right</title>
    <link rel="stylesheet" href="tailwind.css">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Amiri|Girassol|Oleo+Script|Rancho|Satisfy&display=swap" rel="stylesheet">
</head>
<body class="overflow-x-hidden mx-4 " > 
    <header class="pt-8 text-teal-600  xl:flex-row md:justify-between  ">
        
        <h1 class="text-3xl font-bold flex justify-between">
            <div class="flex">
                <img class="h-10 w-10" src="image/cixware.png" alt="">
                <div>
              
                    <div><i class="fab fa-symfony mr-2"></i>Samui<span class="text-red-900">san</span></div>
                    <div class="text-xs px-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima eos incidunt nam quas ducimus debitis commodi expedita explicabo rem possimus!</div>
                </div>
            </div>
            <div class="text-xs  text-white  ">
               <button class="w-8 bg-teal-700 rounded-md ">EN</button>
               <button class="w-8 bg-teal-700 rounded-md ">ESP</button>
               <button class="w-8 bg-teal-700 rounded-md ">FR</button>
               <button class="w-8 bg-teal-700 rounded-md ">CN</button>
            </div>
          
        </h1>
        <div class="flex flex-col-reverse bg-teal-700 text-white lg:flex-row md:justify-between mt-10 mb-10 rounded-t-md">
        
            <div class="flex flex-col pr-48 text-justify  md:flex-row  text-gray">
                <a class="ml-6 py-1 mt-1 px-2 font-bold hover:text-blue-400" href="home.html">Home</a>
                <a class="ml-6 py-1 mt-1 px-2 font-bold hover:text-blue-400" href="about.html">Products</a>
                <a class="ml-6 py-1 mt-1 px-2 font-bold hover:text-blue-400" href="services.html">Download</a>
                <a class="ml-6 py-1 mt-1 px-2 font-bold hover:text-blue-400" href="products.html">Buy Product</a>
                <a class="ml-6 py-1 mt-1 px-2 font-bold hover:text-blue-400" href="Clients.html"> Support</a>
                <a class="ml-6 py-1 mt-1 px-2 font-bold hover:text-blue-400" href="Clients.html"> About</a>
            </div>
            <div>
                <div class="relative border-2 border-teal-700 hover:border-green-500 "> 
                    <i class="fas fa-search absolute mt-3 ml-3 text-blue-700"></i>
                    <input  class="text-black pl-10 h-8 overflow-hidden w-6 md:w-auto rounded-l-lg"  placeholder="Click here to search"  type="text">
            </div>
     </div>
        </div>
    </header>
    <section >
        <div >
            <img class="w-full" src="hollywood.jpg" alt="">
        </div>
       
    </section>
    <section class="flex mt-10 ">
        <div class=" mr-8 pt-2 border-2 px-4 pb-2">
        <h1 class="bg-teal-700 text-white pl-2">WHATS ON TRENDING</h1>
             <div class=" flex justify-between mt-4"> 
                 <img class="w-64" src="1p.jpg" alt="">
                 <div class="mx-8 text-justify">
                     <?php
                        echo $main;
                        echo '<br>';
                        echo strtoupper($main);
                        echo '<br>';
                        print_r( str_split($main,15));
                        echo '<br>';
                        echo str_repeat($block,3);
                        
                     ?>
                 </div> 
             </div>
             <div>
               <div class="flex justify-between  px-64 mx-20 mt-4">
                     <button class="w-32 bg-teal-700  rounded-md overflow-hidden  p-2 text-white" type="submit">Download</button>
              
                
                 <button  class=" w-32 bg-teal-700 rounded-md p-2 text-white" type="submit">Purchase</button>
             </div>
             <div class="mt-8">
                 <h2 class="bg-teal-700 text-white pl-2">
                     THIS IS PAHADI TIMES
                 </h2>
                 <div class="flex justify-between mt-8 ">
                     <div class="px-2">
                         <img class="w-64 h-64"  src="2p.jpg" alt="">
                         <div class="w-64 mt-4">
                             <?php
                               echo $block;
                               echo $num;
                             ?>
                         </div>
                     </div>
                     <div class="px-2">
                         <img class="w-64 h-64" src="3p.jpg" alt="">
                         <div class="w-64 mt-4">
                         <?php
                               echo $block;
                               echo ++$num;
                             ?>
                         </div>
                     </div>
                     <div class="px-2">
                         <img class="w-64 h-64" src="4p.jpg" alt="">
                         <div class="w-64 mt-4">
                         <?php
                               echo $block;
                               echo ++$num;
                             ?>
                         </div>
                     </div>
                     <div class="px-2">
                         <img class="w-64 h-64" src="5p.jpg" alt="">
                         <div class="w-64 mt-4">
                         <?php
                               echo $block;
                               echo ++$num;
                             ?>
                         </div>
                     </div>
                 </div>
                 <div class="mt-8">
                    <?php
                       echo $main;
                       echo str_repeat($main,4);
                    ?>
                 </div>
             </div>
            </div>
        </div>
        <div class="w-full" >
            <div class="mb-10 border-2 pb-4 ">
                 <h1 class="bg-teal-700 text-white text-center mb-4 mt-2 mx-2">Social</h1>
                 <img class="px-8"   src="1p.jpg" alt="">
                 <div class="flex justify-center">
                 <button class="mx-8 w-full mt-4 align-center  text-center bg-teal-700  rounded-md p-2 text-white" type="submit">Share and Links</button>
                 </div>
            </div>
            <div class="border-2 pb-4  px-2">
                 <div class="bg-teal-700 text-center text-white mt-2">Navigate</div>
                 <div class="mt-2">
                 <?php
                        $i=0;
                            while($i<15){
                                echo '<li class=ml-10>'.'KEANU`'.'</li>';
                                $i++;
                                
                            }
                 ?>
                </div>
            </div>
        </div>
    </section>
    <section class="h-4 bg-teal-700 mt-4 rounded-b-sm">
    </section>
    <section class="mx-64 px-32 underline mt-2">
        <div class="flex justify-between">
            <a href="">Home</a>
            <a href="">Products</a>
            <a href="">Privacy</a>
            <a href="">Terms</a>
            <a href="">See Maps</a>
            <a href="">links</a>
        </div>
    </section>
   
    
    <footer class="mx-auto">
        <div class="text-center  text-xs text-bold mt-8 mb-8  ">
            Copyright &copy;2020. All Right Preserved.
        </div>
    </footer>
</body>
</html>
<style>
 body
 {
     font-family:Open Sans;
     background-color:lightgray;
 }
</style>