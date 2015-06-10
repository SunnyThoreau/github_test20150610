<?php 
$link = false;
if (!$link) {
die('接続失敗！<br>'.mysqli_error());
} else {
echo '接続成功！';
}
?>