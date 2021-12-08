<!-- এমন একটি ফাংসন বানান যেটা দিয়ে আয়তক্ষেত্র, বগক্ষেত্র, এবং বৃত্তে ক্ষেত্রফল বের করা যাবে -->
<!-- // Start Program: 2 -->
<?php

function area($type, $length, $width = null){
    if($type== 'r'){
            $area = $length * $width;
            return "Area of this rectangle = {$area}";
    }else if($type== 's'){
        $area = $length * $length;
        return "Area of this square = {$area}";
    }else if($type== 'c'){
        $area = 3.1416 * $length * $length;
        return "Area of this circle = {$area}";}
    }

    echo $area('r', 50, 30);
    echo $area('s', 10);
    echo $area('c', 30);

    
    ?>
    <!-- // End Program: 2 -->