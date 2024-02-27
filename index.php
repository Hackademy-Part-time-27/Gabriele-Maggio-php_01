<?php

//TRACCIA NUMERO 1

// $numInt = 10;

// $float = 1.3;

// $parola = true;

// $testo = 'questa è una frase';


// var_dump($numInt);
// var_dump($float);
// var_dump($parola);
// var_dump($testo);

//TRACCIA NUMERO 2



// $text1 = 'Marco';
// $text2 = 'hai';
// $text3 = 'sete';
// $text4 = '?';
// $text5 = 'Perchè';
// $text6 = $text2;
// $text7 = 'bevuto';
// $text8 = 'tutto';


// echo $text1 . ' ' . $text2 . ' ' . $text3 . ' ' . $text4 . ' ' . $text5 . ' ' . $text2 . ' ' . $text7 . ' ' . $text8 . '!';

//TRACCIA NUMERO 3



$words1 = [
    'una',
    67,
    'vita',
    'colle',
    'mi',
    'rosso',
    [
        'oscura',
        'era',
        89,
        [
            'mezzo',
            [
                'cammin',
                'Nel',
                [
                    'selva',
                    'la',
                    [
                        'via',
                        'una',
                        true,
                    ]
                ],
            ]
        ],
        'ritrovai',
        'per'
    ],
    'diritta',
    'di'
];
$words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'nostra',
    'elemento3' => [
        'Virgilio',
        'smarrita',
        'ché'
    ]
];

var_dump(
    $words1[6][3][1][1] . ' ' .
    $words1[6][3][0] . ' ' .
    $words1[8] . ' ' .
    $words1[6][3][1][0] . ' ' .
    $words2['elemento2'] . ' ' .
    $words1[2] . ' ' .
    $words1[4] . ' ' .
    $words1[6][4] . ' ' .
    $words1[6][5] . ' ' .
    $words1[6][3][1][2][2][1] . ' ' .
    $words1[6][3][1][2][0] . ' '. 
    $words1[6][0] . ', ' .
    $words2['elemento3'][2] . ' '. 
    $words1[6][3][1][2][1] . ' '. 
    $words1[7] . ' ' .
    $words1[6][3][1][2][2][0] . ' ' .
    $words1[6][1] . ' ' . 
    $words2['elemento3'][1]
);