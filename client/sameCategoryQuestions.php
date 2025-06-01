 

 <?php

  $query = "select * from questions where category_id=$category_id AND id !=$question_id";

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