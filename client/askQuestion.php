<div class="container margin-top-15">
    <h1 class="offset-sm-5 margin-bottom-15">Ask a Question</h1>
    <form method="post" action="./server/requests.php">
        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Enter Question">
        </div>
        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="description" class="form-label">Description</label>
            <textarea type="text" name="description" class="form-control" id="description"
                placeholder="Enter Description"></textarea>
        </div>
        <!-- <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="tags" class="form-label">Tags</label>
            <input type="text" name="tags" class="form-control" id="tags" placeholder="Enter tags">
        </div> -->
            <?php
            include("questionCategory.php");
            ?>

        <div class="col-6 offset-sm-3 margin-bottom-15">
            <button type="submit" name="askQuestion" class="btn btn-primary">Post Question</button>
        </div>
    </form>
</div>