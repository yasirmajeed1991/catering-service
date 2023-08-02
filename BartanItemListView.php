<style>
table,
th,
td {
    border: 1px solid #ff7b00;
    border-collapse: collapse;
}

table thead {
    background-color: #ff7b00;
    font-color: white;
    font-size: small;
    align: center;

}

table td {
    width: 12%;
    color: #ff7b00;
    font-size: smaller;
    align: center;
    text-align: center;
}

table tr {
    align: center;
}
 table {
    width: 100%;
 }
 .gridsabji
 {
    margin-top: 10px;
    /* display: grid; */
    grid-template-columns: repeat(3, 1fr);
    gap: 7px;
    text-align: center;
    background-color:  #ff7b00;
    margin-bottom: 10;
 }
</style>

<?php include 'config.php';
  $id=$_GET['id'];
 
 



?>

<!-- -------------PDF GENERATEOR --------------- -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="style.css">
</head>
<button id="printPageButton" onClick="window.print();">Click to make a Print</button>
<body>
    <section class="main">
        <header>
            <div class="container">
                <div class="left"><img src="img/logo.png" alt=""></div>

                <div class="right">

                    <div class="address">

                        <div class="flex">
                            <h3>ADDRESS</h3>

                            <h3 class="content"> Shop No. 28 Sukh Sagar Complex,Dharam Nagar,Opp. Shma
                                Society A.K Road Surat - 395013</h3>
                        </div>

                    </div>

                    <div class="no">
                        <h3>CHETAN KASWALA- <span>9998882412</span></h3>
                    </div>
                </div>
            </div>
        </header>

        <!-- SEC -->
        <section class="details">
            <div class="container">
                <div class="gridsabji">
                    <div>
                        <h2 class="heading"> વાસણ </h2>







                    </div>
                </div>
                <div class="img">
                <table>

<thead>

    <tr>


        <th>Sr#</th>
        <th>Item</th>
        <th>Quantity</th>
        <th>Sr#</th>
        <th>Item</th>
        <th>Quantity</th>

    </tr>
</thead>
<?php
$sum = 0;

 $query	=	"SELECT * From  bartanlists where generatedid=$id";
$result		=	mysqli_query($conn,$query) or die(mysqli_error());


$i = 1;  //The following logic only works if $i starts at '1'.
$numofcols = 2; //Represents the number of columns you want in the table.



while($row = mysqli_fetch_array($result)) {

    $sum = $sum+1;

//If it's the beginning of a row...
if( $i % $numofcols == 1 ){
echo '<tr>'; //Open row
}


//Table Cell.
echo '<td>'; //Open Cell
echo $sum;
echo '</td>'; //Close Cell
echo '<td>'; //Open Cell
echo $row['item'];
echo '</td>'; //Close Cell
echo '<td>'; //Open Cell
echo $row['quantity'];
echo '</td>'; //Close Cell

//If we have already placed enough cells, close this row.
if( $i % $numofcols == 0) {
echo '</tr>'; //Close Row.
}

//Now that we've made a table-cell, lets increment our counter.
$i = $i + 1;

}


//So we make sure to close our rows if there are any orphaned cells
if( ($i % $numofcols) > 0){
echo '</tr>';
}

?>
</table>




                    <!-- Table -->
                </div>

        </section>





    </section>
</body>

</html>

<!-- PDF CONTENT END -->