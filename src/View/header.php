<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= isset($data["title"]) ? $data["title"] : "PHP Boilerplate" ?>
  </title>
  <link href="/public/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <?php if (isset($data["styles"])): ?>
    <?php foreach ($data["styles"] as $style): ?>
      <link rel="stylesheet" href="/public/css/<?= $style ?>">
    <?php endforeach ?>
  <?php endif ?>
</head>

<body class="bg-light text-dark bg-opacity-75 min-vh-100 d-flex flex-column justify-content-between">