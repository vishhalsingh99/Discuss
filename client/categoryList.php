<div class="max-w-md mx-auto px-4 py-6">

  <h1 class="text-2xl font-bold text-gray-800 mb-6">Categories</h1>

  <!-- Dropdown toggle button (visible on small screens) -->
  <button 
    id="toggleCatBtn" 
    class="block lg:hidden bg-blue-600 text-white px-4 py-2 rounded mb-4 w-full"
    onclick="document.getElementById('categoryList').classList.toggle('hidden')"
  >
    Show Categories
  </button>

  <!-- Category List -->
<div id="categoryList" class="hidden lg:block transition-all duration-500 ease-in-out">

    <?php
    include("./common/db.php");
    $query = "SELECT * FROM questionCategory";
    $result = $conn->query($query);
    foreach ($result as $row) {
      $name = ucfirst($row["name"]);
      $cId = $row["id"];
      echo "
        <div class='bg-white shadow rounded-lg p-4 mb-4'>
          <h4 class='text-lg font-semibold text-blue-600 hover:underline'>
            <a href='?c-id=$cId'>$name</a>
          </h4>
        </div>
      ";
    }
    ?>
  </div>
</div>

