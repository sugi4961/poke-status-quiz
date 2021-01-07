<?php 
session_start();

$f = fopen("./data/pokemon_status.csv", "r");
$nrow = count(file("./data/pokemon_status.csv"));

$index = rand(0, $nrow-1);
$machiIndex = rand(1,100);

if ($machiIndex != 1) {
    for ($i=1; $i<=$index; $i++) { // 0はHeaderなのでとらない
        $targetLine = fgetcsv($f);
    }
    fclose($f);
    $targetLine = mb_convert_encoding($targetLine,"utf-8","sjis");
} else {
    $targetLine = ["", "まちだよしと", "おに", "きんたま", "プレッシャー", "いかく","",4410,4410,4410,4410,4410,4410];
}



//以下が使う変数
$pokeName = $targetLine[1];
$pokeType = [$targetLine[2], $targetLine[3]];
$pokeAbility = [$targetLine[4], $targetLine[5], $targetLine[6]];
$pokeStatus = [ 
    intval($targetLine[7]),
    intval($targetLine[8]),
    intval($targetLine[9]),
    intval($targetLine[10]),
    intval($targetLine[11]),
    intval($targetLine[12])
];
$pokeStatus__json = json_encode($pokeStatus);
$pokeStatusString = $targetLine[7]." - ".$targetLine[8]." - ".$targetLine[9]." - ".$targetLine[10]." - ".$targetLine[11]." - ".$targetLine[12];



?>
