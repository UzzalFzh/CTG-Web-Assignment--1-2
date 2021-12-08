<!-- একটি হেডিং ফাংসন বানান যেটা দিয়ে ডাইনামিস হেডিং তৈরি করা যাবে -->
<!-- // Start Program: 5 -->
<?php  
// Start Heading -1.
    function info($name, $skill){
        echo "<p> My Name is $name & I am skill Developer </p>";

    }

    info("A.H.Uzzal", "Web");
    info("Abc", "Python");
    info("XYZ", "Python");

    // End Heading -1.

    // Start Heading -2.
    function heading($type, $txt, $font = 'impact', $size = '60px', $color = '#000', $align = 'centre'){
        return "<{$type} style=\"font-family: {$font}; font-size: {$size}; color: {$color}; text-align: {$align}><{$txt}></{$type}>";

    }

    heading('h1', 'We are Developers', 'impact', '80px', 'black', 'centre');
    heading('h1', 'We are CTG-216 AWD Batch', 'arial', '50px', 'green', 'left');

    // End Heading -2.


    ?>
    <!-- // End Program: 5 -->