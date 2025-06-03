<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
  <div class="flex flex-col lg:flex-row gap-6">
    
    <!-- My Questions -->
    <div class="w-full lg:w-1/2">
      <h1 class="text-2xl font-bold text-gray-800 mb-4">My Questions</h1>
      
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
        <div class='bg-white shadow rounded-lg p-6 mb-4'>
          <h4 class='text-xl font-semibold text-gray-800 mb-2'>$title</h4>
          <p class='text-sm text-gray-500 mb-4'>Posted on " . date("F j, Y, g:i a", strtotime($created_at)) . "</p>
          <div class='flex gap-3'>
            <a href='?q-id=$id' class='inline-block px-4 py-2 text-sm text-blue-600 border border-blue-600 rounded hover:bg-blue-600 hover:text-white transition duration-200'>View</a>
            <form action='./server/requests.php' method='POST' onsubmit='return confirm(\"Are you sure you want to delete this question?\")'>
              <input type='hidden' name='deleteQuestion' value='$id'>
              <button type='submit' class='px-4 py-2 text-sm text-white bg-red-600 rounded hover:bg-red-700 transition duration-200'>Delete</button>
            </form>
          </div>
        </div>
        ";
      }
      ?>
    </div>

    <!-- My Answers -->
  
      <?php include("myAnswers.php"); ?>
   
    
  </div>
</div>


  