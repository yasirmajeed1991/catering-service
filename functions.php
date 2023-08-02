<?php
session_start();
ob_start();
/*-----------------------------------------------------------------------------------------------------------------------*/	
include"config.php"; 
// Category Management
	//Existed Record
	if($_GET['Category']==1)
	{
		$_SESSION['error_msg']  = '<p class="alert alert-danger" role="alert">
		Record Already Existed Please Try Another
		</p>';
		header ('location: ViewCategory.php');
    }	

	//Added
	if($_GET['Category']==0)
	{
		$_SESSION['error_msg']  = '<p class="alert alert-success" role="alert">
		Record Has Been Saved Successfully.
		</p>';
		header ('location: ViewCategory.php');
    }	
	//Delete Entry
	if($_GET['CategoryDel']!="")
	{
		$id		=	$_GET['CategoryDel'];
		$query	="DELETE From category where id = $id";
		$rs = mysqli_query($conn,$query);

		$query	="DELETE From subcategory where cat_id = $id";
		$rs = mysqli_query($conn,$query);
		
		$_SESSION['error_msg']  = '<p class="alert alert-danger" role="alert">
		Record Has Been Deleted Succesfully.
		</p>';
		header ('location: ViewCategory.php');
    }

	//Update Entry
	if($_GET['UpdateCategory']==1)
	{
		$_SESSION['error_msg']  = '<p class="alert alert-success" role="alert">
		Record Has Been Updated Successfully.
		</p>';
		header ('location: ViewCategory.php');
    }	


	//SubCategory Records Entry
	
	//Existed Entry

	if($_GET['ExistCategory']!="")
	{
		$id= $_GET['ExistCategory'];
		$_SESSION['error_msg']  = '<p class="alert alert-danger" role="alert">
		Sub Category Already Existed.
		</p>';
		header ('location: ViewSubCategory.php?id='.$id.'');
	}		
	
	// Update Subcategory
	if($_GET['updatesubcategory']!="")
	{
	$id = $_GET['updatesubcategory'];
	$_SESSION['error_msg']  = '<p class="alert alert-success" role="alert">
	Sub Category Updated Successfully.
	</p>';
	header ('location: ViewSubCategory.php?id='.$id.'');
	}


	// Subcategory Del
	
	if($_GET['Subcategory_del']!="" && $_GET['sid']!="")
	{
		$id		=	$_GET['Subcategory_del'];
		$sid		=	$_GET['sid'];
		$query	="DELETE From subcategory where id = $id";
		$rs = mysqli_query($conn,$query);
		
		$_SESSION['error_msg']  = '<p class="alert alert-danger" role="alert">
		Sub Category Has Been Deleted Succesfully.
		</p>';
		header ('location: ViewSubCategory.php?id='.$sid.'');
    }

	// Record Added
	//Added
	if($_GET['AddSubCategory']!='')
	{	$id = $_GET['AddSubCategory'];
		$_SESSION['error_msg']  = '<p class="alert alert-success" role="alert">
		Record Has Been Saved Successfully.
		</p>';
		header ('location: ViewSubCategory.php?id='.$id.'');
    }	


	//AdminUser
	// Record Added
	//Added
	if($_GET['add_admin']!='')
	{	
		$_SESSION['error_msg']  = '<p class="alert alert-success" role="alert">
		Record Has Been Saved Successfully.
		</p>';
		header ('location: AdminUser.php');
    }	

	//Updated
	if($_GET['update_adminn']!='')
	{	
		$_SESSION['error_msg']  = '<p class="alert alert-success" role="alert">
		Record Has Been Saved Successfully.
		</p>';
		header ('location: AdminUser.php');
    }	
	//Item Added
	//Added
	if($_GET['SabjiAddItem']!='')
	{	
		$_SESSION['error_msg']  = '<p class="alert alert-success" role="alert">
		Record Has Been Saved Successfully.
		</p>';
		header ('location: SabjiItemList.php');
    }	

	//Item Del
	
	
	if($_GET['SabjiItemDel']!="" )
	{
		$id		=	$_GET['SabjiItemDel'];
		
		$query	="DELETE From sabjiitemlist where id = $id";
		$rs = mysqli_query($conn,$query);
		
		$_SESSION['error_msg']  = '<p class="alert alert-danger" role="alert">
		Item Has Been Deleted Succesfully.
		</p>';
		header ('location: SabjiItemList.php');
    }
// Item update

if($_GET['SabjiItemUpdate']==1)
{
	$_SESSION['error_msg']  = '<p class="alert alert-success" role="alert">
	Record Has Been Updated Successfully.
	</p>';
	header ('location: SabjiItemList.php');
}	
//Quotation Deleted
if($_GET['QuotationDel']!="")
{
	$id		=	$_GET['QuotationDel'];
	$query	="DELETE From quotation where id = $id";
	$rs = mysqli_query($conn,$query);

	
	$_SESSION['error_msg']  = '<p class="alert alert-danger" role="alert">
	Record Has Been Deleted Succesfully.
	</p>';
	header ('location: QuotationView.php');
}

//SabjiLists DEL
if($_GET['SabjiListsDel']!="")
{
	$id		=	$_GET['SabjiListsDel'];
	$query	="DELETE From  sabjilists where generatedid = $id";
	$rs = mysqli_query($conn,$query);

	
	$_SESSION['error_msg']  = '<p class="alert alert-danger" role="alert">
	Record Has Been Deleted Succesfully.
	</p>';
	header ('location: SabjiListsView.php');
}
//Kirana Item Added
	//Added
	if($_GET['KiranaAddItem']!='')
	{	
		$_SESSION['error_msg']  = '<p class="alert alert-success" role="alert">
		Record Has Been Saved Successfully.
		</p>';
		header ('location: KiranaItemList.php');
    }	
//Kirana Item Del
	
	
if($_GET['KiranaItemDel']!="" )
{
	$id		=	$_GET['KiranaItemDel'];
	
	$query	="DELETE From Kiranaitemlist where id = $id";
	$rs = mysqli_query($conn,$query);
	
	$_SESSION['error_msg']  = '<p class="alert alert-danger" role="alert">
	Item Has Been Deleted Succesfully.
	</p>';
	header ('location: KiranaItemList.php');
}
// Item updatekirana

if($_GET['KiranaItemUpdate']==1)
{
	$_SESSION['error_msg']  = '<p class="alert alert-success" role="alert">
	Record Has Been Updated Successfully.
	</p>';
	header ('location: KiranaItemList.php');
}	
//KiranaLists DEL
if($_GET['KiranaListsDel']!="")
{
	$id		=	$_GET['KiranaListsDel'];
	$query	="DELETE From  kiranalists where generatedid = $id";
	$rs = mysqli_query($conn,$query);

	
	$_SESSION['error_msg']  = '<p class="alert alert-danger" role="alert">
	Record Has Been Deleted Succesfully.
	</p>';
	header ('location: KiranaListsView.php');
}
//Bartan Item Del
	
	
if($_GET['BartanItemDel']!="" )
{
	$id		=	$_GET['BartanItemDel'];
	
	$query	="DELETE From bartanitemlist where id = $id";
	$rs = mysqli_query($conn,$query);
	
	$_SESSION['error_msg']  = '<p class="alert alert-danger" role="alert">
	Item Has Been Deleted Succesfully.
	</p>';
	header ('location: BartanItemList.php');
}
//bartan Item Added
	//Added
	if($_GET['bartanAddItem']!='')
	{	
		$_SESSION['error_msg']  = '<p class="alert alert-success" role="alert">
		Record Has Been Saved Successfully.
		</p>';
		header ('location: BartanItemList.php');
    }	
//bartan Item update

if($_GET['BartanItemUpdate']==1)
{
	$_SESSION['error_msg']  = '<p class="alert alert-success" role="alert">
	Record Has Been Updated Successfully.
	</p>';
	header ('location: BartanItemList.php');
}	
//BartanLists DEL
if($_GET['BartanListsDel']!="")
{
	$id		=	$_GET['BartanListsDel'];
	$query	="DELETE From  bartanlists where generatedid = $id";
	$rs = mysqli_query($conn,$query);

	
	$_SESSION['error_msg']  = '<p class="alert alert-danger" role="alert">
	Record Has Been Deleted Succesfully.
	</p>';
	header ('location: BartanListsView.php');
}
?>