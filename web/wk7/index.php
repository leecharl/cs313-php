<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Week 7</title>
  <meta name="description" content="Week 7">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
  <!-- <script src="js/scripts.js"></script> -->

</head>

<body>
    <div>
        <h3>Sign in</h3>
        <form method="post" action="newuser.php">
            <div class="form-group">
                <label for="username">Username: </label>
                <input id="username" class="form-control" type="text" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password: </label>
                <input id="password" class="form-control" type="password" name="password">
            </div>
            <button value="submit">Log in</button>
        </form>
        <h6><a href="signup.php">Sign Up</a></h6>
    </div>

  
</body>
</html>