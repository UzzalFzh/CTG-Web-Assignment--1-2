<!-- পি এইচ পি এর রিভাস ফাংসনের মতন একটি ফাংসন বানান -->
<!-- // Start Program: 10 -->
<?php  

    function name($string){
        $len = strlen ($string);
        for($i = $len - 1; $i >=0; $i--){
            echo ("$string [$i]");
        }

    }

    name("Hello World");
    
    ?>
    <!-- // End Program: 10 -->
