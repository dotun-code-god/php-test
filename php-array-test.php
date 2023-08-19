<?php
/**
     Write a function to that will sort the object below in ascending order based on id.
    Note that the id can be any of string or number
    The function will take an array as an argument and return a new array based on the instruction above.

    const arrayObj = [
    {id: '4', name: 'kelvin Table'},
    {id: '3', name: 'kelvin Chair'},
    {id: '7', name: 'Peter Table'},
    {id: '4', name: 'kelvin Table Oliver'}
    {id: 4, name: 'kelvin Oliver'}
    {id: '8', name: 'Mary Steve'}
    ]
 */


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