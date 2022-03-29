<?php include('./includes/header.php');
include_once ('./db/connection.php');

$sql = "SELECT * From blogs";
$result = mysqli_query($conn, $sql);
$data_1 = mysqli_num_rows($result);

$sql_2 = "SELECT * From portfolio";
$result_2 = mysqli_query($conn, $sql_2);
$data_2 = mysqli_num_rows($result_2);

$sql_3 = "SELECT * From message";
$result_3 = mysqli_query($conn, $sql_3);
$data_3 = mysqli_num_rows($result_3);


?>
<div class="content">
	<div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                  </div>
                  <p class="card-category">Total Blogs</p>
                  <h3 class="card-title"><?php echo $data_1;?>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                     <i class="material-icons">local_offer</i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">store</i>
                  </div>
                  <p class="card-category">Total Portfolio</p>
                  <h3 class="card-title"><?php echo $data_2;?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                     <i class="material-icons">local_offer</i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">local_offer</i>
                  </div>
                  <p class="card-category">Total Messages</p>
                  <h3 class="card-title"><?php echo $data_3;?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">local_offer</i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">info_outline</i>
                  </div>
                  <h3 class="card-title"><a href="logout.php" class="btn btn-danger">Logout</a></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">local_offer</i>
                  </div>
                </div>
              </div>
            </div>

          </div>
</div>
<?php include('./includes/footer.php') ?>