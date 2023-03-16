<?php
session_start();
require_once("../classes/User.php");
require_once("../classes/Article.php");
var_dump($_GET["pageNumber"]);
if (isset($_GET["pageUp"]) || isset($_GET["pageDown"])) {

    $article = new Article(null, null, null, null, null, null);
    // $article->createArticle();
    $allArticles = $article->getArticles($page);
    var_dump($allArticles);
}
