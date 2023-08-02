<?php
include "config.php";

$randmon_number = rand(0,99999999);
 $generatedid=$randmon_number;

//  Scan through outer loop
foreach ($_POST as $innerArray) {
    //  Check type
    if (is_array($innerArray)){
        //  Scan through inner loop
        foreach ($innerArray as $key => $value) {

            if($innerArray[$key] == "0x0x0x")   
            {
            
                           
            $ItemID = $innerArray[$key+1];
            $Item =  $innerArray[$key+2];  
            $kg =  $innerArray[$key+3];  
            $gram =  $innerArray[$key+4];  
           
                if ($kg == '' && $gram == '')
                {

                }
                else
                {

                    $query = "INSERT INTO kiranalists (generatedid,item,item_id,kg,gram) 
                    values ('$generatedid','$Item','$ItemID','$kg','$gram')";
                    $rs=	mysqli_query($conn,$query) or die(mysqli_error());
                    header("location:KiranaItemListView.php?id='$generatedid'");

                }
           

            }
            else
            {
                continue;
            }



            
        }
    }else{
        // one, two, three
        echo $innerArray;
    }
}






    ?>