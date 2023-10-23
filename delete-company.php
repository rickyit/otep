<?php include('inc.php'); ?>

<?php
if( !isset( $_GET['id'] ) ) {
  header( "Location: companies.php" );
}

if( isset( $_GET['action'] ) && $_GET['action'] == "delete" ) {
  $sql = "DELETE FROM `companies` WHERE `id` = " . $_GET['id'];
  $result = $connect->query( $sql );
  if( $result ) {
    header( "Location: companies.php" );
  }
}


$sql = "SELECT * FROM `companies` WHERE `id` = " . $_GET['id'] . " LIMIT 1";
$result = $connect->query( $sql );
if( $result->num_rows > 0 ) {
  $company = $result->fetch_assoc();
} else {
  header( "Location: companies.php" );
}
?>

<?php include('header.php'); ?>
<div class="content" id="add-company">
<div class="container">
    <div class="row">
      <div class="col-12">
        <header class="content-header">
          <h1 class="content-title">Delete Company</h1>
        </header>
        <p>
          Are you sure you want to remove "<?php echo $company['name'] ?>"?
        </p>
        <p>
          <a href="delete-company.php?action=delete&id=<?php echo $_GET['id']; ?>" title="Remove" class="btn btn-danger">Yes, I'm sure!</a>
        </p>
      </div>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>
