<?php
require_once("header.php");
$article = new Article(null, null, null, null);
// $article->createArticle();
$allArticles = $article->getAllArticles();
var_dump($allArticles[0]["text"]);
