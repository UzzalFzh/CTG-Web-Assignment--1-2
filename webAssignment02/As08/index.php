<!-- একটা হেডিং এ বাংলায় লাল, সবুজ, নিল, হলুদ, বেগুনি, কাল এই রং গুলা দিয়ে হেডিং এর কালার টা চেঞ্জ করে এমন করে একটা ফাংসন বানান -->
<!-- // Start Program: 8 -->
<?php

    // Start Banglay Heading Color.
    function heading($type, $txt, $font = 'impact', $size = '60px', $color = '#000', $align = 'centre'){
        return "<{$type} style=\"font-family: {$font}; font-size: {$size}; color: {$color}; text-align: {$align}><{$txt}></{$type}>";

    }

    heading('h1', 'This is red color', 'impact', '80px', 'red', 'centre');
    heading('h2', 'This is green color', 'arial', '80px', 'green', 'centre');
    heading('h3', 'This is blue color', 'impact', '80px', 'blue', 'centre');
    heading('h4', 'This is yellow color', 'arial', '80px', 'yellow', 'centre');
    heading('h5', 'This is violet color', 'impact', '80px', 'violet', 'centre');
    heading('h6', 'This is black color', 'tahoma', '80px', 'black', 'centre');

    // End Banglay Heading Color.


    ?>
    <!-- // End Program: 8 -->