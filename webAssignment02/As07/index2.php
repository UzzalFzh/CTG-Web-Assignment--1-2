<!-- বাংলাদেশি টাকাতে ইউএস ডলার, কানাডিয়ান ডলার, পাউন্ড এ কনভাট করার একটি ফাংসন বানান -->
<!-- // Start Program: 7 -->
<?php

function currency($amount, $type){
        if($type == 'dollar'){
            $bdt = $amount * 86;
            return " {$amount} dolar = {$bdt} BDT ";
        }else if($type== 'pound'){
            $bdt = $amount * 116;
            return " {$amount} pound = {$bdt} BDT ";
        }else if($type== 'euro'){
            $bdt = $amount * 100;
            return " {$amount} euro = {$bdt} BDT ";
        }
        
    }

    echo currency(500, 'dollar');
    echo currency(500, 'pound');
    echo currency(500, 'euro');

    
    ?>
    <!-- // End Program: 7 -->