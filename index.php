<?php
$to="ksudhanshu394@gmail.com";
$subject="Portfolio response";
$message="I am Very Happy To See You";
$header="kant0186@gmail.com";

if(mail($to,$subject,$message,$header)){
    echo "Mail Sent";
}else{
    echo "Mail Not Sent";
}
?>