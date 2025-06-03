<div class="max-w-3xl mx-auto px-4 py-6">
  <h4 class="text-xl font-semibold text-gray-800 mb-4">Answers:</h4>
  <?php 
  $query =  "select * from answers where question_id=$qId";
  $result = $conn->query($query);

  foreach ($result as $row) {
    $answer = $row["answer"];
    $created_at = $row["created_at"];
    echo "
      <div class='bg-white shadow  rounded-lg p-4 mb-4'>
        <p class='text-sm text-gray-500 mb-2'>Posted on " . date("F j, Y, g:i a", strtotime($created_at)) . "</p>
        <p class=' whitespace-pre-line text-gray-700'>$answer</p>
      </div>
    ";
  }
  ?>
</div>

</div>