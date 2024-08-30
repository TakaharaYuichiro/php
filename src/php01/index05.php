<?php
// for($i=0; $i<5;$i++){
//     echo ($i+1)*2;
//     echo "<br>";
// }

// $count=0;

// while ($count<20){
//     echo 'count = ' . ($count+1) . '<br>';
//     $count += 1;
// }

// $i = 0;
// while ($i < 10) {
//   if ($i == 5) {
//     $i++;
//     continue;
//   }
//   echo $i;
//   $i++;
// }

// $i=0;
// while($i<100){
//     $i++;
//     if($i % 3==0){
//         continue;
//     }
//     if($i>19) break;
//     echo $i. '<br>';
// }

// $i = 0;
// do {
//   echo $i . '<br />';
//   $i++;
// } while ($i < 5);

// $num=0;
// do {
//     echo 'num = ' . $num . '<br>';
//     $num++;
// } while ($num<3);

for($i=1; $i<51; $i++){
    echo $i. " : ";
    if (($i % 3 ==0) && ($i % 5 ==0) ){
        echo 'FizzBuzz<br>';
    } elseif ($i % 3 ==0) {
        echo 'Fizz<br>';
    }elseif ($i % 5 ==0) {
        echo 'Buzz<br>';
    }else {
        echo '<br>';
    }
}

for($j=0; $j<5; $j++){
    for($i=0; $i<5; $i++){
        echo '●';
    }
    echo '<br>';
}

