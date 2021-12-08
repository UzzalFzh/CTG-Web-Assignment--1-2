<!-- বড় হাত, ছোট হাত, উভয় হাত এর লেখা কনভাসন করার জন্য একটিং ফাংসন বানান -->
<!-- // Start Program: 9 -->
<?php  
// Start Borohat function.

    function borohat($text){
        return "span style=\" text transform:uppercase;\">" . $text . "</span>";    
    }

    echo borohat('Abdul Haque Uzzal');
    // End Borohat function.

    
// Start Sotohat function.

function sotohat($text){
    return "span style=\" text transform:lowercase;\">" . $text . "</span>";    
}

echo sotohat('ABDUL HAQUE UZZAL');
// End Sotohat function.

// Start Duihat function.
function duihat($type, $str){

    if($type == "b"){
        return "span style=\" text transform:uppercase;\">" . $str . "</span>";
    }else if($type == "c"){
        return "span style=\" text transform:lowercase;\">" . $str . "</span>";
    }else {
        return 'Type not match, you should use b or c';
    }
        
    }

    $txt= "We are php developer";

    echo duihat('b', $txt );
    echo duihat('c', $txt );
    echo duihat('h', $txt );
// End Duihat function.

    ?>
    <!-- // End Program: 9 -->