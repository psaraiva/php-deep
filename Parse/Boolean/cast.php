<?php

print('......:PARSE: BOOL :......'.PHP_EOL);
print('......:CAST: (bool):......'.PHP_EOL);
print(PHP_EOL.'......:   STRING   :......'.PHP_EOL);

$strings = [
    '',
    ' ',
    'true',
    'false',
    '1',
    '0',
    '01',
    '-1',
];

$i=0;
foreach($strings as $str) {
    echo sprintf('#%d Parse string \'%s\':%s', $i++, $str, PHP_EOL);
    var_dump((bool) $str);
}

$integers = [
    -1,
    0,
    1,
    02,
    10
];

$i=0;
print(PHP_EOL.'......:   INTEGER  :......'.PHP_EOL);
foreach($integers as $int) {
    echo sprintf('#%d Parse integer \'%d\' %s', $i++, $int, PHP_EOL);
    var_dump((bool) $int);
}

$floats = [
    -0.000001,
    0.000000,
    0.000001,
    0.000010,
    0.999999,
    1.000000,
    1.000001
];

$i=0;
print(PHP_EOL.'......:   FLOAT    :......'.PHP_EOL);
foreach($floats as $float) {
    echo sprintf('#%d Parse float \'%f\' %s', $i++, $float, PHP_EOL);
    var_dump((bool) $float);
}
