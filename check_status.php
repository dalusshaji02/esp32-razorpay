<?php
header('Content-Type: text/plain');

$filename = 'payment_status.txt';

if (!file_exists($filename)) {
    file_put_contents($filename, 'WAITING');
}

$currentStatus = file_get_contents($filename);

if (trim($currentStatus) === 'SUCCESS') {
    echo "RUN_MOTOR";
    file_put_contents($filename, 'WAITING');
} else {
    echo "STANDBY";
}
?>
