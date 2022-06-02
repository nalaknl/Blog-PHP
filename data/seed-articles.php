<?php

$articles = json_decode(file_get_contents('./articles.json'), true);

$dns = 'mysql:host=127.0.0.1:3306;dbname=blog';
$user = 'root';
$pwd = '';


$pdo = new PDO($dns, $user, $pwd);
//requete sql
$statement = $pdo->prepare(
    'INSERT INTO article (title, category, content, images) VALUE(:title, : category, :content, :images)'
);
// foreach ($articles as $article) {
//     $statement->bindValue(':title', $article['title']);
//     $statement->bindValue(':category', $article['category']);
//     $statement->bindValue(':image', $article['content']);
//     $statement->bindValue(':content', $article['image']);
//     $statement->execute();
// }
