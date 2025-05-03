<?php

$to      = 'justinesalmeron321@gmail.com';
$subject = $_GET['subject'];
$message = $_GET['message'];
$fromReciepients = $_GET['email'];
$hr_name = $_GET['hr-name'];
$headers = `<div>From: <?php echo $fromReciepients;?>
<h2>Hr Name: <?php echo $hr_name; ?></h2></br>
<p><?php echo $message; ?></p>
</div>`;

$set = mail($to, $subject, $message, $headers);

if($set){
    echo json_encode([
        'status'=>202,
        'message'=>'Email sent Successfuly'
    ]);
}else{
    echo json_encode([
        'status'=>400,
        'message'=>'Email not sent'
    ]);
}

echo $subject,  $message, $fromReciepients, $hr_name ;