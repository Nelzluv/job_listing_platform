<?php include_once 'config/init.php'; ?>

<?php
$job = new Job;

//Check for post value deletion from job_single page
if(isset($_POST['del_id'])){
    $del_id = $_POST['del_id'];
    if($job->delete($del_id)){
        redirect('index.php', 'Job deleted', 'succcess');
    } else {
        redirect('index.php', 'Job not deleted', 'error');
    }
}
$template = new Template('template/job_single.php');

//getting your category id from the url
$job_id = isset($_GET['id']) ? $_GET['id'] : null;


$template->job = $job->getJob($job_id);

echo $template;