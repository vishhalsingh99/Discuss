<div class="col-6">
    <h1 class="heading">My Answers</h1>
    <?php
    include("./common/db.php");

    $user_id = $_SESSION["user"]["user_id"];
    $query = "select * from answers where user_id=$user_id";
    $result = $conn->query($query);
    foreach ($result as $row) {
        $id = $row["id"];
        $question_id = $row['question_id'];
        $answer = $row["answer"];
        $created_at = $row["created_at"];
        echo "
<div class='card mb-3'>
  <div class='card-body'>
    <p class='card-title'>$answer</p>
    <p class='card-subtitle text-muted mb-2'>Posted on " . date("F j, Y, g:i a", strtotime($created_at)) . "</p>
    <a href='?q-id=$question_id' class='btn btn-outline-primary'>View Answer</a>
     <form action='./server/requests.php' method='POST' class='d-inline'>
            <input type='hidden' name='deleteAnswer' value='$id'>
            <button type='submit' class='btn btn-danger' onclick='return confirm(\"Are you sure you want to delete this question?\")'>Delete</button>
        </form>
  </div>
</div>
";
    }
    ?>
</div>