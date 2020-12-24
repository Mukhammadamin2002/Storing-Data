<?php include "functions.php"; ?>
<?php include "function.php"; ?>
<link rel="stylesheet" type="text/css" href="style.css">
<div class="login-page">
  <div class="form">
    
    <form class="login-form" action=" <?php $_SERVER['PHP_SELF']; ?>" method="post">
      <input type="text" name="username" placeholder="username"/>
      <input type="password" name="password" placeholder="password"/>
      <button type="submit" class="submit" name="submit">login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>

  </div>
</div>