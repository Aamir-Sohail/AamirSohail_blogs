<?php
include_once('./db/connection.php');
include('./includes/header.php'); 
$sql = "SELECT * FROM blogs";
$result = mysqli_query($conn, $sql);

?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Manage Blogs</h4>
                  <p class="card-category">Manage your blogs from here</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Title
                        </th>
                        <th>
                          Tag
                        </th>
                        <th>
                          Date
                        </th>
                        <th>
                          Action
                        </th>
                      </thead>
                      <tbody>
                        <?php 
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                          <td>
                            <?php echo $i++;?>
                          </td>
                          <td>
                            <?php echo $row['title']?>
                          </td>
                          <td>
                            <?php echo $row['tag']?>
                          </td>
                          <td>
                            <?php echo $row['datee']?>
                          </td>
                          <td class="text-primary">

                            <a class="btn btn-success" href="edit_blog.php?id=<?php echo $row['id']?>">Edit</a>
                            <a class="btn btn-danger" href="delete_blog.php?id=<?php echo $row['id']?>">Delete</a>
                          </td>
                        </tr>
                       <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php include('./includes/footer.php'); ?>