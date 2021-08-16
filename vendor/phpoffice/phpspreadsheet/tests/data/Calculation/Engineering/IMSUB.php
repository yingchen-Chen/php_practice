<?php

use PhpOffice\PhpSpreadsheet\Calculation\Functions;

return [
    [
        Functions::NAN(),
        '12.34+5.67j',
        '123.45+67.89i',
    ],
    [
        Functions::NAN(),
        '12.34+5.67j',
        'Invalid Complex Number',
    ],
    [
        '111.11+62.22j',
        '123.45+67.89j',
        '12.34+5.67j',
    ],
    [
        '-111.11-62.22j',
        '12.34+5.67j',
        '123.45+67.89j',
    ],
    [
        '-111.11-62.22i',
        '12.34+5.67i',
        '123.45+67.89i',
        '123.45+67.89i',
    ],
    [
        '-135.79+62.22i',
        '-12.34-5.67i',
        '123.45-67.89i',
    ],
    [
        '135.79+62.22i',
        '12.34-5.67i',
        '-123.45-67.89i',
    ],
    [
        '111.11+62.22i',
        '-12.34-5.67i',
        '-123.45-67.89i',
    ],
];