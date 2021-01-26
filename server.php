<?php 
    include __DIR__ . "/db.php";

    header("Content-type: application/json");

    $filteredDiscs = [];


    if($_GET["genre"] == "all" || count($_GET) == 0) {

        echo json_encode($discs);

    } else {

        foreach ($discs as $disc) {
            if($_GET["genre"] == $disc["genre"]) {
                $filteredDiscs[] = $disc;
            }       
        };

        echo json_encode($filteredDiscs);
        
    }
?>