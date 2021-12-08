<!-- এমন একটি ফাংসন তৈরি করুন যেটাতে আপনার জন্ম সাল দিলে সে আপনার বয়স বের করে দিবে -->
<!-- // Start Program: 4 -->
<?php  

    function agecal($name, $year){
        $age = 2021 - $year;
        echo "Hi {$name}, You are {$age} years old <br>";

    }

    agecal("A.H.Uzzal", 1990);
    agecal("Xyz", 2001);

    
    ?>
    <!-- // End Program: 4 -->