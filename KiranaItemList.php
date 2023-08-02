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



$query	=	"select * from kiranaitemlist  ";
			$rs		 =	mysqli_query($conn,$query) or die(mysqli_error());
		$html = "";
		while($row		=	mysqli_fetch_array($rs))
		{
					$html	.=	'<tr style="font-size:12px">
                    <td >'.$row['id'].'</td>
                                 <td >'.$row['item'].'</td>
                                 <td >'.$row['gujrati'].'</td>
								
								<td> <a  href="functions.php?KiranaItemDel='.$row['id'].'"><i class="fa fa-minus-square icon-white"></i></a> &nbsp  <a  href="KiranaItemListUpdate.php?id='.$row['id'].'"><i class="fa fa-edit icon-white"></i></a></td>
								</tr>  ';
		}





//WHEN USER CLICK FROM vechicle VIEW THE ID OF THE CLICKED USERNAME ALONG DATA WILL BE PASSED TO SHOW IN UPDATE FORM FIELDS
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $item = $_POST['item'];
    $gujrati = $_POST['gujrati'];
  
    
   echo $query = "INSERT INTO kiranaitemlist (item,gujrati)  values ('$item','$gujrati')";
    $rs1=	mysqli_query($conn,$query) or die(mysqli_error());
    header("location:functions.php?KiranaAddItem=1"); 

}



?>





<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Add Item Detail</strong>
                    </div>
                    <div class="card-body">
                        &nbsp;
                        <form class="form-inline" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
                            method="POST" enctype="multipart/form-data">
                            <table class="table table-bordered">
                                <tr>
                                    <td>Item: <br><input name="item" required class="form-control"
                                            type="text"
                                            value=""
                                             />
                                    </td>
                                    <td>Gujrati Item Name: <br><input name="gujrati" required class="form-control"
                                            type="text"
                                            value=""
                                             />
                                    </td>
                                   
                                <tr>
                                    <td><input type="submit" name="add" class="btn btn-success" value="Add Item" /></td>
                                </tr>
                            </table>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
	
	
	
<?php if($_SESSION['error_msg']!=''){echo $_SESSION['error_msg']; $_SESSION['error_msg']='';}?>
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Item List</strong>
                    </div>
                    <div class="card-body">
                       
                        <table id="bootstrap-data-table-export"
                            class="table table-sm table-bordered bootstrap-datatable datatable responsive">
                            <thead>
                                <tr>
                                   
                                <th>ID</th>
                                    <th>Item</th>
                                    <th>Gujrati Item Name</th>
                                    <th>Action</th>



                                </tr>
                            </thead>

                            <?php echo $html;?>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
	
	
   <?php  }

include 'footer.php';
?>