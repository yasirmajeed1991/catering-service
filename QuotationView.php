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

$query	=	"select * from quotation  ";
			$rs		 =	mysqli_query($conn,$query) or die(mysqli_error());
		$html = "";
		while($row		=	mysqli_fetch_array($rs))
		{
					$html	.=	'<tr style="font-size:12px">
								
								<td >'.$row['date'].'</td>
                                <td >'.$row['name'].'</td>
                                <td >'.$row['functiondate'].'</td>
                                <td >'.$row['mobile'].'</td>
                                <td >'.$row['address'].'</td>
                               	<td><a  target="_Blank" href="QuotationGenerateView.php?id='.$row['id'].'"><i class="fa fa-eye icon-white"></i></a> &nbsp <a  href="QuotationUpdate.php?id='.$row['id'].'"><i class="fa fa-edit icon-white"></i></a> &nbsp <a  href="functions.php?QuotationDel='.$row['id'].'"><i class="fa fa-minus-square icon-white"></i></a></td>
								</tr>  ';
		}


?>

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
                                
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Function Date</th>
                                    <th>Mobile</th>
                                    <th>Address</th>
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