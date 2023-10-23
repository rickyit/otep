<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="assets/css/style.css" rel="stylesheet">
  <title>Document</title>
</head>
<body>
    <header id="header">
      <div id="logo">Otep</div>
      <div id="nav">
        <ul>
          <li><a href="companies.php" title="Companies">Companies</a></li>
          <li>Welcome, <?php echo $user['firstName']; ?></li>
          <li><a href="/otep/logout.php">Logout</a></li>
        </ul>
      </div>
    </header>
    <main>