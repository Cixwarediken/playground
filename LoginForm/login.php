<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="form1.css" />
  </head>
  <body>
    <div class="form">
      <form action="form1.php" method="POST">
        <img src="img.jpg" id="img" />
        <h3>Get started</h3>
        <label> Username:<br /></label>
        <input
          type="text"
          name="username"
          placeholder="user id"
          class="user-input"
        />
        <br />
        <hr />
        <label>Password:<br /></label>
        <input
          type="password"
          name="Password"
          placeholder="password"
          class="user-input"
        /><br />
        <hr />
        <input type="submit" id="button" value="Login" />
        <h4><a href="">forgot password</a></h4>
        <h4><a href="">create new account</a></h4>
      </form>
    </div>
  </body>
</html>
