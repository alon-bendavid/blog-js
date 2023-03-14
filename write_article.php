<?php
require_once("header.php");
if (isset($_POST["articleSub"])) {
    $article = new Article(null, $_POST['text'], $_FILES['picture'], $_POST['id_utilisateur']);
    $article->createArticle();
    $allArticles = $article->getAllArticles();
    var_dump($allArticles);
}

?>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="text">Text:</label>
        <input type="text" name="text" id="text" required>

        <label for="picture">Picture:</label>
        <input type="file" name="picture" id="picture">

        <label for="id_utilisateur">User ID:</label>
        <input type="number" name="id_utilisateur" id="id_utilisateur" required>

        <input type="submit" value="Submit" name="articleSub">
    </form>

</body>

</html>