<?php include "connect.php"?>
<?php
$stmt = $pdo->prepare("INSERT INTO member VALUES(?,?,?,?,?,?)");
$stmt->bindParam(1,$_POST["username"]);
$stmt->bindParam(2,$_POST["password"]);
$stmt->bindParam(3,$_POST["name"]);
$stmt->bindParam(4,$_POST["address"]);
$stmt->bindParam(5,$_POST["mobile"]);
$stmt->bindParam(6,$_POST["email"]);
$stmt->execute();
$stmt = $pdo->prepare("SELECT * FROM member WHERE username LIKE ?");
$stmt->bindParam(1,$_POST["username"]);
$stmt->execute();
$row = $stmt->fetch();
?>
<html>
<head><meta charset="UTF-8"></head>
<body>
เพิ่มสมาชิกสำเร็จ ชื่อสมาชิก ใหม่ คือ <?=$row["name"]?>
</body>
</html>