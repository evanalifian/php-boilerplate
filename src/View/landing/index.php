<body class="min-h-screen flex flex-col justify-between bg-gray-50/75 text-gray-900">

  <nav class="sticky top-0 z-50 border-b border-gray-200 bg-white py-3">
    <div class="mx-auto flex max-w-7xl items-center px-4 sm:px-6 lg:px-8">

      <a href="#" class="text-2xl font-bold tracking-tight text-gray-900">
        php<span class="font-normal text-gray-500">.boilerplate</span>
      </a>

      <div class="ml-auto">
        <a href="/login"
          class="inline-flex items-center rounded-lg border border-gray-900 px-4 py-2 font-medium text-gray-900 transition hover:bg-gray-900 hover:text-white">
          Log In
        </a>
      </div>

    </div>
  </nav>


  <header class="my-auto py-12 sm:py-16">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

      <div class="flex flex-col items-center justify-center gap-12 lg:flex-row">

        <!-- Hero -->
        <div class="w-full text-center lg:w-6/12">

          <div class="mb-4 inline-flex items-center rounded-full bg-gray-900 px-3 py-2 text-xs font-normal text-white">
            Version 1.0.0
          </div>

          <h1 class="mb-4 text-4xl font-extrabold leading-tight tracking-tight text-gray-900 sm:text-5xl">
            Build your Next PHP Application Faster.
          </h1>

          <p class="mb-6 text-lg font-normal leading-relaxed text-gray-500">
            A clean, minimalist, and production-ready PHP boilerplate designed to
            kickstart your web development without the bloated overhead.
          </p>

          <div class="flex flex-col justify-center gap-3 sm:flex-row">

            <a href="https://github.com/evanalifian/php-boilerplate" target="_blank"
              class="inline-flex items-center justify-center rounded-lg bg-gray-900 px-4 py-3 text-sm font-medium text-white shadow-sm transition hover:bg-gray-800">
              View on GitHub
            </a>

          </div>

        </div>


        <!-- Code Preview -->
        <div class="hidden w-full lg:block lg:w-7/12">

          <div class="rounded-2xl border border-gray-200 bg-white p-3 shadow-sm">

            <div class="mb-3 flex items-center justify-between">

              <code class="text-xs text-gray-500">
                # Clone the repository
              </code>

              <button id="copyBtn" class="p-0 text-xs font-medium text-gray-500 transition hover:text-gray-900">
                Copy
              </button>

            </div>

            <div class="overflow-x-auto rounded-lg bg-gray-900 p-4 font-mono text-xs text-white shadow-inner">

              <div class="whitespace-nowrap">
                <span class="text-green-500">$</span>

                <span id="codeToCopy">
                  git clone https://github.com/evanalifian/php-boilerplate.git
                </span>
              </div>

            </div>

          </div>

        </div>

      </div>

    </div>
  </header>