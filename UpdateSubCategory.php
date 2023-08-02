<?php
session_start();
    if(!isset($_SESSION['id']))
   {
    header("location:adminlogin.php");
   }
   else
   {

include 'config.php';
include 'header.php';

$id = $_GET['id'];
$subid = $_GET['subid'];


$query	=	"select * from subcategory where id = $subid  ";
$rs		 =	mysqli_query($conn,$query) or die(mysqli_error());
$result		=	mysqli_fetch_array($rs);



//WHEN USER CLICK FROM vechicle VIEW THE ID OF THE CLICKED USERNAME ALONG DATA WILL BE PASSED TO SHOW IN UPDATE FORM FIELDS
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $item = $_POST['item'];
    $price = $_POST['price'];
    $gujrati = $_POST['gujrati'];
   
    
echo $query = "Update subcategory SET item='$item', price='$price', gujrati='$gujrati'  where id=$subid";
$rs	   =  mysqli_query($conn,$query) or die(mysqli_error());
header("location:functions.php?updatesubcategory=".$id.""); 

}



?>





<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Update Item</strong>
                    </div>
                    <div class="card-body">
                        &nbsp;
                        <form class="form-inline" action="UpdateSubCategory.php?id=<?php echo $id?>&&subid=<?php echo $subid?>"
                            method="POST" enctype="multipart/form-data">
                            <table class="table table-bordered">
                                <tr>
                                    <td>Item Name: <br><input name="item" required class="form-control"
                                            type="text"
                                            value="<?php echo $result['item']?>"
                                             />
                                    </td>
                                    <td>Item Gujrati Name: <br><input name="gujrati" class="form-control"
                                            type="text"
                                            value="<?php echo $result['gujrati']?>"
                                             />
                                    </td>
                                    <td>Price: <br><input name="price" class="form-control"
                                            type="text"
                                            value="<?php echo $result['price'] ?>"
                                             />
                                    </td>
                                    
                               
                                <tr>
                                    <td><input type="submit" name="add" class="btn btn-success" value="Update" /></td>
                                </tr>
                            </table>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
	
	
	
	
	
	
   <?php  }

include 'footer.php';
?>