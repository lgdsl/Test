//echo 'Hello world <br>';
//
//$a = "Hello world <br>";
//$b = ['qwe', 'asd'];
//$c = [
//    'qwe' => 'qwe',
//    'asd' => 'asd',
//];
//
//$number1 = 45765;
//$number2 = 465;
//
//echo $a;
////echo $b;
//
//
////echo $c['qwe'];
//function sumString($string)
//{
//    return $string . ' - sumString' ;
//}
//
//function pushItem($array, $item, $value)
//{
//    $array[$item] = $value;
//    $array['hadf'] = sumString($value);
//    $array[] = 'sdfbshdvhv';
//
//    return $array;
//}
//
//$sumNumber1AndNumber2 = pushItem($c,  'sjidhysc', 'Попка дурак');
//
////echo $sumNumber1AndNumber2;
//
////var_dump($sumNumber1AndNumber2);
//foreach ($sumNumber1AndNumber2 as $key => $item) {
//    if ($key === 0) {
//       // $item = 'Попка дурак';
//        $sumNumber1AndNumber2[$key] = 'Попка дурак';
//
//        echo $key . ' - ';
//        echo $sumNumber1AndNumber2[$key] . '<br>';
//        continue;
//    }
//
//    echo $key . ' - ';
//    echo $item . '<br>';
//}

<?php
$warframeItems = [
    'Amesha' => [
        'name' => 'Amesha',
        'urlPhoto' => 'http://warframe.vape-build.ru/Images/amesha.png'
    ],
    'Banshee Prime' => [
        'name' => 'Banshee Prime',
        'urlPhoto' => 'http://warframe.vape-build.ru/Images/banshee_prime.png'
    ],
    'Excalibur Umbra'  => [
        'name' => 'Excalibur Umbra',
        'urlPhoto' => 'http://warframe.vape-build.ru/Images/excalibur_umbra.png'
    ],
];
//
//foreach ($warframeItems as $warframeItem) {
//
//    foreach ($warframeItem as $value) {
//        $image = $warframeItem['urlPhoto'];
//        $name = $warframeItem['name'];
//    }
//    $qwe = $value;
//echo '
//<div class="conteneur_vignette">
//    <div class="vignette">
//        <img src="' . $qwe . '">
//        <a href="#"></a>
//    </div>' . $warframeItem . '
//</div>
//';
//}
//?>