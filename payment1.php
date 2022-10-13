<?php
$amount=$_POST["amount"];
require_once("lib/Twocheckout.php");
Twocheckout::username('OmaisAhmed');
Twocheckout::password('DecentOmais90');
Twocheckout::verifySSL(false);
Twocheckout::privateKey('6C704AC7-C11C-46F8-800C-3C18F2F491A0'); 
Twocheckout::sellerId('901406865'); 
Twocheckout::sandbox(true); 

try {
    $charge = Twocheckout_Charge::auth(array(
        "merchantOrderId" => "123",
        "token"      => $_POST['token'],
        "currency"   => 'Rs',
        "total"      => $amount,
        "billingAddr" => array(
            "name" => 'Farhan',
            "addrLine1" => '123 Test St',
            "city" => 'Karachi',
            "state" => 'OH',
            "zipCode" => '43123',
            "country" => 'Pakistan',
            "email" => 'example@2co.com',
            "phoneNumber" => '555-555-5555'
        )
    ));

    if ($charge['response']['responseCode'] == 'APPROVED') {
        echo "Thanks for your Order!";
    }
} catch (Twocheckout_Error $e) {
    print_r($e->getMessage());
}