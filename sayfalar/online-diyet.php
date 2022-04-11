<?php
$yazi = $db->query('SELECT * FROM yazilar WHERE id=3');
$yazi = $yazi->fetch_assoc();

echo $yazi['yazi']
?>
