
<div class="container">
    <div class="row">
        <div class="col-8">
            <?php
            include("./common/db.php");
            $query = "select * from questions where id = $qId";
            $result = $conn->query($query);
            $row = $result->fetch_assoc();
            $title = $row["title"];
            $description = $row["description"];
            $category_id = $row["category_id"];
            $question_id = $row['id'];
            $question_created_at = $row['created_at'];

            echo "
<div class='container my-4'>
<p class='card-subtitle text-muted mb-2'>Posted on " . date("F j, Y, g:i a", strtotime($question_created_at)) . "</p>
    <h3 class='mb-3'>Questiton: $title</h3>
    <p class='mb-4'>Description: $description</p>
</div>
";

            ?>
            <div class="container mb-5">
               
                <?php if(isset($_SESSION['user'])) { ?>
                     <h4 class="">Your Answer </h4>
                    <p class="mb-3">Answer in less than 5000 characters.</p>

                    <form action="./server/requests.php" method="post">

                        <input type="hidden" name="question_id" value="<?php echo $qId; ?>">
                        <textarea class="form-control mb-3" name="answer" id="answer" rows="5"
                            placeholder="Your answer"></textarea>

                        <button class="btn btn-success" name="submitAnswer" type="submit">Give Answer</button>
                    </form>
                    <?php } else { ?>
                        <h4>Please! Login to answer the Question..</h4>
                        <?php } ?>
                </div>
            <?php
            include("answers.php");
            ?>
        </div>

        <div class="col-4">
            <div class="mb-3 mt-3">
                <h1 class="heading">Related Questions</h1>
            </div>
            <?php
            include("sameCategoryQuestions.php");
            ?>
        </div>
    </div>
</div>