<?php 
include_once('./db/connection.php');
include ('./includes/header.php');
if(isset($_GET['id'])){
	$id = $_GET['id'];

	$sql = "SELECT * FROM portfolio WHERE id = '$id'";
	$result = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($result);
}

?>
<div class="container">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Edit Portfolio</h4>
            <p class="card-category">Edit Content to your Portfolio</p>
        </div>
        <div class="card-body">
            <form action="update_portfolio_back.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" value="<?php echo $data['title'] ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                            <label >Tag</label>
                            <input type="text" name="tag" class="form-control"  value="<?php echo $data['tag'] ?>">
                        </div>
                    </div>
                </div>

                <input type="hidden" value="<?php echo $data['id']?>" name="id">
                <button type="submit" class="btn btn-primary pull-right">Add</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
<?php 
include ('./includes/footer.php');?>