<?php
    function holi($values, $Aye,$Nein)
    {
        $filter =array_filter($values,function($record)
        {
            return $record['gender']=='female';
        });
        if (count($filter)>0){
            $Aye (array_filter($filter)) ;
        }
        else
        {
            $Nein();
        }
    }
    function holiday($females){
        echo 'Number of the students'.count($females);
        echo "<br>";

        $names=array_map(function($female){
            return $female['name'];
        }, $females);

    echo 'Holiday is granted for :';
    foreach($names as $name){
        echo $name;
    }
    
    }
    function noholiday()
    {
        echo 'There is no holiday mate';
    }

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

    holi($students,'holiday','noholiday');
?>