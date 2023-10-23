<?php include('inc.php'); ?>

<?php
if( isset( $_POST['add_company'] ) ) {
  $name = $_POST['name'];
  $desc = $_POST['desc'];
  $email = $_POST['email'];
  $errors = array();

  if( $name == "" ) {
    $errors['name'] = "Name is required.";
  }

  if( $desc == "" ) {
    $errors['desc'] = "Description is required.";
  }

  if( $email == "" ) {
    $errors['email'] = "Email is required.";
  }

  if( !$errors ) {
    $sql = "
      INSERT INTO `companies`
      (`name`, `description`, `email`)
      VALUES
      ('$name', '$desc', '$email')
    ";
    $result = $connect->query( $sql );
    if( $result ) {
      header( "Location: companies.php" );
    }
  }
}
?>

<?php include('header.php'); ?>
<div class="content" id="add-company">
<div class="container">
    <div class="row">
      <div class="col-12">
        <header class="content-header">
          <h1 class="content-title">Add Company</h1>
        </header>
        <form action="add-company.php" method="post">
          <div class="mb-3">
            <label class="form-label">Name: </label>
            <input type="text" name="name" class="form-control" />
          </div>
          <div class="mb-3">
            <label class="form-label">Description: </label>
            <textarea name="desc" class="form-control"></textarea>
          </div>
          <div class="mb-3">
            <label class="form-label">Email: </label>
            <input type="text" name="email" class="form-control" />
          </div>  
          <div class="mb-3">
            <button type="submit" name="add_company" class="btn btn-primary">Add Company</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>
