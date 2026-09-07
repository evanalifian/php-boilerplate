<main class="my-auto py-12">
  <div class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">

    <div class="flex justify-center">
      <div class="w-full max-w-md">

        <div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm sm:p-8">

          <!-- Header -->
          <div class="mb-6 text-center">

            <h2 class="mb-1 text-2xl font-extrabold tracking-tight text-gray-900">
              Create Account
            </h2>

            <p class="text-sm text-gray-500">
              Get started with your boilerplate instantly
            </p>

          </div>


          <!-- Form -->
          <form action="/signup" method="POST">

            <!-- Full Name -->
            <div class="mb-4">

              <label for="name" class="mb-1 block text-sm font-medium text-gray-500">
                Full Name
              </label>

              <input type="text" id="name" name="name" placeholder="John Doe"
                class="w-full rounded-lg border-0 bg-gray-100 px-3 py-2.5 text-gray-900 outline-none transition placeholder:text-gray-400 focus:ring-2 focus:ring-gray-900">

            </div>


            <!-- Username -->
            <div class="mb-4">

              <label for="username" class="mb-1 block text-sm font-medium text-gray-500">
                Username
              </label>

              <input type="text" id="username" name="username" placeholder="johndoe"
                class="w-full rounded-lg border-0 bg-gray-100 px-3 py-2.5 text-gray-900 outline-none transition placeholder:text-gray-400 focus:ring-2 focus:ring-gray-900">

            </div>


            <!-- Password -->
            <div class="mb-6">

              <label for="password" class="mb-1 block text-sm font-medium text-gray-500">
                Password
              </label>

              <input type="password" id="password" name="password" placeholder="••••••••"
                class="w-full rounded-lg border-0 bg-gray-100 px-3 py-2.5 text-gray-900 outline-none transition placeholder:text-gray-400 focus:ring-2 focus:ring-gray-900">

              <p class="mt-1 text-xs text-gray-400">
                Must be at least 8 characters.
              </p>

            </div>


            <!-- Submit -->
            <button type="submit"
              class="mb-3 w-full rounded-lg bg-gray-900 py-2.5 font-medium text-white shadow-sm transition hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:ring-offset-2">
              Get Started
            </button>

          </form>


          <!-- Login Link -->
          <div class="mt-6 border-t border-gray-200 pt-4 text-center">

            <p class="text-sm text-gray-500">
              Already have an account?

              <a href="/login" class="font-medium text-gray-900 no-underline hover:underline">
                Log in
              </a>
            </p>

          </div>

        </div>

      </div>
    </div>

  </div>
</main>