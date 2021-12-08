<!-- একটি ইমেজ আপলোডিং ফাংসন বানান যেথানে ছবির নাম, হাইট, ওইদ দিয়ে ছবিটাকে মেনেজ কার যাবে -->
<!-- // Start Program: 11 -->
<?php  

    function image($src, $w = 'auto', $h = 'auto'){
            echo "<img style=\"width:{$w}; height:{$h};\" $src=\"{$src}\" alt=\"\">";
        }

    image('wland.jpg', '600px', '200px');
    
    ?>
    <!-- // End Program: 11 -->
