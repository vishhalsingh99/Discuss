<div class="container margin-top-15">
    <h1 class="offset-sm-5 margin-bottom-15">SignUp</h1>
    <form method="post" action="./server/requests.php">
  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="username" class="form-label">Name</label>
    <input type="text" name="username" class="form-control" id="username" placeholder="Enter your name">
  </div>
   <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
 <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
  </div>
   <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="confirmPassword" class="form-label">Confirm Password</label>
    <input type="password" name="confirmPassword" class="form-control" id="password" placeholder="Enter your password">
  </div>
  <button type="submit" name="signup" class="btn btn-primary offset-sm-3">SignUp</button>
</form>
</div>