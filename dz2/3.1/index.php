<?php
require('src/functions.php');

$users = generateUsersArray();
saveUsersToJson($users, 'users.json');
$users = getUsersFromJson('users.json');
$countByName = countUsersByName($users);
$averageAge = calculateAverageAge($users);

echo "Количество пользователей с каждым именем:\n";
foreach ($countByName as $name => $count) {
    echo "<br>$name: $count\n";
}

echo "<br>Средний возраст пользователей: $averageAge\n";
?>