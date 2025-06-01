<div class="container">
    <h1 class="heading"> Categories</h1>
    <?php
  include("./common/db.php");
  $query = ("select * from questionCategory");
  $result = $conn->query($query);
  foreach ($result as $row) {
    $name = ucfirst($row["name"]);
    $cId=$row["id"];

echo "
<div class='card mb-3'>
  <div class='card-body'>
    <h4 class='card-title'>  <a href='?c-id=$cId'>$name</a></h4>
  </div>
</div>
";


  }
  ?>

</div>