<?php
function countW($sentence)
{
    $count=1;
    for($i=0;$i<strlen($sentence);$i++)
    {
        if($sentence[$i]==" "){
            $count=$count+1;
        }
    }
    echo "no. of words in ur sentence= ",$count;
}
countW("dishita is best");
?>
