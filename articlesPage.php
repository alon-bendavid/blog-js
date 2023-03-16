<?php
require_once("header.php");
//fetch all articles 
$page = $_GET["page"];
var_dump($page);
$article = new Article(null, null, null, null, null, null);
// $article->createArticle();
$allArticles = $article->getArticles($page);

foreach ($allArticles as $article) { ?>
    <a href="chosen_article.php?article= <?php echo $article["id"] ?>"><?php {
                                                                            echo $article["text"] . '<img src="' . $article["picture"] . '" alt="">' . " ";
                                                                        } ?></a>
    <!-- <a href="chosen_article.php?article= <?php echo $article["id"] ?>"><?php foreach ($article as $detail) {
                                                                                var_dump($detail)  . " ";
                                                                            } ?></a> -->

<?php
}
// var_dump($allArticles);
?>

<body>
    <div>
        <button>
            <a id="pageDown" href="articlesPage.php?page=2">page down</a>
        </button>
        <button>
            <a id="pageUp" href="">page up</a>
        </button>

    </div>

    <!-- <form method="get" id="pageBtns">
        <button name="page" type="submit" id="pageUp">Page up >></button>
        <input id="pageN" type hidden name="pageNumber"></input>

        <button name="page" type="submit" id="pageDown">
            << Page down</button>

    </form> -->



</body>

</html>