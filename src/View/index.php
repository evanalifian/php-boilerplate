<div class="container">
  <div class="row justify-content-center pt-5 mt-5">
    <div class="col-sm-6 text-center">
      <h1>PHP Boilerplate</h1>
      <p>A starter template to build website using native PHP.</p>
      <?php if (isset($_SESSION["username"])): ?>
        <a href="/logout" class="btn btn-danger">Log out</a>
      <?php else: ?>
        <p>Try authentication feature <a href="/login">here</a>.</p>
      <?php endif ?>
    </div>
  </div>
</div>