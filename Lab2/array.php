<?php 
    // $m = [2, 'one', 6, 1, 'winter'];
    // foreach ($m as $value){
    //     echo $value.'<br>';
    // }
    // echo '<br>---------------------<br>';
    // sort($m);
    // foreach ($m as $value){
    //     echo $value.'<br>';
    // }
    // echo '<br>---------------------<br>';
    // $m1 = [
    //     'key' => 'gold',
    //     '3' => 3,
    //     'Key' => 'gold'
    // ];
    // foreach ($m1 as $key=>$value){
    //     echo $key.'=>'.$value.'<br>';

    // }
    // echo '<br>---------------------<br>';

    // ksort($m1); 
    // foreach ($m1 as $key=>$value){
    //     echo $key.'=>'.$value.'<br>';

    // }
    // echo '<br>---------------------<br>';

    // // echo array_pop($m);
    // // echo array_push($m1, 4,7);
    // echo array_shift($m1);  
    // echo '<br>---------------------<br>';
    // array_unshift($m1, 4,5,7,8)
    // var_dump($m1);

    // $arr = [
    //     [1,4,6,7,9,4],
    //     ['one', 'two'],
    //     ['key', 6, 'gold']
    // ];
    // foreach($arr as $ar){
    //     foreach($ar as $a){
    //         echo $a.', ';
    //     }
    //     echo '<br>';
    // }

    // echo '<br>---------------------<br>';

    // $arr[3][1] = '3';

    // foreach($arr as $ar){
    //     foreach($ar as $a){
    //         echo $a.', ';
    //     }
    //     echo '<br>';
    // }


    $m2[0] = 'blue';
    $m2[1] = 'green';

    $count = count($m2);
    for ($i=0; $i < $count; $i++){
        echo $i.' '.$m2[$i].'<br>';
    }
    echo '<br>--------------------<br>'

    $m2['red'] = 'color';
    for ($i=0; $i < count($m2); $i++){
        echo $i.' '.$m2[$i].'<br>';
    }


?>