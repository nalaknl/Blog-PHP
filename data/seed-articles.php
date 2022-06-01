<?php

$articles = json_decode(file_get_contents('./articles.json'), true);

$dns = 'mysql:host=127.0.0.1:3306;dbname=blog';
$user = 'root';
$pwd = '';


$pdo = new PDO($dns, $user, $pwd);
$statement = $pdo->prepare(
    'INSERT INTO article (title, category, content, image) VALUE(:title, : category, :content, :image)'
);
foreach ($articles as $article) {
    $statement->bindValue(':title', $article['title']);
    $statement->bindValue(':category', $article['category']);
    $statement->bindValue(':image', $article['image']);
    $statement->bindValue('content', $article['content']);
    $statement->execute();
}
