<footer class="py-4 bg-white border-top text-center text-secondary small">
  <div class="container">
    <p class="m-0">&copy; 2026 php-boilerplate. Built for efficiency.</p>
  </div>
</footer>

<script src="/public/js/bootstrap.bundle.min.js"></script>
<?php if (isset($data["scripts"])): ?>
  <?php foreach ($data["scripts"] as $script): ?>
    <script src="/public/js/<?= $script ?>"></script>
  <?php endforeach ?>
<?php endif ?>
</body>

</html>