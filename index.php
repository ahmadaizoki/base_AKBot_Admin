<html>
<title>
  Base Admin
</title>
<header>
  <h1>Base Admin</h1>
  <br>
  <br>
  <link rel="stylesheet" type="text/css" href="style.css">
</header>
<body>
  <?php
    $pdoString = "pgsql:host=ec2-54-75-224-100.eu-west-1.compute.amazonaws.com dbname=deoaedt1t45duq user=ufmqwqytarffyx password=96a05ed81622bac458a19cff32a97e37fb2ae74bfb2a1e3f3b484fdf30735b82";
    $pdo = new PDO($pdoString);
    if (!$pdo) {
      die("Could not connect");
    }
    $sql = "select * from offre";
    $statement = $pdo->query($sql);
    $display = "    <table align=\"'center'\" border=\"1\">\n";
    $display .= "      <tr>\n";
    $display .= "        <td> ID </td>\n";
    $display .= "        <td> Nbdays </td>\n";
    $display .= "        <td> Nbmax </td>\n";
    $display .= "        <td> Nbmin </td>\n";
    $display .= "        <td> Dayn </td>\n";
    $display .= "        <td> Dayt </td>\n";
    $display .= "        <td> Nom </td>\n";
    $display .= "        <td> Rate </td>\n";
    $display .= "      </tr>\n";
    while (($row = $statement->fetch(PDO::FETCH_ASSOC))) {
      $display .= "      <tr>\n";
      $display .= "        <td>" . $row["id"] . "</td>\n";
      $display .= "        <td>" . $row["nbdays"] . "</td>\n";
      $display .= "        <td>" . $row["nbmax"] . "</td>\n";
      $display .= "        <td>" . $row["nbmin"] . "</td>\n";
      $display .= "        <td>" . $row["dayn"] . "</td>\n";
      $display .= "        <td>" . $row["dayt"] . "</td>\n";
      $display .= "        <td>" . $row["nom"] . "</td>\n";
      $display .= "        <td>" . $row["rate"] . "</td>\n";
      if ($row["id"]==1){
        $qu="SELECT * FROM offre WHERE id=1";
        $pdoStrings = "pgsql:host=ec2-54-75-224-100.eu-west-1.compute.amazonaws.com dbname=deoaedt1t45duq user=ufmqwqytarffyx password=96a05ed81622bac458a19cff32a97e37fb2ae74bfb2a1e3f3b484fdf30735b82";
        $pdos = new PDO($pdoStrings);
        if (!$pdos) {
          die("Could not connect");
        }
        $statements = $pdos->query($qu);
        while (($rows = $statements->fetch(PDO::FETCH_ASSOC))) {
          $display .= "        <td> <a href=update.php?id=" . $rows["id"] . "&nbdays=" . $rows["nbdays"] . "&nbmax=" . $rows["nbmax"] . "&nbmin=" . $rows["nbmin"] . "&dayn=" . $rows["dayn"] . "&dayt=" . $rows["dayt"] . "&rate=" . $rows["rate"] . "&nom=" . $rows["nom"] . ">Edit</a> </td>\n";
        }
      }else if ($row["id"]==2){
        $qu="SELECT * FROM offre WHERE id=2";
        $pdoStrings = "pgsql:host=ec2-54-75-224-100.eu-west-1.compute.amazonaws.com dbname=deoaedt1t45duq user=ufmqwqytarffyx password=96a05ed81622bac458a19cff32a97e37fb2ae74bfb2a1e3f3b484fdf30735b82";
        $pdos = new PDO($pdoStrings);
        if (!$pdos) {
          die("Could not connect");
        }
        $statements = $pdos->query($qu);
        while (($rows = $statements->fetch(PDO::FETCH_ASSOC))) {
          $display .= "        <td> <a href=update.php?id=" . $rows["id"] . "&nbdays=" . $rows["nbdays"] . "&nbmax=" . $rows["nbmax"] . "&nbmin=" . $rows["nbmin"] . "&dayn=" . $rows["dayn"] . "&dayt=" . $rows["dayt"] . "&rate=" . $rows["rate"] . "&nom=" . $rows["nom"] . ">Edit</a> </td>\n";
        }
      }else if ($row["id"]==3){
        $qu="SELECT * FROM offre WHERE id=3";
        $pdoStrings = "pgsql:host=ec2-54-75-224-100.eu-west-1.compute.amazonaws.com dbname=deoaedt1t45duq user=ufmqwqytarffyx password=96a05ed81622bac458a19cff32a97e37fb2ae74bfb2a1e3f3b484fdf30735b82";
        $pdos = new PDO($pdoStrings);
        if (!$pdos) {
          die("Could not connect");
        }
        $statements = $pdos->query($qu);
        while (($rows = $statements->fetch(PDO::FETCH_ASSOC))) {
          $display .= "        <td> <a href=update.php?id=" . $rows["id"] . "&nbdays=" . $rows["nbdays"] . "&nbmax=" . $rows["nbmax"] . "&nbmin=" . $rows["nbmin"] . "&dayn=" . $rows["dayn"] . "&dayt=" . $rows["dayt"] . "&rate=" . $rows["rate"] . "&nom=" . $rows["nom"] . ">Edit</a> </td>\n";
        }
      }else{
        $display .= "        <td> <a href=update.php>Edit</a> </td>\n";
      }
      $display .= "      </tr>\n";
    }
    echo $display;
  ?>
</body>
</html>
