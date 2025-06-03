<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
    <div class="flex flex-col lg:flex-row gap-6">


        <!-- Main Question and Answer Section -->
        <div class="w-full lg:w-2/3">
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
      <div class='bg-white rounded-lg shadow p-6 mb-6'>
        <p class='text-sm text-gray-500 mb-2'>Posted on " . date("F j, Y, g:i a", strtotime($question_created_at)) . "</p>
        <h3 class='text-xl font-semibold text-gray-800 mb-3'>Question: $title</h3>
        <p class='whitespace-pre-line text-gray-700'>Description: $description</p>
      </div>
      ";
            ?>

            <!-- Answer Form / Login Prompt -->
            <div class="bg-white rounded-lg shadow p-6 mb-6">
                <?php if (isset($_SESSION['user'])) { ?>
                    <h4 class="text-lg font-semibold text-gray-800 mb-1">Your Answer</h4>
                    <p class="text-sm text-gray-500 mb-4">Answer in less than 5000 characters.</p>
                    <form action="./server/requests.php" method="post" class="space-y-4">
                        <input type="hidden" name="question_id" value="<?php echo $qId; ?>">
                        <textarea
                            class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            name="answer" id="answer" rows="5" placeholder="Your answer"></textarea>
                        <button class="bg-green-600 text-white px-5 py-2 rounded hover:bg-green-700 transition duration-200"
                            name="submitAnswer" type="submit">Give Answer</button>
                    </form>
                <?php } else { ?>
                    <h4 class="text-red-600 font-medium">Please login to answer the question.</h4>
                <?php } ?>
            </div>

            <?php include("answers.php"); ?>


                  <!-- Sidebar: Related Questions -->
        <div class="w-full lg:w-1/3">
            <div class="bg-white rounded-lg shadow p-4 mb-4">
                <h1 class="text-xl font-bold text-gray-800 mb-4">Related Questions</h1>
                <?php include("sameCategoryQuestions.php"); ?>
            </div>
        </div>
        </div>


  



    </div>
</div>