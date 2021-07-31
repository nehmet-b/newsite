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
        <a href="#" class="link">Sign In</a>
      </div>
    </div>
    <div class="search-wrapper">
      <form action="">
        <input type="text" name="search" />
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
    <div class="signin-wrapper">
      <form action="includes/signin_user.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="user_name" id="name" class="form-style" /><br />
        <label for="password">Password</label>
        <input type="password" name="user_password" id="password" class="form-style" /><br />
        <input type="checkbox" name="user_checkbox" id="checkbox" value="checked"/>
        <span>Remember Me</span>
        <a href="forgotpassword.php">Forgot Password?</a>
        <a href="create_user.php">Registration</a>
        <button type="submit" class="button">Sign In</button>
      </form>
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
    <div class="copy"><span>Copyright</span> &copy; 2020</div>
  </footer>
</body>
</html>