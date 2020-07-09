<body>
<?php include 'inc/header.php'; ?>
  <div class="jumbotron">
    <h1 class="display-3">FIND A JOB</h1>
    <form method="get" action="index.php">
      <select name="category" class="form-control">
        <option value="0"> Choose category </option>
        <?php foreach($categories as $category): ?>
          <option value = "<?php echo $category->id ?>"><?php echo $category->name; ?></option>
        <?php endforeach; ?>
      </select><br><br>
      <input type="submit" class="btn btn-lg btn-success" value="FIND">
    </form>
  </div>
  
  <!--<h3><?php //echo $title; ?></h3>-->
  <?php foreach($jobs as $job): ?>
  <div class="row marketing">
    <div class="col-md-10">
      <h4><?php echo $job->job_title; ?></h4>
      <p><?php echo $job->description; ?></p>
    </div>
    <div class="col-md-2">
        <a href="job.php?id=<?php echo $job->id; ?>" class="btn btn-dark">View</a>
    </div>
  </div>
  <?php endforeach; ?>

  

<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
<?php include 'inc/footer.php'; ?>