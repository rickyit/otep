<?php include('inc.php'); ?>
<?php include('header.php'); ?>
<div class="content" id="companies">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <header class="content-header">
          <h1 class="content-title">Manage Companies</h1>
          <div class="btn-group">
            <a href="add-company.php" class="btn btn-primary">Add Company</a>
          </div>
        </header>
        <table class="table">
          <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          <?php
            $sql = "SELECT * FROM `companies`";
            $result = $connect->query( $sql );
            if( $result->num_rows > 0 ) {
              while( $row = $result->fetch_assoc() ) {
              ?>
                <tr>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td>
                    <a href="edit-company.php?id=<?php echo $row['id']; ?>" title="Edit" class="btn btn-primary">Edit</a>
                    <a href="delete-company.php?id=<?php echo $row['id']; ?>" title="Delete" class="btn btn-danger">Remove</a>
                  </td>
                </tr>
              <?php
              }  
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>


