<?php
include '../config.php';

$cabinet_number= $_POST['cabinet_number'];
$cabinet_status= $_POST['cabinet_status'];
$cabinet_square= $_POST['cabinet_square'];
$manager_id= $_POST['manager_id'];

// Create
if (isset($_POST['submit'])) {
	$sql = ("INSERT INTO `cabinets`(`cabinet_number`, `cabinet_status`, `cabinet_square`, `manager_id`) VALUES(?,?,?,?)");
	$query = $pdo->prepare($sql);
	$query->execute([$cabinet_number, $cabinet_status, $cabinet_square, $manager_id]);
}

// Read
$sql = $pdo->prepare("SELECT * FROM `cabinets`");
$sql->execute();
$result = $sql->fetchAll();

// Update - остановочка!!!
$edit_cabinet_status= $_POST['edit_cabinet_status'];
$edit_cabinet_square= $_POST['edit_cabinet_square'];
$edit_manager_id= $_POST['edit_manager_id'];
$get_cabinet_number= $_GET['cabinet_number'];
if (isset($_POST['edit-submit'])) {
	$sqll = "UPDATE cabinets SET cabinet_status=?, cabinet_square=?, manager_id=? WHERE cabinet_number=?";
	$querys = $pdo->prepare($sqll);
	$querys->execute([$edit_cabinet_status,$edit_cabinet_square,$edit_manager_id, $get_cabinet_number]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
}

// DELETE
if (isset($_POST['delete_submit'])) {
	$sql = "DELETE FROM cabinets WHERE cabinet_number=?";
	$query = $pdo->prepare($sql);
	$query->execute([$get_cabinet_number]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
}