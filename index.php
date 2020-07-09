<?php include_once 'config/init.php'; ?>

<?php
$job = new Job;

$template = new Template('template/frontpage.php');

//getting your category id from the url
$category = isset($_GET['category']) ? $_GET['category'] : null;

if($category) {
    //$template->title = 'Get all jobs';
    $template->jobs = $job->getByCategory($category);
} else {
    //$template->title = 'Jobs in '.$job->getCategory($category)->name;
    $template->jobs = $job->getAllJobs();
}

$template->categories = $job->getCategories();

echo $template;