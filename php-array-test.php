<?php

function arraySort($arr) {
  usort($arr, function($a, $b) {
    $idA = strval($a['id']); // Convert id to string for consistent comparison
    $idB = strval($b['id']);
    
    return strcmp($idA, $idB);
  });
  return $arr;
}

$arrayObj = [
    ["id" => '4', "name" => 'kelvin Table'],
    ["id" => '3', "name" => 'kelvin Chair'],
    ["id" => '7', "name" => 'Peter Table'],
    ["id" => '4', "name" => 'kelvin Table Oliver'],
    ["id" => '4', "name" => 'kelvin Oliver'],
    ["id" => '8', "name" => 'Mary Steve']
];

print_r(arraySort($arrayObj));