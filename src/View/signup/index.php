<main class="my-auto py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-10 col-sm-8 col-md-6 col-lg-4">
        <div class="bg-white border rounded-4 p-4 p-sm-5 shadow-sm">
          <div class="text-center mb-4">
            <h2 class="fw-extrabold text-dark tracking-tight mb-1">Create Account</h2>
            <p class="text-secondary small">Get started with your boilerplate instantly</p>
          </div>

          <form action="/signup" method="POST">
            <div class="mb-3">
              <label for="name" class="form-label small fw-medium text-secondary">Full Name</label>
              <input type="text"
                class="form-control rounded-3 py-2 text-dark bg-light border-0 shadow-none focus-ring focus-ring-dark"
                id="name" name="name" placeholder="John Doe">
            </div>

            <div class="mb-3">
              <label for="username" class="form-label small fw-medium text-secondary">Username</label>
              <input type="text"
                class="form-control rounded-3 py-2 text-dark bg-light border-0 shadow-none focus-ring focus-ring-dark"
                id="username" name="username" placeholder="johndoe">
            </div>

            <div class="mb-4">
              <label for="password" class="form-label small fw-medium text-secondary mb-1">Password</label>
              <input type="password"
                class="form-control rounded-3 py-2 text-dark bg-light border-0 shadow-none focus-ring focus-ring-dark"
                id="password" name="password" placeholder="••••••••">
              <div class="form-text text-muted extra-small mt-1" style="font-size: 0.75rem;">Must be at least 8
                characters.</div>
            </div>

            <button type="submit" class="btn btn-dark w-100 py-2.5 rounded-3 fw-medium shadow-sm mb-3">
              Get Started
            </button>
          </form>

          <div class="text-center mt-4 pt-2 border-top">
            <p class="small text-secondary mb-0">
              Already have an account? <a href="/login" class="link-dark fw-medium text-decoration-none">Log in</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>