<!-- aading the header file  -->
<?php
require "include/header.php" ;
?>
<h1 class="text-center"> Reister:</h1>
<br>
<div class="block">
<!-- <form id="form" method="get" action="action1.php">
<div class="form-floating mb-3">
    
    <input type="text" class="form-control" name="name1" id="floatingInput" placeholder="Name">
    <label for="floatingInput">Name:</label>
  </div>
<div class="form-floating mb-3">
    
  <input type="email" class="form-control" id="floatingInput" name="email1" placeholder="name@example.com">
  <label for="floatingInput">Email address</label>
</div>
<div class="form-floating">
  <input type="password" class="form-control" name="pass1" id="floatingPassword" placeholder="Password">
  <label for="floatingPassword">Password</label>
</div>
<br>
<input type="button" value="submit">
</form> -->
<form action="execute.php" method="post">
    <input type="text" name="name1" id="">
    <input type="email" name="email1">
    <input type="password" name="pass1">
    <button>submit</button>
</form>
</div>
<!-- adding the footer file ..  -->
<!-- <?php
echo $_POST["name1"].$_POST["email1"].$_POST["pass1"];
?> -->
<?php
require "include/footer.php";
?>

