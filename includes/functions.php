<?php
function clearStringField($input){
    return htmlspecialchars(trim($input));
}

function getAllArticles($connect){
    $select = "SELECT heading, img_path, text FROM articles ORDER BY article_id DESC LIMIT 3";
    $query = mysqli_query($connect, $select);
    $row = mysqli_fetch_all($query, MYSQLI_ASSOC);

    mysqli_free_result($query);

    return $row;
}

function getLastArticle($connect){
    $select = "SELECT heading, img_path, text FROM articles ORDER BY article_id DESC LIMIT 3";
    $query = mysqli_query($connect, $select);
    $row = mysqli_fetch_assoc($query);

    mysqli_free_result($query);

    return $row;
}

// for dump experimantal
function getArticleById($connect, $article_id){
    $select = "SELECT heading, img_path, text FROM articles WHERE article_id = " . $article_id;
    $query = mysqli_query($connect, $select);
    $row = mysqli_fetch_all($query, MYSQLI_ASSOC);

    mysqli_free_result($query);

    for($i = 0; $i < count($row); $i++) {
        return $row[$i];
    }
}