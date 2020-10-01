<?php 
header('Content-type: application/json; charset=utf-8');

$response = [
    [
        'id' => '01576',
        'name' => 'Edgar',
        'age' => 23,
        'country' => 'Mexico',
        'email' => 'id@email.com'

    ],
    [
        'id' => '02945',
        'name' => 'Ramon',
        'age' => 25,
        'country' => 'Canada',
        'email' => 'ed@email.com'
    ]
];

echo json_encode($response);

?>
