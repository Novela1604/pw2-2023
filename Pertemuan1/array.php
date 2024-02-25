<?php

    // $fruits = ["Mangga", "Delima", "Kiwi"];

    // foreach ($fruits as $fruits) {
    //     echo $fruits;
    //     echo '<br>';

    // }

    // $dinos =[
    //     "dinoName" => "Tricera",
    //     "dinoAge" => 300,
    //     "isMarried" => "false"
    // ];
    
    // foreach($dinos as $dino) {
    //     echo $dino;
    //     echo '<br>';
    // }

    $dinos = [
        [
            "dinoName" => "Tricera",
            "dinoAge" => 300
        ],
        [
            "dinoName" => "Rex",
            "dinoAge" => 500
        ],
        [
            "dinoName" => "Ptera",
            "dinoAge" => 250
        ],
        ];

        foreach ($dinos as $dino) {
            echo $dino["dinoName"] . "  _  ". $dino["dinoAge"] . " Tahun";
            echo '<br>';
        }

?>