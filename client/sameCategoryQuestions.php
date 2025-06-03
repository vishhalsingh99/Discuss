 

 <?php

  $query = "select * from questions where category_id=$category_id AND id !=$question_id";

  $result = $conn->query($query);
  foreach ($result as $row) {
    $title = $row["title"];
    $description = $row["description"];
    $id = $row["id"];
    $created_at = $row["created_at"];
echo "
<div class='bg-white rounded-lg shadow-md mb-4 p-6'>
  <div>
    <h4 class='text-xl font-semibold text-gray-800 mb-2'>$title</h4>
    <p class='text-sm text-gray-500 mb-4'>Posted on " . date('F j, Y, g:i a', strtotime($created_at)) . "</p>
    <a href='?q-id=$id' class='inline-block px-4 py-2 text-sm text-blue-600 border border-blue-600 rounded hover:bg-blue-600 hover:text-white transition duration-200'>View Question</a>
  </div>
</div>
";
}
  ?>