<div class="w-full max-w-md mx-auto mb-6">
  <label for="category_id" class="block text-gray-700 font-semibold mb-2">Question Category</label>
  <select name="category_id" id="category_id"
          class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
    <option value="">Select a Category</option>
    <?php
    include("./common/db.php");
    $query = "select * from questionCategory";
    $result = $conn->query($query);
    foreach($result as $row){
        $name = ucfirst($row['name']);
        $id = $row['id'];
        echo "<option value=$id>$name</option>";
    }
    ?>
  </select>
</div>
