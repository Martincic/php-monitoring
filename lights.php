<html>
<?php 
  include('assets/include-bootstrap.php'); 
  include('assets/save.php');
?>
<body>

<form action="controller.php" method="POST" class="w-50 mt-5 mx-auto">
  <div class="form-group">
    <label for="username">Email address</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</body>
</html>
