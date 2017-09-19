<?php include_once 'includes/overall/header.php'; ?>

<div class="container">
  <h2>Student Login</h2>
  <form action="/action_page.php">
    <div class="form-group login-form-group">
      <label for="userid">User id:</label>
      <input type="text" class="form-control" id="userid" placeholder="Enter id" name="userid">
    </div>
    <div class="form-group login-form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

<?php include_once 'includes/overall/footer.php'; ?>
