<?php
if(isset($_POST['donate'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $options = $_POST['options'];


$curl = curl_init();

$customer_email = $email;
$amount = $options;  
$currency = "NGN";
$txref = "rave-299rttftretetrrer"; // ensure you generate unique references per transaction. rave-29933838
$PBFPubKey = "FLWPUBK-b8c2a39a03800f5f2d501dee3c0b5f39-X"; // get your public key from the dashboard.
$redirect_url = "https://localhost/paypal/success.php";
//$payment_plan = "pass the plan id"; // this is only required for recurring payments.


curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.ravepay.co/flwv3-pug/getpaidx/api/v2/hosted/pay",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode([
    'amount'=>$amount,
    'customer_email'=>$customer_email,
    'currency'=>$currency,
    'txref'=>$txref,
    'PBFPubKey'=>$PBFPubKey,
    'redirect_url'=>$redirect_url
  ]),
  CURLOPT_HTTPHEADER => [
    "content-type: application/json",
    "cache-control: no-cache"
  ],
));

$response = curl_exec($curl);
$err = curl_error($curl);

if($err){
  // there was an error contacting the rave API
  die('Curl returned error: ' . $err);
}

$transaction = json_decode($response);

if(!$transaction->data && !$transaction->data->link){
  // there was an error from the API
  print_r('API returned error: ' . $transaction->message);
}

// uncomment out this line if you want to redirect the user to the payment page
//print_r($transaction->data->message);


// redirect to page so User can pay
// uncomment this line to allow the user redirect to the payment page
header('Location: ' . $transaction->data->link);
}