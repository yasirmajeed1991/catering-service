<?php
session_start();
include "config.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $Name=$_POST['Name'];
    $Date=$_POST['Date'];
    
    $Address=$_POST['Address'];
    $Mobile=$_POST['Mobile'];
    $Time=$_POST['Time'];
    $FunctionVenue=$_POST['FunctionVenue'];
    $FunctionDate=$_POST['FunctionDate'];
    
    $ExtraCharges=$_POST['ExtraCharges'];
    $PRO=$_POST['PRO'];
    $Boys=$_POST['Boys'];
    $Decoration=$_POST['Decoration'];
    // $Rate=$_POST['Rate'];
    $NOPerson=$_POST['NOPerson'];
    $Advance=$_POST['Advance'];
    $JsonItem = json_encode($_POST['item']);

   echo  $query = "INSERT INTO quotation (name,date,address,mobile,time,functionvenue,functiondate,extracharges,pro,boys,decoration,rate,noperson,advance,item)
                Values ('$Name','$Date','$Address','$Mobile','$Time','$FunctionVenue','$FunctionDate','$ExtraCharges','$PRO','$Boys','$Decoration','0','$NOPerson','$Advance','$JsonItem') 
                ";
                
                
                if (mysqli_query($conn, $query)) {
                    $last_id = mysqli_insert_id($conn);
                      header("location:QuotationGenerateView.php?id=$last_id");
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                               






    // $i=0;
//     foreach($_POST['Item'] as $val) {
//         echo "$val<br>"; 
//         echo '<br>';
//         $i=$i+1;
// }


// $obj = json_decode($jsonobj);

// foreach($obj as $key => $value) {
//   echo $key . " => " . $value . "<br>";
// }

 






}




    ?>