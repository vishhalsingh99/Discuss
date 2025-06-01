<div class="container">
  <div class="row">
    <div class="col-8">
    <h1 class="heading">Questions</h1>
  <?php
  include("./common/db.php");
  if(isset($_GET["c-id"])){
  $query = "select * from questions where category_id=$cId";
  } else if (isset($_GET["latest"])){
    $query = "select * from questions order by id desc";
  } else if (isset($_GET['search'])) {
    $query = "select * from questions where `title` like '%$search%'";

  }
  else {
      $query = "select * from questions";
  } 

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
  </div>
</div>
";


  }
  ?>
  </div>
  <div class="col-4">
    <?php include("categoryList.php");?>
  </div>
  </div>
</div>
