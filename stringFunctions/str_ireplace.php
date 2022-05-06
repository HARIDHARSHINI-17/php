    <?php  
    $arr = array("Coimbatore","trichy","madurai","salem");  
    echo "Original string: array('Coimbatore','trichy','madurai','salem')";  
    echo "<br>";  
    print_r(str_ireplace("trichy","bangalore",$arr,$i)); // This function is case-insensitive  
    echo "Replacements: $i";  
    ?>  