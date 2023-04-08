<?php

function generateUsersArray()
{
    $names = ['Olga', 'Dima', 'Alice', 'Ulyana', 'Sergey'];
    $users = [];

    for ($i = 0; $i < 50; $i++) {
        $users[] = [
            'id' => $i,
            'name' => $names[array_rand($names)],
            'age' => mt_rand(18, 45),
        ];
    }

    return $users;
}

function saveUsersToJson($users, $filename)
{
    $jsonData = json_encode($users, JSON_PRETTY_PRINT);
    file_put_contents($filename, $jsonData);
}

function getUsersFromJson($filename)
{
    $jsonData = file_get_contents($filename);
    return json_decode($jsonData, true);
}

function countUsersByName($users)
{
    $names = [];
    foreach ($users as $user) {
        $name = $user['name'];
        if (!isset($names[$name])) {
            $names[$name] = 1;
        } else {
            $names[$name]++;
        }
    }
    return $names;
}

function calculateAverageAge($users)
{
    $agesSum = 0;
    foreach ($users as $user) {
        $agesSum += $user['age'];
    }
    return $agesSum / count($users);
}
?>