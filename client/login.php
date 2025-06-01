<div class="container margin-top-15">
  <h1 class="offset-sm-5 margin-bottom-15">Login</h1>
  <form method="post" action="./server/requests.php">
    <div class="col-6 offset-sm-3 margin-bottom-15">
      <label for="email" class="form-label">Email</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
    </div>
    <div class="col-6 offset-sm-3 margin-bottom-15">
      <label for="password" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
    </div>
    <button type="submit" name="login" class="btn btn-primary offset-sm-3">Login</button>
  </form>
</div>