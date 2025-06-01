<div class="container">
  <div class="row">
    <div class="col-6">
    <h1 class="heading">My Questions</h1>
  <?php
  include("./common/db.php");

$user_id = $_SESSION["user"]["user_id"];
$query = "select * from questions where user_id=$user_id";
  $result = $conn->query($query);
  foreach ($result as $row) {
    $title = $row["title"];
    $description = $row["description"];
    $id = $row["id"];
    $created_at = $row["created_at"];
echo "
<div class='card mb-3'>
  <div class='card-body'>
    <h4 class='card-title'>$title</h4>
    <p class='card-subtitle text-muted mb-2'>Posted on " . date("F j, Y, g:i a", strtotime($created_at)) . "</p>
    <a href='?q-id=$id' class='btn btn-outline-primary'>View Question</a>
   <form action='./server/requests.php' method='POST' class='d-inline'>
            <input type='hidden' name='deleteQuestion' value='$id'>
            <button type='submit' class='btn btn-danger' onclick='return confirm(\"Are you sure you want to delete this question?\")'>Delete</button>
        </form>
  </div>
</div>
";


  }
  ?>
  </div>
  <?php 
  include("myAnswers.php");
  ?>
  </div>
  </div>

  