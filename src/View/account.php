<div class="container pt-5 mt-5">
  <div class="row justify-content-center">
    <div class="col-sm-6">
      <h2>Welcome <?= $_SESSION["auth"]["name"] ?><sup><?= $_SESSION["auth"]["id"] ?></sup></h2>
      <?php if (isset($data["error_message"])): ?>
        <div class="alert alert-danger" role="alert">
          <?= $data["error_message"] ?>
        </div>
      <?php endif ?>
      <form action="/account/update" method="POST" class="row g-3 mt-3">
        <div class="col-md-6">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" value="<?= $_SESSION["auth"]["name"] ?>">
        </div>
        <div class="col-md-6">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" id="username" name="username" value="<?= $_SESSION["auth"]["username"] ?>">
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
  </div>
  <div class="row justify-content-center mt-5">
    <hr>
    <div class="col-sm-6">
      <a href="/logout" class="btn btn-danger">Log out</a>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modal">
        Delete account
      </button>

      <!-- Modal -->
      <div class="modal fade" id="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
              <p class="fs-5 text-danger">Are you sure want to delete your account?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <a href="/account/delete" type="button" class="btn btn-danger me-auto">Delete</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>