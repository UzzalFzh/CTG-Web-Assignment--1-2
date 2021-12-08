<!-- বাংলাদেশি টাকাতে ইউএস ডলার, কানাডিয়ান ডলার, পাউন্ড এ কনভাট করার একটি ফাংসন বানান -->
<!-- // Start Program: 7 -->
<?php

function currency($amount, $type){
        if($type == 'US dollar'){
            $bdt = $amount * 85.85;
            return " {$bdt} BDT = {$amount} US dolar ";
        }else if($type == 'Canadioan dolar'){
            $bdt = $amount * 67.85;
            return " {$bdt} BDT = {$amount} Canadioan dolar ";
        }else if($type == 'pound'){
            $bdt = $amount * 113.62;
            return " {$bdt} BDT = {$amount} pound ";
        }
        
    }

    echo currency(50000, 'US dolar');
    echo currency(50000, 'Canadioan dolar');
    echo currency(50000, 'pound');

    
    ?>
    <!-- // End Program: 7 -->