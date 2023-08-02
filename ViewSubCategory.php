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

$sid = $_GET['id'];
$add = $_GET['add'];



// Getting subcategory data to update the record
     

            $query	=	"select * from category where id = $sid  ";
			$rs		 =	mysqli_query($conn,$query) or die(mysqli_error());
            $result		=	mysqli_fetch_array($rs);
            $CategoryName = $result['category'];


$query	=	"select * from subcategory where cat_id = $sid   ";
			$rs		 =	mysqli_query($conn,$query) or die(mysqli_error());
		$html = "";
		while($row		=	mysqli_fetch_array($rs))
		{
					$html	.=	'<tr style="font-size:12px">
                                 <td >'.$row['id'].'</td>
								<td >'.$row['item'].'</td>
                                <td >'.$row['gujrati'].'</td>
                                <td >'.$row['price'].'</td>
                                <td><a  href="functions.php?Subcategory_del='.$row['id'].'&&sid='.$sid.'"><i class="fa fa-minus-square icon-white"></i></a> &nbsp  <a  href="UpdateSubCategory.php?subid='.$row['id'].'&&id='.$sid.'"><i class="fa fa-edit icon-white"></i></a></td>
								</tr>  ';
		}
?>


<?php


if (isset($_POST['add'])) {
    //POSTED RECORD
   
       
    
        $item				= 	$_REQUEST['item'];
        $gujrati			= 	$_REQUEST['gujrati'];
        $price				= 	$_REQUEST['price'];
        
    
        //CHECKING FOR RECORD IF vechicle ALREADY EXISTED		
                $query			=	"select * from subcategory where item = '$item' ";
                $rs		    	=	mysqli_query($conn,$query) or die(mysqli_error());
                $row		    =	mysqli_fetch_array($rs);
                if($row>0){
                    header("location:functions.php?ExistCategory=$sid");
                }
                else{
                            
                $query = "INSERT INTO subcategory (cat_id,item,gujrati,price) 
                values('$sid','$item','$gujrati','$price')";
                $rs=	mysqli_query($conn,$query) or die(mysqli_error());
                    
                header("location:functions.php?AddSubCategory=$sid");
                }
   
                
                
                
                
    }
      




?>





<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Add Item</strong>
                    </div>
                    <div class="card-body">
                        &nbsp;
                        <form class="form-inline" action=""
                            method="POST" enctype="multipart/form-data">
                            <table class="table table-bordered">
                                <tr>
                                    <td>Item Name: <br><input name="item" required class="form-control"
                                            type="text"
                                            value=""
                                             />
                                    </td>
                                    <td>Item Gujrati Name: <br><input name="gujrati" required class="form-control"
                                            type="text"
                                            value=""
                                             />
                                    </td>
                                    <td>Item Price: <br><input name="price" required class="form-control"
                                            type="text" placeholder="0.00 INR"
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
									<strong class="card-title">Items List of <?php echo $CategoryName?></strong>
								</div>
								<div class="card-body">
											<table id="bootstrap-data-table-export" class="table table-sm table-bordered bootstrap-datatable datatable responsive">
											<thead>
											<tr>
												 <!--       <th>Id</th>
														<th>Full Name</th>
														<th>Registration Date</th>
														
													  --> 
                                                      <th>ID</th>
														<th>Item Name</th>
                                                        <th>Item Gujrati Name</th>
                                                        <th>Price</th>
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