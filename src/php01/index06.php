<?php
echo 'あいうえお'."\n".'かきくけこ';

function judge($score1, $score2, $score3){
    $total = $score1 + $score2 + $score3;
    $result = ($total>=210)? '合格': '不合格';
    echo '合計点は' . $total . 'なので、' . $result . 'です。<br>';    

}

judge(100,100,1);


function cal_triangle($teihen, $height){
    return $teihen*$height/2;
}

function cal_square($len1, $len2){
    return $len1 * $len2;
}

function cal_daikei($joutei, $katei, $height){
    return ($joutei+$katei)/2*$height;
}

echo "三角形の面積：" . cal_triangle(3,2) . "\n";
echo '四角形の面積：' . cal_square(3,2). '\n';
echo '台形の面積：' . cal_daikei(3,2,2). '<br>';

