<?php
$numbers = [1, 44, 55, 22];
$fruits = array('apple', 'orange', 'pear');

// print_r($numbers);
// var_dump($numbers);
echo $fruits[2];

$person = [
  'first_name' => 'Armando',
  'last_name' => 'Meza',
  'email' => 'amezal'
];

$people = [
  [
    'first_name' => 'Armando',
    'last_name' => 'Meza',
    'email' => 'amezal'
  ],
  [
    'first_name' => 'Alejandra',
    'last_name' => 'Prado',
    'email' => 'ale'
  ],
  [
    'first_name' => 'Pia',
    'last_name' => 'Lopez',
    'email' => 'pial'
  ]
];

// print_r($people[0]);

var_dump(json_encode($people));
