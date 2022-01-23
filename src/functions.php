<?php

const NAMES = ['MIHA', 'ALEX', 'VOVA', 'LENA', 'YULIA'];

function createUser()
{

    return [
        'name' => NAMES[array_rand(NAMES)],
        'age' => mt_rand(18, 45)
    ];
}