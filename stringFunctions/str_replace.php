    <?php  
    $string = "Hai team!";  
    $search = 'Hai';  
    $replace = 'Hello';  
    echo '<b>'."Original String:".'</br></b>';  
    echo $string.'</br>';  
    $newstr = str_replace($search, $replace, $string, $count);  
    echo '<b>'."Replaced string:".'</br></b>';  
    echo $newstr.'</br>';  
    echo 'Replacement Count ='.$count;  
    ?>  