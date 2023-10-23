<?php include('inc.php'); ?>

<?php
if( !isset( $_GET['id'] ) ) {
  header( "Location: companies.php" );
}

$sql = "SELECT * FROM `companies` WHERE `id` = " . $_GET['id'] . " LIMIT 1";
$result = $connect->query( $sql );
if( $result->num_rows > 0 ) {
  $company = $result->fetch_assoc();
} else {
  header( "Location: companies.php" );
}

if( isset( $_POST['edit_company'] ) ) {
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
    $sql = "UPDATE `companies` SET `name` = '$name', `description` = '$desc', `email` = '$email' WHERE `id` = " . $_GET['id'];
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
          <h1 class="content-title">Update Company</h1>
        </header>
        <form action="edit-company.php?id=<?php echo $_GET['id']; ?>" method="post">
          <div class="mb-3">
            <label class="form-label">Name: </label>
            <input type="text" name="name" class="form-control" value="<?php echo $company['name']; ?>" />
          </div>
          <div class="mb-3">
            <label class="form-label">Description: </label>
            <textarea name="desc" class="form-control"><?php echo $company['description']; ?></textarea>
          </div>
          <div class="mb-3">
            <label class="form-label">Email: </label>
            <input type="text" name="email" class="form-control" value="<?php echo $company['email']; ?>" />
          </div>  
          <div class="mb-3">
            <button type="submit" name="edit_company" class="btn btn-primary">Update Company</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>
