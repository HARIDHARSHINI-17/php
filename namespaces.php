NAMESPACE MAIN FILE:
<?php 
include 'namespace_file1';
include 'namespace_file2';
$obj1 = new ex1\msg();
$obj2 = new ex2\msg();
$obj1->mymsg();
$obj2->mymsg();

NAMESPACE FILE1:
<?php
namespace ex1;
class msg{
    function mymsg(){
        echo "hai";
    }
NAMESPACE FILE2:  
<?php
namespace ex2;
class msg{
    function mymsg(){
        echo "welcome aspire";
    }
}
?>
}
?>
?>
