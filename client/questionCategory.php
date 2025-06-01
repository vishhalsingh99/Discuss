<div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="category_id" class="form-label">Question</label>
    <select name="category_id" class="form-control" id="category_id">
        <option value="">Select a Category</option>
        <?php
        include("./common/db.php");
        $query="select * from questionCategory";
        $result=$conn->query($query);
        foreach($result as $row){
            $name = ucfirst($row['name']);
            $id = $row['id'];
            echo "<option value=$id>$name</option>";

        }
        ?>
    </select>
</div>