<?php
include '../config.php';

// Read
$sql = $pdo->prepare("SELECT * FROM `managers`");
$sql->execute();
$result = $sql->fetchAll();

$surname = $_POST['m_surname'];
$name = $_POST['m_name'];

// Create
if (isset($_POST['submit'])) {
	$sql = ("INSERT INTO `managers`(`m_surname`, `m_name`) VALUES(?,?)");
	$query = $pdo->prepare($sql);
	$query->execute([$surname, $name]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
}

// Update
$edit_m_surname = $_POST['edit_m_surname'];
$edit_m_name = $_POST['edit_m_name'];
$get_manager_id = $_GET['manager_id'];
if (isset($_POST['edit-submit'])) {
	$sqll = "UPDATE managers SET m_surname=?, m_name=? WHERE manager_id=?";
	$querys = $pdo->prepare($sqll);
	$querys->execute([$edit_m_surname,$edit_m_name, $get_manager_id]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
}

// DELETE
if (isset($_POST['delete_submit'])) {
	$sql = "DELETE FROM managers WHERE manager_id=?";
	$query = $pdo->prepare($sql);
	$query->execute([$get_manager_id]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
}