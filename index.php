<?php
// server should keep session data for AT LEAST 1 hour
ini_set('session.gc_maxlifetime', 3600);

// each client should remember their session id for EXACTLY 1 hour
session_set_cookie_params(3600);

// ready to go
session_start();
if(!empty($_GET['id'])) {
    $_SESSION['user_id'] = $_GET['id'];
}
?>

<?php
require_once "includes/connect.php";
require_once "includes/functions.php";

$articles = getAllArticles($connect);
?>

<?php //require_once "connect.php";?><!-- // Connection for Search Field-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header>
      <div class="header-wrapper">
        <div class="header-logo">
          <h1><a href="index.php">News Site</a></h1>
        </div>
            <div class="header-button">

            <?php if(isset($_SESSION['user_id'])):?>
                <?='Welcome ' . $_SESSION['user_name'] . '!!!';?>
                <?='<a href="includes/logout.php">Logout</a>';?>
            <?php else: ?>
                <?='<a href="signin_user.php" class="link">Sign In</a>';?>
            <?php endif;?>

            </div>
      </div>
      <div class="search-wrapper">
        <form action="index.php" method="POST">
          <input type="text" name="search" placeholder="Search"/>
          <button type="submit" class="button">Search</button>
        </form>
      </div>
    </header>
    <nav>
      <ul>
        <li><a href="">Art</a></li>
        <li><a href="">Business</a></li>
        <li><a href="">Tech</a></li>
        <li><a href="">Marketing</a></li>
        <li><a href="">Contact</a></li>
      </ul>
    </nav>
    <article>
        <?php foreach ($articles as $article):?>
            <section>
                <h2><?=$article['heading'];?></h2>
                <figure>
                    <img src="<?=$article['img_path'];?>" alt="" width="352" height="352" />
                </figure>
                <p>
                    <?=$article['text'];?>
                </p>
            </section>
        <?php endforeach;?>

      <div class="pagination">
        <ul>
          <li><a href="">1</a></li>
          <li><a href="">2</a></li>
          <li><a href="">3</a></li>
          <li><a href="">4</a></li>
          <li><a href="">5</a></li>
          <li><a href="">6</a></li>
        </ul>
      </div>
    </article>
    <footer>
      <div class="links">
        <ul>
          <li><a href="">Label</a></li>
          <li><a href="">Label</a></li>
          <li><a href="">Label</a></li>
          <li><a href="">Label</a></li>
          <li><a href="">Label</a></li>
          <li><a href="">Label</a></li>
          <li><a href="">Label</a></li>
          <li><a href="">Label</a></li>
        </ul>
      </div>
      <div class="copy"><span>Copyright</span> &copy; <?=date('Y');?></div>
    </footer>
  </body>
</html>
