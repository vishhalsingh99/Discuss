<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
  <div class="flex flex-col-reverse lg:flex-row gap-6">

    
    <!-- Questions Section -->
    
    <div class='w-full lg:w-2/3'>
      <h1 class='text-2xl font-bold text-gray-800 mb-4'>Questions</h1>


    <?php
    include("./common/db.php");
    if (isset($_GET["c-id"])) {
      $query = "select * from questions where category_id=$cId";
    } else if (isset($_GET["latest"])) {
      $query = "select * from questions order by id desc";
    } else if (isset($_GET['search'])) {
      $query = "select * from questions where `title` like '%$search%'";
    } else {
      $query = "select * from questions";
    }
      $result = $conn->query($query);

    foreach ($result as $row) {
      $title = $row["title"];
      $description = $row["description"];
      $id = $row["id"];
      $created_at = $row["created_at"];
      echo "
        <div class='bg-white rounded-lg shadow-md mb-4 p-6'>
          <h4 class='text-xl font-semibold text-gray-800 mb-2'>$title</h4>
          <p class='text-sm text-gray-500 mb-4'>Posted on " . date("F j, Y, g:i a", strtotime($created_at)) . "</p>
          <a href='?q-id=$id' class='inline-block px-4 py-2 text-sm text-blue-600 border border-blue-600 rounded hover:bg-blue-600 hover:text-white transition duration-200'>View Question</a>
        </div>
        ";
    }
    ?>
  </div>


    <!-- Sidebar Section -->
    <div class='w-full lg:w-1/3'>

    <?php include('categoryList.php');?>
    </div>

</div>
</div>