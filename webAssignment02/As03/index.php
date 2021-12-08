<!-- গ্রেড এবং জিপিএ বের করার জন্য একটি ফাংসন তৈরি করুন -->
<!-- // Start Program: 3 -->
<?php  

 // function result($mark> 32) ? 'Passed' : 'Fail; 


    $mark = 60; 
    
    if($mark >= 0 && $mark <= 32){
        $gpa = 0;
        $grade = 'F';
    }else if($mark >= 33 && $mark <= 39){
        $gpa = 1;
        $grade = 'D';
    }else if($mark >= 40 && $mark <= 49){
        $gpa = 2;
        $grade = 'C';
    }else if($mark >= 50 && $mark <= 59){
        $gpa = 3;
        $grade = 'B';
    }else if($mark >= 60 && $mark <= 69){
        $gpa = 3.5;
        $grade = 'A-';
    }else if($mark >= 70 && $mark <= 79){
        $gpa = 4;
        $grade = 'A';
    }else if($mark >= 80 && $mark <= 100){
        $gpa = 5;
        $grade = 'A+';
    }

    echo "Your GPA = {$gpa} and Grade = {$grade}";

    
    ?>
    <!-- // End Program: 3 -->