<?php require_once 'includes/connect.php';?>
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
        <a href="signin_user.php" class="link">Sign In</a>
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
    <div class="registration">
      <form action="includes/create_user.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="user_name" id="name" class="form-style" /><br />
        <label for="surname">Surname</label>
        <input type="text" name="user_surname" id="surname" class="form-style" /><br />
        <label for="password">Password</label>
        <input type="password" name="user_password" id="password" class="form-style" minlength="3" maxlength="30"/><br />
        <label for="confirm-password">Confirm Password</label>
        <input type="password" name="user_confirm_password" id="confirm-password" class="form-style" minlength="3" maxlength="30"/><br />
        <label for="email">Email</label>
        <input type="text" name="user_email" id="email" class="form-style" /><br />
        <label for="birthday">Birthday</label>
        <input type="date" name="user_date" min="1950-01-01" max="2020-01-01" id="birthday"><br />
        <label for="gender">Gender</label>
        <input type="radio" name="user_gender" value="Male" id="gender">Male
        <input type="radio" name="user_gender" value="Female">Female<br />
        <label for="phone">Phone</label>
        <input type="tel" name="user_phone" class="form-style" id="phone"><br />
        <button type="submit" class="button">Register</button>
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