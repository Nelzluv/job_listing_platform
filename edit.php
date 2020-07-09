<?php include_once 'config/init.php'; ?>

<?php
$job = new Job;

//check for an id
$job_id = isset($_GET['id']) ? $_GET['id'] : null;

//check if form is submitted
if (isset($_POST['submit'])) {
    $data = array();
    $data['job_title'] = $_POST['job_title'];
    $data['company'] = $_POST['company'];
    $data['description'] = $_POST['description'];
    $data['category'] = $_POST['category'];
    $data['location'] = $_POST['location'];
    $data['salary'] = $_POST['salary'];
    $data['contact_email'] = $_POST['contact_email'];
    $data['contact_user'] = $_POST['contact_user'];

    if ($job->update($job_id, $data)) {
        redirect('index.php', 'Your job has been updated', 'success');
    } else {
        redirect('index.php', 'Something went wrong', 'error');
    }
}
$template = new Template('template/job_edit.php');

$template->job = $job->getJob($job_id);

$template->categories = $job->getCategories();

echo $template;