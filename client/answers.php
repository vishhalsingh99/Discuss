<div class="container">
    <h4>Answers:</h4>   
<?php 


$query =  "select * from answers where question_id=$qId";
$result = $conn->query($query);

foreach ($result as $row) {
$answer = $row["answer"];
$created_at = $row["created_at"];
echo "<div class='card mb-3 py-1 px-3'>
<p class='card-subtitle text-muted mb-2'>Posted on " . date("F j, Y, g:i a", strtotime($created_at)) . "</p>
<p>$answer</p>
</div>";
}


?>
</div>