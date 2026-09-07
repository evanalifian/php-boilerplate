<nav class="sticky top-0 z-50 border-b border-gray-200 bg-white py-3">
  <div class="mx-auto flex max-w-7xl items-center px-4 sm:px-6 lg:px-8">

    <a href="#" class="text-2xl font-bold tracking-tight text-gray-900">
      php<span class="font-normal text-gray-500">.boilerplate</span>
    </a>


    <div class="ml-auto flex items-center gap-3">

      <span class="hidden text-sm text-gray-500 sm:inline">
        Hi,
        <strong class="font-medium text-gray-900">
          <?= $data["user"]["name"] ?>
        </strong>
      </span>

      <a href="/logout"
        class="rounded-lg border border-red-300 px-3 py-2 text-sm font-medium text-red-600 transition hover:bg-red-50 hover:text-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
        Log Out
      </a>

    </div>

  </div>
</nav>


<main class="my-auto py-12">

  <div class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">

    <div class="flex justify-center">

      <div class="w-full max-w-3xl">


        <!-- Welcome Card -->
        <div class="mb-6 rounded-2xl border border-gray-200 bg-white p-6 shadow-sm sm:p-8">

          <div class="text-center sm:text-left">

            <h1 class="mb-2 text-2xl font-extrabold tracking-tight text-gray-900 sm:text-3xl">
              Welcome to your Dashboard
            </h1>

            <p class="text-gray-500">
              Your boilerplate database connection is active and session is
              securely managed.
            </p>

          </div>

        </div>


        <!-- Account Profile -->
        <div class="grid grid-cols-1 gap-6">

          <div class="h-full rounded-2xl border border-gray-200 bg-white p-6 shadow-sm">

            <h2 class="mb-5 text-lg font-bold text-gray-900">
              Account Profile
            </h2>


            <div class="mb-4">

              <span class="mb-1 block text-sm font-normal text-gray-500">
                Full Name
              </span>

              <span class="font-medium text-gray-900">
                <?= $data["user"]["name"] ?>
              </span>

            </div>


            <div>

              <span class="mb-1 block text-sm font-normal text-gray-500">
                Username
              </span>

              <span class="font-medium text-gray-900">
                <?= $data["user"]["username"] ?>
              </span>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

</main>