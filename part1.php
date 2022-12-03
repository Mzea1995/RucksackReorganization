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
$rucksacks = explode(PHP_EOL, $input);
foreach ($rucksacks as $rucksack) {
    $rucksackParts = str_split($rucksack, (strlen($rucksack) / 2));
    $firstCompartmentContent = str_split($rucksackParts[0]);
    $secondCompartmentContent = str_split($rucksackParts[1]);
    $commonItem = implode(
        array_unique(
            array_intersect(
                $firstCompartmentContent,
                $secondCompartmentContent
            )
        )
    );
    $priorities += array_search($commonItem, $itemsPriority, true) + 1;
}

echo $priorities;
