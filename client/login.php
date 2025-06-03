<div class="max-w-md mx-auto mt-10 bg-white shadow-md rounded-lg p-8">
  <h1 class="text-2xl font-bold text-center text-gray-800 mb-6">Login</h1>

  <form method="post" action="./server/requests.php">
    <div class="mb-4">
      <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
      <input type="email" name="email" id="email"
             class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
             placeholder="Enter your email">
    </div>

    <div class="mb-6">
      <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
      <input type="password" name="password" id="password"
             class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
             placeholder="Enter your password">
    </div>

    <button type="submit" name="login"
            class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition duration-200">
      Login
    </button>
  </form>
</div>
