<?php

$pdo = new PDO('mysql:dbname=hillel_laravel2;host=localhost', 'homestead', 'secret');

$pages = [
    ['title' => 'title 1', 'description' => 'description 1'],
    ['title' => 'title 2', 'description' => 'description 2'],
    ['title' => 'title 3', 'description' => 'description 3'],
];

$pdo->beginTransaction();

try {
    $object = $pdo->prepare('INSERT INTO pages (title, description) VALUE (:title, :description)');
    $object->bindParam(':title', $title);
    $object->bindParam(':description', $description);

    $object = $pdo->prepare('INSERT INTO product_params (title, description) VALUE (:title, :description)');
    // update
awdawd
    foreach ($pages as $page) {
        ['title' => $title, 'description' => $description] = $page;
        $object->execute();
    }
    $pdo->commit();
} catch (\Exception $exception){
    $pdo->rollBack();
    echo $exception->getMessage().PHP_EOL;
}

//$object = $pdo->prepare('INSERT INTO pages (title, description) VALUE (:title, :description)');
//$object->bindParam(':title', $title);
//$object->bindParam(':description', $description);
//
//foreach ($pages as $page) {
//    ['title' => $title, 'description' => $description] = $page;
//    if (!$object->execute()) {
//        $pdo->rollBack();
//    }
//}
//if ($isSuccess) {
//    $pdo->commit();
//}

