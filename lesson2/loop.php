<?php
    // $arr = [1,2,3,false,"something",6];    
    // for($i = 0; $i < count($arr); $i++){
    //     var_dump($arr[$i]);
    //     echo "<br>";
    // }

    // $arr = [
    //     'name' => 'thienth',
    //     'age' => 30,
    //     'address' => 'hanoi'
    // ];

    // foreach($arr as $key => $value){
    //     echo $key . "-" . $value;
    //     echo "<br>";
    // }

    $arr = [1,2,3,5,6,5,8,9];
    $index = -1;
    foreach($arr as $key => $value){
        if($value == 5){
            $index = $key;
            break;
        }
    }

    echo $index;

?>