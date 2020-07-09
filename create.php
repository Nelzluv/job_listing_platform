<?php include_once 'config/init.php'; ?>

<?php
$job = new Job;

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

    if ($job->create($data)) {
        redirect('index.php', 'Your job has been listed', 'success');
    } else {
        redirect('index.php', 'Something went wrong', 'error');
    }
}
$template = new Template('template/job_create.php');

$template->categories = $job->getCategories();

echo $template;