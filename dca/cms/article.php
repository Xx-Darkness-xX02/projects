<?php
include_once ('includes/connections.php');
include_once('includes/article.php');

$article = new Article;

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $data = $article->fetch_data($id);

    print_r($data);

} else {
    header('location: index.php');
    exit();
}