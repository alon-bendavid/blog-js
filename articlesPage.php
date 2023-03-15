<?php
require_once("header.php");
$article = new Article(null, null, null, null);
// $article->createArticle();
$allArticles = $article->getArticles();
foreach ($allArticles as $article) { ?>
    <a href="chosen_article.php?article= <?php echo $article["id"] ?>"><?php foreach ($article as $detail) {
                                                                            echo $detail . " ";
                                                                        } ?></a>

<?php
}
// var_dump($allArticles);
?>

<body>
    <form method="get" id="pageBtns">
        <button name="page" type="submit" id="pageUp">Page up >></button>
        <input id="pageN" type hidden name="pageNumber"></input>

        <button name="page" type="submit" id="pageDown">
            << Page down</button>

    </form>



</body>

</html>