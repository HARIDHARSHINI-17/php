<?php
$fruits = array("types"=>array(
                              "a"=>"orange",
                              "b"=>"apple",
                              "c"=>"grapes",
                              ),
                "price"=>array(
                              "d"=>20,
                              "e"=>30,
                              "f"=>40,
                ),
                "kilos"=>array(
                               "g"=>"two kg",
                               "h"=>"three kg",
                               "i"=>"four kg",
                )
                );
echo $fruits["price"]["e"];
unset( $fruits["kilos"]["g"]);
echo $fruits["kilos"]["g"];