<?php

$input = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'input.txt');
$itemsPriority = [
    'a',
    'b',
    'c',
    'd',
    'e',
    'f',
    'g',
    'h',
    'i',
    'j',
    'k',
    'l',
    'm',
    'n',
    'o',
    'p',
    'q',
    'r',
    's',
    't',
    'u',
    'v',
    'w',
    'x',
    'y',
    'z',
    'A',
    'B',
    'C',
    'D',
    'E',
    'F',
    'G',
    'H',
    'I',
    'J',
    'K',
    'L',
    'M',
    'N',
    'O',
    'P',
    'Q',
    'R',
    'S',
    'T',
    'U',
    'V',
    'W',
    'X',
    'Y',
    'Z'
];
$priorities = 0;
$rucksacksChunks = array_chunk(explode(PHP_EOL, $input), 3);
foreach ($rucksacksChunks as $chunk) {
    $firstRucksack = str_split($chunk[0]);
    $secondRucksack = str_split($chunk[1]);
    $thirdRucksack = str_split($chunk[2]);
    $commonItem = implode(
        array_unique(
            array_intersect(
                $firstRucksack,
                $secondRucksack,
                $thirdRucksack
            )
        )
    );
    $priorities += array_search($commonItem, $itemsPriority, true) + 1;
}

echo $priorities;
