<?php include 'admin_header.php';
	require_once 'controllers/ProductController.php';
	$id = $_GET["id"];
	$pr= getProduct($id);
?>
<!--editproduct starts -->
<div class="center">
<table>
	<td>
		<img class="item-image" src="<?php echo $pr["img"];?>"></img>
	</td>
	<td>
		<form class="form-horizontal form-material">
			<div class="form-group">
				<h4 class="text">Name:</h4> 
				<input type="text" value ="<?php echo $pr["name"];?>"class="form-control">
			</div>
			<div class="form-group">
				<h4 class="text">Category:</h4> 
				<select class="form-control">
					<option>Choose</option>
				</select>
			</div>
			<div class="form-group">
				<h4 class="text">Price:</h4> 
				<input type="text" class="form-control">
			</div>
			<div class="form-group">
				<h4 class="text">Quantity:</h4> 
				<input type="text" class="form-control">
			</div>
			<div class="form-group">
				<h4 class="text">Description:</h4> 
				<textarea type="text" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<h4 class="text">Image</h4> 
				<input type="file" class="form-control">
			</div>
			<div class="form-group text-center">
				
				<input type="submit" class="btn btn-success" value="Edit Product" class="form-control">
			</div>
		</form>
	</td>
</table>				
</div>

<!--editproduct ends -->
<?php include 'admin_footer.php';?>