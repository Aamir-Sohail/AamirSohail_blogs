<?php
include_once('./db/connection.php');
include('./includes/header.php'); 
$sql = "SELECT * FROM message order by id";
$result = mysqli_query($conn, $sql);

?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Manage Message</h4>
                  <p class="card-category">Manage your Message from here</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                          Email
                        </th>
                        <th>
                          Subject
                        </th>
                        <th>
                          Message
                        </th>
                        <th>
                          Actions
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
                            <?php echo $row['name']?>
                          </td>
                          <td>
                            <?php echo $row['email']?>
                          </td>
                          <td>
                            <?php echo $row['subject']?>
                          </td>
                          <td>
                            <?php echo $row['msg']?>
                          </td>
                          <td>
                          <a class="btn btn-danger" href="delete_message.php?id=<?php echo $row['id']?>">Delete</a>
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