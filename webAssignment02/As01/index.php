<!-- এমন একটি ফাংসন বানান যাকে কি না একটা বয়স দিলে একজন কি বৃদ্ধ, যুবক, কিশো, ছেলে , বাচ্ছা রিটান করবে -->
<!-- // Start Program: 1 -->
<?php  


    $age = 60; 
    
    if($age >= 0 && $age <= 12){
        $age = $age;
        $status = 'child';
    }else if($age >= 13 && $age <= 19){
        $age = $age;
        $status = 'teen';
    }else if($age >= 20 && $age <= 48){
        $age = $age;
        $status = 'young man';
    }else if($age >= 49 && $age <=80){
        $age = $age;
        $status = 'old man';
    }
    
    echo "Your Age is = {$age} and you are = {$status}";

    
    ?>
    <!-- // End Program: 1 -->