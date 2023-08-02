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

$query	=	"select * from category  ";
			$rs		 =	mysqli_query($conn,$query) or die(mysqli_error());
		$html = "";
		while($row		=	mysqli_fetch_array($rs))
		{
					$html	.=	'<tr style="font-size:12px">
								
								<td >'.$row['category'].'</td>
                                <td >'.$row['gujrati'].'</td>
								
								<td><a  href="ViewSubCategory.php?id='.$row['id'].'"><i class="fa fa-eye icon-white"></i></a> &nbsp  <a  href="UpdateCategory.php?id='.$row['id'].'"><i class="fa fa-edit icon-white"></i></a></td>
								</tr>  ';
		}


        // <td><a  href="ViewSubCategory.php?id='.$row['id'].'"><i class="fa fa-eye icon-white"></i></a> &nbsp <a  href="functions.php?CategoryDel='.$row['id'].'"><i class="fa fa-minus-square icon-white"></i></a> &nbsp  <a  href="UpdateCategory.php?id='.$row['id'].'"><i class="fa fa-edit icon-white"></i></a></td>
	





?>



<?php 



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //POSTED RECORD
    //Validation For vechicle Form
        $category=$categoryErr='';
    
        $category				= 	$_REQUEST['category'];
        
    
    //VEHICLE_CATEGORY_OR_NAME	
      if (empty($_POST["category"])) {
        $categoryErr = "category Full Name is required";
      }
        
    //CHECKING FOR ERRORS IF THERE IS NOT ANY ERROR THAN THE FORM SHOULD BE SUBMITTED
    if(empty($categoryErr)) {
        //CHECKING FOR RECORD IF vechicle ALREADY EXISTED		
                $query			=	"select * from category where category = '$category' ";
                $rs		    	=	mysqli_query($conn,$query) or die(mysqli_error());
                $row		    =	mysqli_fetch_array($rs);
                if($row>0){
                    header("location:functions.php?Category=1");
                }
                else{
                            
                $query = "INSERT INTO category (category) 
                values('$category')";
                $rs=	mysqli_query($conn,$query) or die(mysqli_error());
                    
                header("location:functions.php?Category=0");
                }
    }
                
                
                
                
    }







?>









<!-- 

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Category</strong>
                    </div>
                    <div class="card-body">
                        &nbsp;
                        <form class="form-inline" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
                            method="POST" enctype="multipart/form-data">
                            <table class="table table-bordered">
                                <tr>
                                    <td>Add Category: <br><input name="category" class="form-control"
                                            Placeholder="Add Category" required="required" type="text"
                                            value="" /><?php echo '<p style="color:red">'.$categoryErr.'</p>';?>
                                    </td>
                                <tr>
                                    <td><input type="submit" class="btn btn-success" value="Add Category" /></td>
                                </tr>
                            </table>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->



<?php if($_SESSION['error_msg']!=''){echo $_SESSION['error_msg']; $_SESSION['error_msg']='';}?>
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Category List</strong>
                    </div>
                    <div class="card-body">
                       
                        <table id="bootstrap-data-table-export"
                            class="table table-sm table-bordered bootstrap-datatable datatable responsive">
                            <thead>
                                <tr>
                                    <!--       <th>Id</th>
														<th>Full Name</th>
														<th>Registration Date</th>
														
													  -->

                                    <th>Category</th>
                                    <th>Gujrati Category Name</th>
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









<?php }

 include 'footer.php';

?>