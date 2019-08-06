<?php
/**
 * This script is to be used to receive a POST with the object information and then either updates, creates or deletes the task object
 */
require('Task.class.php');
// Assignment: Implement this script
if (assert($_POST)) {
    $task = new Task;
    $task->TaskName = $_POST['taskName'];
    $task->TaskDescription = $_POST['taskDescription'];
    $task->Save() ;
}
