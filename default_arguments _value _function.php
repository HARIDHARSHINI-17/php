<?php
function message($ms1 = "hai"){
    echo "Hello $ms1<br!>";
}
message("welcome");//hello welcome
message();//hello hai(calls default value by itself)
message("greetings");//hai greetings
?>
