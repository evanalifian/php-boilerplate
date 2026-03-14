<div class="container">
  <div class="row justify-content-center pt-5 mt-5">
    <div class="col-sm-4 d-flex flex-column align-items-center">
      <h3>Signup</h3>
      <?php if (isset($data["error_message"])): ?>
        <div class="alert alert-danger" role="alert">
          <?= $data["error_message"] ?>
        </div>
      <?php endif ?>
      <form action="/signup" method="POST" class="my-4 w-100">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="test" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="test" class="form-control" id="username" name="username">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary w-100">Signup</button>
      </form>
      <p>Already have an account? <a href="/login">login</a>.</p>
    </div>
  </div>
</div>