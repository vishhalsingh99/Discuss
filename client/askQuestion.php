<div class="max-w-lg mx-auto mt-10 bg-white shadow-md rounded-lg p-8">
  <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">Ask a Question</h1>

  <form method="post" action="./server/requests.php">
    <div class="mb-5">
      <label for="title" class="block text-gray-700 font-semibold mb-2">Title</label>
      <input type="text" name="title" id="title" placeholder="Enter Question"
        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
    </div>

    <div class="mb-5">
      <label for="description" class="block text-gray-700 font-semibold mb-2">Description</label>
      <textarea name="description" id="description" placeholder="Enter Description" rows="4"
        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 resize-y"></textarea>
    </div>

    <!-- PHP Include for category dropdown -->
    <div class="mb-5">
      <?php include("questionCategory.php"); ?>
    </div>

    <div class="mb-4">
      <button type="submit" name="askQuestion"
        class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition duration-200">Post Question</button>
    </div>
  </form>
</div>
