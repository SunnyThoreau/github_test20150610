<?php 
$link = true;
if (!$link) {
die('接続失敗！<br>'.mysql_error());
} else {
echo '接続成功！';
}
?>