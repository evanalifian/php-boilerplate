<div class="container">
  <div class="row justify-content-center pt-5 mt-5">
    <div class="col-sm-4 d-flex flex-column align-items-center">
      <h3>Login</h3>
      <?php if (isset($data["error_message"])): ?>
        <div class="alert alert-danger" role="alert">
          <?= $data["error_message"] ?>
        </div>
      <?php endif ?>
      <form action="/login" method="POST" class="my-4 w-100">
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="test" class="form-control" id="username" name="username">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary w-100">Login</button>
      </form>
      <p>Don't have an account? <a href="/signup">Signup</a>.</p>
    </div>
  </div>
</div>