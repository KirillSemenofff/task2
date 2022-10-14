<?php
                    #Task №1
echo '#################### TASK 1 ####################' . PHP_EOL;
$firstArray = [];
$secondArray = [];
for ($i = 1; $i <= 10; $i++){
    array_push($firstArray, rand(1,100));
}
print_r($firstArray);
for ($a=1; $a <= 9; $a++) {
    if ($a % 2 == 1) {
        echo $firstArray[$a] . PHP_EOL;
    }
}
foreach ($firstArray as $value){
    if ($value % 2 == 0){
        array_push($secondArray, $value);
    }
}
unset($value);
print_r($secondArray);

                        #Task №2
echo '#################### TASK 2 ####################' . PHP_EOL;
$counter = 1;
$assocArray = [];
foreach ($firstArray as $value){
    $assocArray['number ' . $counter] = $value;
    $counter++;
}
$keysOfAssocArray = array_keys($assocArray);
echo $assocArray[$keysOfAssocArray[1]] . PHP_EOL . $assocArray[$keysOfAssocArray[4]] . PHP_EOL . $assocArray[$keysOfAssocArray[6]] . PHP_EOL;

                        #Task №3
echo '#################### TASK 3 ####################' . PHP_EOL;
$arrayOne = [];
$arrayTwo = [];
for ($b = 1; $b <= 5; $b++){
    array_push($arrayOne, rand(1,100));
    array_push($arrayTwo, rand(1,100));
}
$flipArrayOne = array_flip($arrayOne);
$flipArrayTwo = array_flip($arrayTwo);
print_r(array_diff_key($flipArrayOne, $flipArrayTwo));

                        #Task №4

###Функция isset показала самый долгий результат в поиске ключа массива(было проверенно в задании один в другой файле php)
###array_key_exists показал более быстрый результат и, по-моему мнению, эта функция будет самой быстрой
###по скольку она ищет именно ключ среди списка ключей,
###а остальные функции in_array и array_search, они ищет ключ, перебирая весь массив
