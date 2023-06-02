<?php
include '../config.php';

$order_type = $_POST['order_type'];
$order_data = $_POST['order_data'];
$order_count = $_POST['order_count'];
$order_price= $_POST['order_price'];
$manager_id = $_POST['manager_id'];

// Create
if (isset($_POST['submit'])) {
	$sql = ("INSERT INTO `orders`(`order_type`, `order_data`, `order_count`, `order_price`, `manager_id`) VALUES(?,?,?,?,?)");
	$query = $pdo->prepare($sql);
	$query->execute([$order_type, $order_data, $order_count, $order_price, $manager_id]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
}

// Read
$sql = $pdo->prepare("SELECT * FROM `orders`");
$sql->execute();
$result = $sql->fetchAll();

// Update
$edit_order_type = $_POST['edit_order_type'];
$edit_order_data = $_POST['edit_order_data'];
$edit_order_count = $_POST['edit_order_count'];
$edit_order_price = $_POST['edit_order_price'];
$edit_manager_id = $_POST['edit_manager_id'];
$get_order_id = $_GET['order_id'];
if (isset($_POST['edit-submit'])) {
	$sqll = "UPDATE orders SET order_type=?, order_data=?, order_count=?, order_price=?, manager_id=? WHERE order_id=?";
	$querys = $pdo->prepare($sqll);
	$querys->execute([$edit_order_type ,$edit_order_data, $edit_order_count,$edit_order_price,$edit_manager_id,$get_order_id]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
}

// DELETE
if (isset($_POST['delete_submit'])) {
	$sql = "DELETE FROM orders WHERE order_id=?";
	$query = $pdo->prepare($sql);
	$query->execute([$get_order_id]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
}