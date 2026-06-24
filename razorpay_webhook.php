<?php
header('Content-Type: text/plain');
$rawPayload = file_get_contents('php://input');
\(data = json_decode(\)rawPayload, true);
if ($data) {eventType = data['event'];
amountPaid = data['payload']['payment']['entity']['amount'];
if (\(eventType === 'payment.captured' &&\)amountPaid === 100) {file_put_contents('payment_status.txt', 'SUCCESS');
echo "OK";
exit();
}
}
echo "Ignored or Bad Data Packet";
?>