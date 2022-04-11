<?php
$yazi = $db->query('SELECT * FROM yazilar WHERE id=2');
$yazi = $yazi->fetch_assoc();

echo $yazi['yazi']
?>
