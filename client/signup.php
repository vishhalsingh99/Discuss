
  <div class="max-w-md mx-auto mt-10 bg-white p-8 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold text-center text-blue-600 mb-6">Sign Up</h1>
    
    <form method="post" action="./server/requests.php" class="space-y-5">
      <!-- Name -->
      <div>
        <label for="username" class="block text-gray-700 font-medium mb-1">Name</label>
        <input type="text" name="username" id="username" placeholder="Enter your name"
               class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block text-gray-700 font-medium mb-1">Email</label>
        <input type="email" name="email" id="email" placeholder="Enter your email"
               class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        <p class="text-sm text-gray-500 mt-1">We'll never share your email with anyone else.</p>
      </div>

      <!-- Password -->
      <div>
        <label for="password" class="block text-gray-700 font-medium mb-1">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter your password"
               class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <!-- Confirm Password -->
      <div>
        <label for="confirmPassword" class="block text-gray-700 font-medium mb-1">Confirm Password</label>
        <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirm your password"
               class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <!-- Submit Button -->
      <div>
        <button type="submit" name="signup"
                class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition duration-200">
          Sign Up
        </button>
      </div>
    </form>
  </div>