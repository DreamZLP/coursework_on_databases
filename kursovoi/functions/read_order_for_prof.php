<?php
session_start();
include '../config.php';

$order_type = $_POST['order_type'];
$order_data = $_POST['order_data'];
$order_count = $_POST['order_count'];
$order_price = $_POST['order_price'];
$manager_id = $_SESSION['manager_id'][0];

// Read
$sql = $pdo->prepare("SELECT `order_id`,`order_type`,`order_data`,`order_count`,`order_price` FROM `orders` where `manager_id` = '$manager_id'");
$sql->execute();
$result = $sql->fetchAll();


// Create
if (isset($_POST['submit'])) {
	$sql = ("INSERT INTO `orders`(`order_type`, `order_data`, `order_count`, `order_price`, `manager_id`) VALUES(?,?,?,?,?)");
	$query = $pdo->prepare($sql);
	$query->execute([$order_type, $order_data, $order_count, $order_price, $manager_id]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
}
