<footer class="border-t border-gray-200 bg-white py-4 text-center text-xs text-gray-500">

  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

    <p class="m-0">
      &copy; 2026 php-boilerplate. Built for efficiency.
    </p>

  </div>

</footer>


<?php if (isset($data["scripts"])): ?>
  <?php foreach ($data["scripts"] as $script): ?>
    <script src="/js/<?= $script ?>"></script>
  <?php endforeach ?>
<?php endif ?>

</body>

</html>