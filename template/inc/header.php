<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOB LISTER</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/flatly/bootstrap.min.css" integrity="sha384-mhpbKVUOPCSocLzx2ElRISIORFRwr1ZbO9bAlowgM5kO7hnpRBe+brVj8NNPUiFs" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
  <div class="header clearfix">
    <nav>
      <ul class="nav nav-pills float-right">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="create.php">Create listing</a>
        </li>
      </ul>
    </nav>
    <h3 class="text-muted"><?php echo SITE_TITLE; ?></h3>
  </div>
<?php displayMessage(); ?>